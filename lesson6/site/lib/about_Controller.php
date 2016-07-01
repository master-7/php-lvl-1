<?php
class about_Controller extends AbstractController
{
  public function __construct($data = array())
  {
    parent::__construct($data);
    $this->title = 'About';
    $this->content = 'This is content about content';
    if (isset($this->GET['param1']) == '123') {
      $this->changeContent();
    }
  }

  protected function changeContent()
  {
    $this->content=$this->GET['param1'];
  }
}
?>
