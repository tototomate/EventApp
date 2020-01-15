<?php
session_start();


if (isset($_SESSION['sucheUser'])) {
    $tempArray = $_SESSION['sucheUser'];
    echo json_encode($tempArray);
} else {
    $tempArray = $_SESSION['allUsers'];
    echo json_encode($tempArray);
}