<?php

session_start();


if (isset($_SESSION['sucheEvent'])) {

    $tempArray = $_SESSION['sucheEvent'];
    echo json_encode($tempArray);

} else {

    try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }

    $stmt = $db->query("SELECT category FROM Event INNER JOIN categorized_in ON pk_event_id = fk_event_id INNER JOIN category ON fk_cat_id = pk_cat_id ORDER BY pk_event_id;");
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $db->query("SELECT COUNT(*) AS 'likes' FROM user_partakes;");
    $likes = $stmt->fetch(PDO::FETCH_ASSOC);

    $pictures = [];


    $tempArray = $_SESSION['allEvents'];
    $tempArray = json_encode($tempArray);
    $tempArray = json_decode($tempArray, true);

    if (sizeof($tempArray) == 1){
        $tempArray[0]["category"] = $categories[0]['category'];
        echo json_encode($tempArray);
    } else {
        $i = 0;
        $erg = [];

        foreach ($tempArray as $event){
            $event["category"] = $categories[$i]['category'];
            $event["likes"] = $likes['likes'];
            $i++;
            array_push($erg, $event);
        }

        echo json_encode($erg);
    }
}
