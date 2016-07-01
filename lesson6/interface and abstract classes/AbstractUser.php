<?php
require_once("IUser.php");

abstract class AbstractUser implements IUser {
    public $username;
    public $age;
    public $rating;

    public $bonus;

    public function getBonus() {
        return $this->bonus;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getAge() {
        return $this->age;
    }
    public function getRating() {
        return $this->rating;
    }
}