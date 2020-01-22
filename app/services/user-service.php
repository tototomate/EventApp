<?php

session_start();

$user = $_SESSION['user'];

$username = $user['username'];

$userid = $user['pk_user_id'];

try {
    $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException  $e) {
    echo "Fehler: " . $e;
    exit();
}

$stmt = $db->query("SELECT COUNT(pk_event_id) AS 'eventsCount' FROM Event WHERE creator ='$userid'");

$eventsCount = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt2 = $db->query("SELECT * FROM Event WHERE creator ='$userid'");

$events = $stmt2->fetchAll(PDO::FETCH_ASSOC);



$stmt = $db->query("SELECT COUNT(*) AS 'abos' FROM follows WHERE fk_user_id = '$userid'");

$abos = $stmt->fetch(PDO::FETCH_ASSOC);

$returnArray['abos'][] = $abos['abos'];



$stmt = $db->query("SELECT COUNT(*) AS 'followers' FROM followed_by WHERE fk_user_id = '$userid'");

$followers = $stmt->fetch(PDO::FETCH_ASSOC);



$returnArray['followers'][] = $followers['followers'];

$array['username'] = $username;
$array['eventsCount'] = $eventsCount['eventsCount'];
$array['events'] = $events;
$array['abos'] = $abos['abos'];
$array['followers'] = $followers['followers'];

echo json_encode($array);