<?php

// Фабрика
class User
{
    public function setName()
    {
        //...
    }

    public function setAge()
    {
        //...
    }

    protected function __construct($id = null) {
        DB::getInstance()->getData('SELECT * FROM USER WHERE ID=?', $id);

        $this->setName($fromDB);
        $this->setAge($fromDB);
    }

    public static function Create() {
        Logger::message('New user created');
        return new User();
    }

    public static function Load($id) {
        Logger::message('User loaded');
        return new User($id);
    }
}

$user = User::Create();

?>
