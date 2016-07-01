<?php
abstract class AbstractController
{
  protected $title;
  protected $content;
  protected $GET;

  public function __construct($data = array())
  {
    $this->GET = $data;
  }

  public function getTitle()
  {
    return $this->title;
  }

  final public function getContent()
  {
    return ['title' => $this->title, 'content'=>$this->content, 'menu' => $this->getMenu()];
  }

  final public function getMenu()
  {
    $dir = opendir(LIB_DIR);
    $controllers = [];
    while($d = readdir($dir)) {
      if (strstr($d, '_Controller')) {
        $controllers[] = substr($d, 0, strpos($d,'_'));
      }
    }
    closedir($dir);
    $pages = [];
    foreach ($controllers as $page) {
      $controllerString = $page . '_Controller';
      $controller = new $controllerString();
      $pages[] = [
        'title' => $controller->getTitle(),
        'url' => $page
      ];
    }
    return $pages;
  }
}
