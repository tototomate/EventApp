<?php

session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException  $e) {
    echo "Fehler: " . $e;
    exit();
}

$userId = $_SESSION['user']['pk_user_id'];
$eventname = $_POST['eventname'];

$stmt = $db->query("SELECT * FROM Event WHERE name = '$eventname'");

$like_event = $stmt->fetch(PDO::FETCH_ASSOC);

$like_event_id = $like_event['pk_event_id'];

$stmt = $db->query("INSERT INTO user_partakes (fk_user_id, fk_event_id) VALUES('$userId', '$like_event_id');");