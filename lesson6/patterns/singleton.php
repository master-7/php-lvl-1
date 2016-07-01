<?php

class TestSingleton
{
    private static $instance = null;

    private function __construct()
    { }

    private function __clone()
    { }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function Hello()
    {
        echo 'Hello, world!';
    }
}

class Page
{
    public function GetData()
    {
        DB::getInstance()->Select('SELECT * FROM PAGE WHERE ... ');
    }
}