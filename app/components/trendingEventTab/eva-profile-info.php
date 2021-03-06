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

$stmt = $db->query("SELECT COUNT(*) AS 'Anzahl' FROM follows WHERE fk_user_id = '$userId'");
$already_follows = $stmt->fetch(PDO::FETCH_ASSOC);

$username = $_POST['username'];

$stmt = $db->query("SELECT * FROM User WHERE username = '$username'");

$follow_me = $stmt->fetch(PDO::FETCH_ASSOC);

$follow_me_id = $follow_me['pk_user_id'];

if ($already_follows['Anzahl'] > 0){

    $stmt = $db->query("DELETE FROM follows WHERE fk_user_id = '$userId' AND fk_follows_id = '$follow_me_id'");
    $stmt = $db->query("DELETE FROM followed_by WHERE fk_user_id = '$follow_me_id' AND fk_followed_by_id ='$userId'");

} else {

    $stmt = $db->query("INSERT INTO follows VALUES('$userId', '$follow_me_id');");
    $stmt = $db->query("INSERT INTO followed_by VALUES('$follow_me_id', '$userId');");
}