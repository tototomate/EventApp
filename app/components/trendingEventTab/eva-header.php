<?php
session_start();

$eingabe = $_POST['suchbegriff'];

$filter = $_POST['filter'];



if ($filter == 1) {

    try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }

    $stmt = $db->query("SELECT * FROM User WHERE username LIKE '$eingabe%'");

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['sucheUser'] = $users;

}

if ($filter == 0) {

    $category = $_POST['category'];

    try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }

    $stmt = $db->query("SELECT * FROM Event INNER JOIN categorized_in ON pk_event_id = fk_event_id INNER JOIN Category ON fk_cat_id = pk_cat_id WHERE name LIKE '$eingabe' AND category = '$category'");

    $events = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['sucheEvent'] = $events;

}