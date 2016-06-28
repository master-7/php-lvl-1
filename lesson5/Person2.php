<?php

class Person2
{
    public $name = 'NameByDefault';

    public function setName($name)
    {
        $this->name = $name;
        $this->getName();
    }

    public function getName()
    {
        echo $this->name;
    }
}

$person = new Person2();
$person->setName('Alex');

var_dump($person);
