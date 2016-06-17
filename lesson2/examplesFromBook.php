<h3>Example1</h3>
<?php
    $name = 'Alex';
    $string = 'Hello, ' . $name;
    echo $string;
?>
<br>
<?php
    $otherString = str_replace('Hello', 'Goodbye', $string);
    echo $otherString;
?>
<h3>Example2</h3>
<?php
    $str = 'Test';
    $b = print_r($str, true);
?>
<br>
$b = <?=$b?>
