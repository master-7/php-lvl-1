<?php
class Entity
{
    protected $entityName;
    protected $width;

    public function __construct($name, $width)
    {
        $this->entityName = $name;
        $this->width = $width;
    }

    public function __destruct()
    {
        echo 'oh, no';
    }

    public function getName()
    {
        return $this->entityName;
    }

    public function getWidth()
    {
        return $this->width;
    }
}

$e = new Entity('this is entity name', 100);
echo $e->getName() . "<br>";
echo $e->getWidth() . "<br>";