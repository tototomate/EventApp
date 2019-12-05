<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 05.12.2019
 * Time: 11:59
 */

$eingabe = file_get_contents("php://input");
$suchbegriff = json_decode($eingabe);

echo "HALLO";
echo $suchbegriff;

/**if ($eingabe === null) {

    try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }


    $stmt = $db->query("SELECT * FROM User WHERE username LIKE '$eingabe'");
//$stmt = $db->query("SELECT * FROM Event WHERE eventname LIKE '$eingabe'");
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode($user);
 * */
