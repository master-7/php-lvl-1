<?php

define('LIMIT_OPERATION', 10);

$counter = 0;

while($counter <= LIMIT_OPERATION) {
    echo ++$counter;
    echo "<br>";
}
?>
    <div>
        finish while!
    </div>
<?php

$counter = 0;

do {
    echo ++$counter;
    echo "<br>";
} while($counter <= LIMIT_OPERATION);
?>

<div>
    finish do / while!
</div>

<?php

$counter = 0;

while($counter <= LIMIT_OPERATION) {
    if($counter == 5 || $counter == 6) {
        $counter++;
        continue;
    }
    echo $counter++;
    echo "<br>";
}

?>
    <div>
        finish continue!
    </div>
