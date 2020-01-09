<?php
session_start();

var_dump($_SESSION['sucheUser']);

if (isset($_SESSION['sucheUser'])) {
    $tempArray = [];
    for ($i = 0; $i < sizeof($_SESSION['sucheUser']); $i++) {
        array_push($tempArray, $_SESSION['sucheUser'][$i]['username']);
    }
    echo implode(",", $tempArray);

} else {
    $tempArray = [];
    for ($i = 0; $i < sizeof($_SESSION['allUsers']); $i++) {
        array_push($tempArray, $_SESSION['allUsers'][$i]['username']);
    }

    echo implode(",", $tempArray);
}