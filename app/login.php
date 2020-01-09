<?php

session_start();

require('classes/user.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IEvent</title>
</head>
<body>
<form method = "POST" action = "login.php" name = "loginForm">
    Email:    <input type = "email"    name = "email">          <br>
    Passwort: <input type = "password" name = "password">       <br>
    <input type="submit" name="login" value="Login">
    <input type="submit" name="register" value="Register">
</form>

<?php

if (isset($_POST['register'])) {
    header("location: registration.php");
}
if (isset($_POST['login'])) {


    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }

    $stmt = $db->query("SELECT * FROM User WHERE email = '$email'");
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if (isset($user['password']) && password_verify($password, $user['password'])){
        $_SESSION['user'] = $user;
        header("location: index.html");
    } else {
        echo "failure";
    }

}

try {
    $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException  $e) {
    echo "Fehler: " . $e;
    exit();
}

$stmt = $db->query("SELECT * FROM User");
$allUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['allUsers'] = $allUsers;