<?php
$users = [];

$users[0] = [
    'name' => 'Alex',
    'email' => 'alex@example.com'
];
$users[1] = [
    'name' => 'George',
    'email' => 'george@domain.ru',
    'additionalData' => 'Всем привет!'
];
$users[3] = [
    'name' => 'Michael',
    'email' => 'mich@test.com'
];

foreach ($users as $key => $value) {
    ?>
        <div>
            $key: <?php print_r($key)?>
        </div>
        <div>
            $value:
            <div>
                <?php
                    foreach ($value as $k => $v) {
                        ?>
                            <div>
                                $k: <?=$k?>
                            </div>
                            <div>
                                $v: <?=$v?>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <hr>
    <?php
}