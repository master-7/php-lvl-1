<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Курс PHP/1. ДЗ № 3-1. Геращенко Алексей</title>
</head>
<body>

<?php

$MESSAGE = [
    1 => [
        "MENUTEXT" => "рассказ про негритят",
        "MAINTEXT" => "10 негритят..."
    ],
    2 => [
        "MENUTEXT" => "роман про пять котят",
        "MAINTEXT" => "Пять котят...",
    ],
    3 => [
        "MENUTEXT" => "стихи про погремушку",
        "MAINTEXT" => "Погремушка-погремушка...",
    ],
    4 => [
        "MENUTEXT" => "поэма про лягушку",
        "MAINTEXT" => "Лягушка...",
    ],
    5 => [
        "MENUTEXT" => "эссе, как ловят белку",
        "MAINTEXT" => "Ловись белочка, большая и маленькая...",
    ],
    6 => [
        "MENUTEXT" => "техпаспорт на тарелку",
        "MAINTEXT" => "Техпаспорт на тарелку обыкновенную...",
    ]
];

$position = isset($_GET['pos']) ? $_GET['pos'] : null;

foreach($MESSAGE as $href => $text) {
    if(isset($_GET['pos']) && $href == $position) {
        echo "<p>Здесь {$text['MENUTEXT']}</p>";
    }
    else
        echo "<p><a href='?pos={$href}'>Здесь {$text['MENUTEXT']}<a/></p>";
}
?>

<br/>
<br/>

<?php
if($position) {
    ?>
        <p><b> Выбран текст "<?php echo ucfirst($MESSAGE[$position]['MENUTEXT']) ?>"</b></p>
        <br/>

        <p><b> Текст: "</b><?php echo $MESSAGE[$position]['MAINTEXT'] ?><b>"</b></p>
    <?php
}
else {
    ?>
    <h1>Добро пожаловать!</h1>
    <?php
}
?>
</body>