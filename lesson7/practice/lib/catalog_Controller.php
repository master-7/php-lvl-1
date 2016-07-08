<?php
class catalog_Controller extends AbstractController
{
  protected $Catalog = null;

  public function __construct($data = array())
  {
    parent::__construct($data);
    $this->fillCatalog();

    $this->title = 'Catalog';

  }

  public function execute()
  {
    $id = isset($this->GET['id']) ? intval($this->GET['id']) : 1;
    $category = $this->Catalog->Find($id);
    $templater = new Smarty();
    $output['title'] = $category->getName();
    $output['children'] = $category->getChildren();
    $output['goods'] = $category->listGoods();
    $templater->assign('category', $output);

    $this->content = $templater->fetch(TPL_DIR . '/category.html');
  }

  /*
   * Наполняем каталог
   */
  protected function fillCatalog()
  {
    $this->Catalog = new Category('Catalog');
    $this->Catalog->addChild(Category::Random(3));
    $this->Catalog->addChild(Category::Random(2));
    $this->Catalog->addChild(Category::Random(1));
    $this->Catalog->addChild(Category::Random());
  }

  protected function renderCategory()
  {

  }



}
?>
