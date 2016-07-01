<?php

class Site
{
  public static function render($file, $variables = [])
  {
    if (!is_file($file)) {
      die('Template file "' . $file . '" not found');
    }

    if (filesize($file) === 0) {
      die('Template file "' . $file . '" is empty');
    }

    ob_start();
    extract($variables);
    include $file;
    return ob_get_clean();
  }

  public static function loadPage($data)
  {
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
    $output = $pageController->getContent();
    // В шаблонизатор
    /*
     * ['title' , 'content']
     */

    var_dump($output);
  }
}
