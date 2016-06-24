<?php

$file = 'test.txt';
$data = "Hello, world!\tHello mars!\n";

$stream = fopen($file, 'a+');

fwrite($stream, $data);
fclose($stream);