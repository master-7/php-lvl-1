<h1>Users</h1>
<?php
    $userName = "Nick Masters";
    $age = 25;
    echo "<b>Username: </b>$userName <br> <b>Age: </b> $age";
?>
<br>
<?php
    $userName = "John Smith";
    $age = 35;
    echo "<b>Username: </b>$userName <br> <b>Age: </b> $age";
?>

<br>
<br>
<br>

<h1>Math operation</h1>
<h2>Rectangle area</h2>
<?php
    $width = 10;
    $height = 15;

    echo "<b>Width: </b>$width <br> <b>Height: </b> $height";
?>
<br>
<?php
    $rectangleArea = $width * $height;

    echo "<b>Rectangle area: </b>$rectangleArea";
?>

<br>
<br>
<br>

<h1>Bool type</h1>

<?php
    $check = true;

    echo "<b>Value check var: </b>$check <br>";

    $width = 10;
    $height = 10;

    echo "<b>Width: </b>$width <br>";
    echo "<b>Height: </b>$height <br>";

    $isSquare = $height == $width;

    echo "<b>Is square: </b>$isSquare <br>";
?>

<br>
<br>
<br>

<h1>Cast</h1>

<?php
    $fullSum = 123.43;

    echo "<b>Full sum: </b> $fullSum <br>";

    echo "<b>Sum without decimal: </b>" . (int) $fullSum . "<br>";
?>

<br>
<br>
<br>

<h1>Const</h1>

<?php
    $nullable = null;

    define('MY_CONST', 100);

    echo "<b>Const: </b>" . MY_CONST . "<br>";
?>

<br>
<br>
<br>
