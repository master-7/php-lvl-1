<?php
class Good
{
  protected $name;
  protected $price;

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = (float)$price;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  /*
   * Генерируем товар со случайными данными
   */
  public static function Random($minLength = 3, $maxLength = 12)
  {
    $str = 'abcdefghijklmnopqrstuvwxyz';
    $minLength = (int)$minLength;
    $maxLength = (int)$maxLength;
    $price1 = rand(1,1000);
    $price2 = rand(0,99);
    $nameLength = rand($minLength, $maxLength);
    $name = '';
    for ($i = 0; $i < $maxLength; $i++) {
      $name .= $str[rand(0,strlen($str)-1)];
    }
    return new Good(ucfirst($name), $price1 . '.' . $price2);
  }
}
?>
