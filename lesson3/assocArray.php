<?php

function getUser($users, $id)
{
    if (isset($users[$id])) {
        echo $users[$id]['name'] . '<br />';
        echo $users[$id]['email'] . '<br />';
        if (isset($users[$id]['additionalData'])) {
            echo $users[$id]['additionalData'];
        }
    }
    return false;
}


$users = [];

$users[0] = [
    'name' => 'Alex',
    'email' => 'alex@example.com'
];
$users[1] = [
    'name' => 'George',
    'email' => 'george@domain.ru',
    'additionalData' => 'Всем привет!'
];
$users[3] = [
    'name' => 'Michael',
    'email' => 'mich@test.com'
];

if (isset($users[1])) {
    getUser($users, 1);
}