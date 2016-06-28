<?php
class Person1
{
    public $name = 'Qwerty';
}

$person1 = new Person1();
$person1->name = 'Alex';

$person2 = new Person1();
$person2->name = 'George';

$person3 = new Person1();

var_dump($person1, $person2, $person3);

