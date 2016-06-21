<?php
    include_once 'functions.php';
?>
<html>
<head>
    <title><?=$pageTitle?></title>
</head>
<body>
<ul>
    <?php
        foreach ($users as $key => $val) {
            ?>
                <li>
                    <?=getUserInfo($val)?>
                </li>
            <?php
        }
    ?>
</ul>
</body>
</html>