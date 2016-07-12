<?php
date_default_timezone_set('Europe/Moscow');

define('SITE_ROOT', __DIR__);
define('WWW_ROOT', SITE_ROOT . '/www');

define('DATA_DIR', SITE_ROOT . '/data');
define('LIB_DIR', SITE_ROOT . '/lib');
define('TPL_DIR', SITE_ROOT . '/templates');

define('SITE_TITLE', 'Урок 6');


// Параметры базы данных
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_BASE', 'geekbrains');

// Подключаем шаблонизатор Smarty
require_once(LIB_DIR . '/smarty/Smarty.class.php');

function myAutoload($className)
{
  $file = LIB_DIR . '/' . $className . '.php';
  if (is_file($file)) {
    require_once($file);
  }
  return false;
}

spl_autoload_register('myAutoload');

?>
