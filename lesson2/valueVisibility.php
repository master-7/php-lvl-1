<?php
$name = 'Alex';

function sayHello2()
{
    global $name;
    echo $name;
}

sayHello2();