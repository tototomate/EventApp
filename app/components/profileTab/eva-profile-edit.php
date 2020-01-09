<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 19.12.2019
 * Time: 10:32
 */

session_start();


if( isset($_POST['username']) ){

    $username = $_POST['username'];

    $userid = $_SESSION['user']['pk_user_id'];

    /*try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }

    $stmt = $db->query("UPDATE user SET username = '$username' WHERE pk_user_id = '$userid';");
*/
    echo $username;
    echo $userid;
    echo "daci ist nici";
}

if( isset($_POST['password']) ){

    $password = $_POST['password'];

    $userid = $_SESSION['user']['pk_user_id'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    /*try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }

    $stmt = $db->query("UPDATE user SET password = '$password' WHERE pk_user_id = '$userid';");
*/
    echo $password;
    echo $userid;
    echo "stega ist mega";
}


if (isset($_POST['picture'])){
    $picture = $_POST['picture'];
    $userid = $_SESSION['user']['pk_user_id'];

    try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }

    $stmt = $db->query("UPDATE picture SET pathname = 'pictures/' WHERE fk_user_id = '$userid';");
    $stmt2 = $db->query("UPDATE picture SET filename = '$picture' WHERE fk_user_id = '$userid';");

}