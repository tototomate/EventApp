<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 12.01.2020
 * Time: 23:43
 */

session_start();

require('../../classes/event.php');

try	{
    $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
}catch(PDOException  $e ) {
    echo "Fehler: " . $e;
    exit();
}

$event = new event ($_POST['title'], $_POST['location'], $_POST['date'], $_POST['description'], $_SESSION['user']['pk_user_id']);
$event->insertDatabase();