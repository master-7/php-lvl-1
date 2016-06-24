<?php

$dir = './';

$stream = opendir($dir);

while ($item = readdir($stream)) {
    echo $item . "\n";
}

closedir($stream);
