<?php

$file = 'test.txt';

$stream = fopen($file, 'r');

$buffer = '';

while (!feof($stream)) {
    $buffer .= fread($stream, 1);
}

fclose($stream);

echo $buffer;

$stream = fopen($file, 'r');

$buffer = fread($stream, filesize($file));

fclose($stream);

echo $buffer;
