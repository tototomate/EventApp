<?php
session_start();

$returnArray = [];


if (isset($_SESSION['sucheUser'])) {
    $tempArray = $_SESSION['sucheUser'];
    $returnArray['user'] = $tempArray;

    foreach ($tempArray as $user) {

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

        $returnArray['eventsCount'][] = $eventsCount['eventsCount'];


        try {
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            echo "Fehler: " . $e;
            exit();
        }

        $stmt = $db->query("SELECT COUNT(*) AS 'abos' FROM follows WHERE fk_user_id = '$userid'");

        $abos = $stmt->fetch(PDO::FETCH_ASSOC);

        $returnArray['abos'][] = $abos['abos'];


        try {
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            echo "Fehler: " . $e;
            exit();
        }

        $stmt = $db->query("SELECT COUNT(*) AS 'followers' FROM followed_by WHERE fk_user_id = '$userid'");

        $followers = $stmt->fetch(PDO::FETCH_ASSOC);

        $returnArray['followers'][] = $followers['followers'];

    }

    echo json_encode($returnArray);

} else {

    $tempArray = $_SESSION['allUsers'];
    $returnArray['user'] = $tempArray;


    foreach ($tempArray as $user) {

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

        $returnArray['eventsCount'][] = $eventsCount['eventsCount'];


        try {
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            echo "Fehler: " . $e;
            exit();
        }

        $stmt = $db->query("SELECT COUNT(*) AS 'abos' FROM follows WHERE fk_user_id = '$userid'");

        $abos = $stmt->fetch(PDO::FETCH_ASSOC);

        $returnArray['abos'][] = $abos['abos'];


        try {
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            echo "Fehler: " . $e;
            exit();
        }

        $stmt = $db->query("SELECT COUNT(*) AS 'followers' FROM followed_by WHERE fk_user_id = '$userid'");

        $followers = $stmt->fetch(PDO::FETCH_ASSOC);

        $returnArray['followers'][] = $followers['followers'];

    }


    echo json_encode($returnArray);


}