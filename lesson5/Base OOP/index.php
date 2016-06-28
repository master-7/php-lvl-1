<?php
require_once("Employer.php");
require_once("Manager.php");
require_once("Clerk.php");

$clerk = new Clerk();

var_dump($clerk->getType());
var_dump($clerk->getSchedule());

$manager = new Manager();

var_dump($manager->getType());
var_dump($manager->getSchedule());
