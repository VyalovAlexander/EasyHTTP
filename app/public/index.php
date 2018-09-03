<?php

require '../vendor/autoload.php';

use Fathom\BalanceBraces;

if (isset($_POST['string'])) {
    if (BalanceBraces::checkBraces(htmlspecialchars($_POST['string']))) {
        echo "OK";
    } else {
        header("HTTP/1.0 400 Bad Request");
        echo "Bad string";
    }
} else {
    header("HTTP/1.0 400 Bad Request");
    echo "Bad request";
}