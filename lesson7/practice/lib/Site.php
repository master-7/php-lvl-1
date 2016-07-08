<?php

class Site
{
  public static function loadPage($data)
  {
    // Мы ещё не в системе
    $logged = false;
    $username = false;

    // Соединиться с базой данных
    DB::getInstance()->Connect(DB_USER, DB_PASS, DB_BASE);

    // Сразу подсчитаем timeout
    $timeout = time()+(86400 * 30);

    if (isset($_COOKIE['session_id'])) {
      // Пробуем получить сессию пользователя
      $session = DB::getInstance()->Select(
        'SELECT * FROM sessions WHERE session_id = :session_id AND timeout > UNIX_TIMESTAMP(NOW())',
        ['session_id' => $_COOKIE['session_id']]
      );
      // Если нашли
      if (isset($session[0])) {
        // Обновим сессию у нас
        DB::getInstance()->Query('UPDATE sessions SET timeout=:timeout WHERE id=:id', ['id' => $session[0]['id'], 'timeout' => $timeout]);
        // Обновим сессию у пользователя
        setcookie('session_id', $session[0]['session_id'], $timeout);
        // Выведем информацию
        $userData = DB::getInstance()->Select('SELECT * FROM users WHERE id=:user_id', ['user_id' => $session[0]['user_id']]);
        $username = $userData[0]['name'];
        $logged = true;
      }
    }


    if (isset($data['action'])) {
      switch($data['action']) {
        case 'login':
          // Получаем данные по логину и пароль
          $userData = DB::getInstance()->Select(
            'SELECT * FROM users WHERE username=:username AND userpass=:userpass',
            [
              'username' => $data['username'],
              'userpass' => $data['password']
            ]
          );

          if (isset($userData[0])) {
            $sessionId = md5(rand(0,99999999999)+time()/rand(0,999));
            // Сохраняем сессию
            DB::getInstance()->
              Query(
                'INSERT INTO sessions (session_id, timeout, user_id) VALUES (:session_id, :timeout, :user_id)',
                [
                  'session_id' => $sessionId,
                  'timeout' => $timeout,
                  'user_id' => $userData[0]['id']
                ]
              );
            // Выставляем сессию пользователю и перегружаем страницу
            setcookie('session_id', $sessionId, $timeout);
            header("Location: .");
            exit;
          }
          break;
        case 'logout':
          // Переносим сессию в прошлое, перезагружаем страницу
          setcookie('session_id', '', time()-86400);
          header("Location: .");
          exit;
        break;
        case "registration":

            break;
      }
    }

    if (!isset($data['page'])) {
      $data['page'] = 'index';
    }
    $pageControllerName = $data['page'] . '_Controller';
    $pageController = null;

    if (class_exists($pageControllerName)) {
      $pageController = new $pageControllerName($data);
    } else {
      die('Страница ' . $data['page'] . ' не найдена!');
    }

    $pageController->execute();
    $output = $pageController->getContent();


    // Устанавливаем значения переменных шаблона
    $templater = new Smarty();
    $templater->assign('currentPage', $data['page']);
    $templater->assign('title', $output['title']);
    $templater->assign('content', $output['content']);
    $templater->assign('menu', $output['menu']);
    $templater->assign('logged', $logged);
    if ($logged) {
      $templater->assign('username', $username);
    }
    $templater->display(TPL_DIR . '/index.html');
  }
}
