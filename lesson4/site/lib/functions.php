<?php

//Константы ошибок
define('ERROR_NOT_FOUND', 1);
define('ERROR_TEMPLATE_EMPTY', 2);

/**
 * @param $layoutName
 * @param $title
 * @param $body
 * @return string
 */
function layout($layoutName, $title, $body)
{
    return render($layoutName, [
        "title" => $title,
        "body" => $body
    ]);
}

/**
 * Подключает наш файл шаблона с параметрами
 * @param $file
 * @param array $variables
 * @return string
 */
function render($file, $variables = [])
{
    if (!is_file($file)) {
      	echo 'Template file "' . $file . '" not found';
      	exit(ERROR_NOT_FOUND);
    }

    if (filesize($file) === 0) {
      	echo 'Template file "' . $file . '" is empty';
      	exit(ERROR_TEMPLATE_EMPTY);
    }

    ob_start();
    extract($variables);
    include $file;
    return ob_get_clean();
}

/**
 * @param $route
 * @param $params
 */
function renderPage($route, $params)
{
    echo layout(
        LAYOUT,
        TITLE,
        render(
            TPL_DIR . DIRECTORY_SEPARATOR . $route . ".php",
            $params
        )
    );
}
