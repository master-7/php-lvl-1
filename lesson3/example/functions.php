<?php

$pageTitle = 'Список пользователей';

$users = [
    [
        'name' => 'Alex',
        'email' => 'alex@domain.com',
        'age' => 35
    ],
    [
        'name' => 'George',
        'age' => 18,
        'additional' => 'Hello, world!',
    ],
    [
        'name' => 'Kate',
        'age' => 25,
        'email' => 'kate@example.com',
        'additional' => 'I like geekbrains!'
    ]
];

/**
 * @param $key
 * @return bool
 */
function getVarAlias($key)
{
    $aliases = [];
    $aliases['name'] = 'Имя';
    $aliases['email'] = 'Электропочта';
    $aliases['age'] = 'Возраст';
    $aliases['additional'] = 'Дополнительно';

    return isset($aliases[$key]) ? $aliases[$key] : false;
}

/**
 * @param $user
 * @return string
 */
function getUserInfo($user)
{
    $output = '<ul>';
    foreach ($user as $key => $value) {
        if (($varAlias = getVarAlias($key)) != false) {
            $output .= '<li>' . $varAlias . ': ' . $value . '</li>';
        }
    }
    $output .= '</ul>';
    return $output;
}