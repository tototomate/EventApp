<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 12.01.2020
 * Time: 23:43
 */

session_start();

require('../../classes/event.php');



$event_name = $_POST['title'];
$category_name = $_POST['category'];

$event = new event ($event_name, $_POST['location'], $_POST['date'], $_POST['description'], $_SESSION['user']['pk_user_id']);
$event->insertDatabase();


try	{
    $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
}catch(PDOException  $e ) {
    echo "Fehler: " . $e;
    exit();
}



$stmt = $db->query("SELECT pk_event_id FROM Event WHERE name = '$event_name'");
$event_id = $stmt->fetch(PDO::FETCH_ASSOC);
$event_id = $event_id['pk_event_id'];

$stmt2 = $db->query("SELECT pk_cat_id FROM Category WHERE category = '$category_name'");
$category_id = $stmt2->fetch(PDO::FETCH_ASSOC);
$category_id = $category_id['pk_cat_id'];

$insert = "INSERT INTO categorized_in (fk_event_id, fk_cat_id) VALUES ('$event_id', '$category_id')";
$db->query($insert);