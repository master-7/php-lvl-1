<?php

require_once('Category.php');
require_once('Good.php');

$Root = new Category('Catalog');
$Root->addChild(Category::Random(3));
$Root->addChild(Category::Random(2));
$Root->addChild(Category::Random(1));
$Root->addChild(Category::Random());

$category1 = new Category('Test');
$category1->addGood(new Good('test',12));
$Root->addChild($category1);


if (isset($_GET['category_id'])) {
  if(($found = $Root->find($_GET['category_id'])) !== false) {
    var_dump($found->listGoods());
  }
} elseif (isset($_GET['tree_id'])) {
  if(($found = $Root->find($_GET['tree_id'])) !== false) {
    var_dump($found);
  }
}
?>
