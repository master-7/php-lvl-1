<?php
define('ACCESS_DENIED', 0);
define('ACCESS_GUEST', 1);
define('ACCESS_OWNER', 2);

/**
 * Функция проверяет доступ для пользователя
 * @param $username
 * @return int
 */
function checkUserAccess ($username) {
    switch($username) {
        case "Вася":
            return ACCESS_GUEST;
            break;
        case "Петя":
            return ACCESS_OWNER;
            break;
        default:
            return ACCESS_DENIED;
            break;
    }
};

/**
 * Обрабатывает код ошибки и возвращает сообщение
 * @param $code
 * @return string
 */
function accessHandler ($code) {
    switch($code) {
        case ACCESS_GUEST:
            return "Пользователь гость";
            break;
        case ACCESS_OWNER:
            return "Пользователь владелец записи";
            break;
        default:
            return "Доступ запрещен!";
            break;
    }
};

$username = "Никита";

?>

<?=accessHandler(checkUserAccess($username))?>

