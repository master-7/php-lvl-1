<?php
define('MIN_AGE', 18);

define('SEX_UNKNOWN', 0);
define('SEX_MALE', 1);
define('SEX_FEMALE', 2);
define('SEX_UFO', 3);
define('SEX_I_HAVE_NOT_GOOD_IDEA', 4);

?>
    <h1>Здравствуй пользователь нашего портала для совершеннолетних</h1>
<?php

/**
 * Возраст пользователя
 */
$age = 18;

/**
 * Денежный счет пользователя
 */
$account = 0;

/**
 * Пол пользователя
 */
$sex = SEX_UNKNOWN;

/**
 * Настройка email оповещаний
 */
$emailIsSuccess = false;
$emailNotification = false;

/**
 * Настройка СМС оповещаний
 */
$phoneIsSuccess = false;

/**
 * Проверяем возраст и пол пользователя
 */
if ($age < MIN_AGE) {
    ?>
    <p>
        Ваш возраст <?= $age ?>, вы еще не можете посещать наш портал!
    </p>
    <?php
} else {
    ?>
    <p>
        Ваш возраст <?= $age ?>, добро пожаловать!
    </p>
    <?php
}

switch($sex) {
    case SEX_MALE:
        ?>
            <p>
                Добро пожаловать на новости спорта!
            </p>
        <?php
        break;
    case SEX_FEMALE:
        ?>
            <p>
                Добро пожаловать на новости из мира моды!
            </p>
        <?php
        break;
    case SEX_UFO:
    case SEX_I_HAVE_NOT_GOOD_IDEA:
        ?>
            <p>
                Добро пожаловать на новости из Альфа-Центавра!
            </p>
        <?php
        break;
    default:
        ?>
            <p>
                Добро пожаловать на новости из мира политики!
            </p>
        <?php
        break;
};

/**
 *
 */
if ($emailIsSuccess && $emailNotification) {
    ?>
    <p>
        Вам отправлены последние новости на email!
    </p>
    <?php
}

if (!$emailIsSuccess) {
    ?>
    <p>
        Вы не подтвердили email!
    </p>
    <?php
}

if (!$emailNotification) {
    ?>
    <p>
        Вы не настроили email уведомления!
    </p>
    <?php
}

if ($emailIsSuccess || $phoneIsSuccess) {
    ?>
    <p>
        Вы настроили оповещания
    </p>
    <?php
} else {
    ?>
        <p>
            Вы не настроили оповещания
        </p>
    <?php
}

$buyerInfo = $account > 0 ?
    "Вы можете делать покупки и имеете на счету $account р."
        :
    "Вы не можете делать покупок - у вас нет денег на счету";
?>
    <p>
        <?=$buyerInfo?>
    </p>
<?php


