<?php

class guestbook_Controller extends AbstractController
{

  protected $errors = [];
  protected $templater;

  const INTERVAL = 60;

  public function __construct($data = array())
  {
    parent::__construct($data);
    $this->title = 'Guestbook';
    $this->templater = new Smarty();
  }

  public function execute()
  {
    if (isset($this->REQUEST['save'])) {
      $this->postMessage();
    }
    $this->getMessages();
    $this->content = $this->templater->fetch(TPL_DIR . '/guestbook.html');
  }

  protected function prepareText($text)
  {
    return nl2br(htmlentities($text));
  }

  protected function postMessage()
  {
    $this->checkErrors();
    $this->templater = new Smarty();
    if (!empty($this->errors)) {
      $this->templater->assign('errors', $this->errors);
    } else {
      $currentUser = Site::getCurrentUser();
      DB::getInstance()->Query(
        'INSERT INTO guestbook (text, user, time) VALUES (:text, :user, :time)',
        [
          'text' => $this->prepareText($this->REQUEST['text']),
          'user' => $currentUser['id'],
          'time' => time()
        ]
      );
      header("Location: /?page=guestbook");
      exit;
    }
  }

  protected function checkErrors()
  {
    if (!Site::getCurrentUser()) {
      $this->errors[] = 'Вы не можете оставлять сообщения';
    }
    if (!isset($this->REQUEST['text']) || empty($this->REQUEST['text'])) {
      $this->errors[] = 'Сообщение пусто';
    }
    if (empty($this->errors)) {
      $currentUser = Site::getCurrentUser();
      $lastMessageTime = DB::getInstance()->Select('SELECT MAX(time) FROM guestbook WHERE user=?', [$currentUser['id']])[0]['MAX(time)'];
      if (isset($lastMessageTime)
        && $lastMessageTime != null
        && ($lastMessageTime + self::INTERVAL) > time()
      ) {
        $this->errors[] = 'Вы оставляете сообщения слишком часто';
      }
    }
  }

  protected function getMessages()
  {
    // Собираем все сообщения, сортируем по дате
    $messages = DB::getInstance()->Select('SELECT * FROM guestbook ORDER BY time DESC');
    $users = [];
    // В цикле обрабатываем каждое
    foreach ($messages as &$message) {

      $message['time'] = date('d.m.Y, H:i', $message['time']);
      // Заводим пользователя в кеш, если его нет
      if (!isset($users[$message['user']])) {
        $users[$message['user']] = DB::getInstance()
          ->Select(
            'SELECT name, email FROM users WHERE id=:id',
            [ 'id' => $message['user']]
          )[0]; // <- Выбор первого элемента из выборки

      }
      $message['user'] = $users[$message['user']]; // Перегружаем id пользователя в сообщении массивом с данными пользователя
    }
    
    $this->templater->assign('messages', $messages);
  }
}
