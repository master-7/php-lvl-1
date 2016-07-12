<?php
class about_Controller extends AbstractController
{
  public function __construct($data = array())
  {
    parent::__construct($data);
    $this->title = 'About';

  }

  public function execute()
  {
    $this->content = 'This is content about content';
    if (isset($this->REQUEST['param1']) == '123') {
      $this->changeContent();
    }
  }

  protected function changeContent()
  {
    $this->content=$this->REQUEST['param1'];
  }
}
?>
