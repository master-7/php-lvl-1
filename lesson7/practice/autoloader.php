<?php

function myAutoloader($className) {
  $file = WWW_ROOT . '/dz/' . $className .'.php';
  if (is_file($file)) {
    require_once($file);
  }
}

spl_autoload_register('myAutoLoader');
