<?php

$file = 'test2.txt';

$data = "Hello, world!\tHello mars!\n";;

file_put_contents($file, $data, FILE_APPEND);

echo file_get_contents($file);
