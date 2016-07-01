<?php

class Category
{
  protected $name;
  protected $id;

  protected $goods = [];
  protected $children = [];

  protected static $lastInsertedId = 0;

  public function __construct($name)
  {
    $this->id = ++self::$lastInsertedId;
    $this->name = $name;
  }

  public function getId() {
    return $this->id;
  }

  public function listGoods()
  {
    return $this->goods;
  }

  public function addChild(Category $category)
  {
    $this->children[] = $category;
  }

  public function addGood(Good $item)
  {
    $this->goods[] = $item;
  }

  /*
   * Добавляет случайный набор товаров
   */
  public function addRandomGoods($max)
  {
    $max = (int)$max;
    for ($i = 0; $i < $max; $i++) {
      $this->addGood(Good::Random());
    }
  }
  /*
   * Генерируем категорию со случайными товарами
   */

  public static function Random($deep = 0, $minLength = 3, $maxLength = 12)
  {
    $str = 'abcdefghijklmnopqrstuvwxyz';
    $minLength = (int)$minLength;
    $maxLength = (int)$maxLength;
    $nameLength = rand($minLength, $maxLength);
    $name = '';
    for ($i = 0; $i < $maxLength; $i++) {
      $name .= $str[rand(0,strlen($str)-1)];
    }
    $Category = new Category($name);
    $Category->addRandomGoods(rand(1,10));
    if ($deep > 0) {
      $Category->addChild(Category::Random(--$deep));
    }

    return $Category;
  }

  /*
   * Находим нужную категорию в дереве
   */

  public function Find($id)
  {
    $id = intval($id);
    if ($this->id === $id) {
      return $this;
    }

    if (count($this->children) > 0) {
      foreach ($this -> children as $child) {
        $result = $child->Find($id);
        if ($result) {
          return $result;
        }
      }
    }
    return false;

  }
}
?>
