<?php
require_once('../config.php');

renderPage(
    $_GET['route'],
    [
        "id" => $_GET['id']
    ]
);