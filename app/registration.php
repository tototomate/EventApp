<?php

session_start();

/*
 * der html-teil ist nur als Richtwert zu verstehen, input Felder & form bitte mit selbem Namen erstellen
 */

require('classes/user.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IEvent</title>
</head>
<body>
<form method = "post" action = "registration.php" name = "registrationForm">
    Vorname:  <input type = "text"     name = "fName">          <br>
    Nachname: <input type = "text"     name = "lName">          <br>
    PLZ:      <input type = "number"   name = "plz">            <br>
    Stadt:    <input type = "text"     name = "city">           <br>
    Username: <input type = "text"     name = "uName">          <br>
    Email:    <input type = "email"    name = "email">          <br>
    Passwort: <input type = "password" name = "password">       <br>

    <!--

    PASSWORT WIEDERHOLEN

    -->

    <input type="submit" name="register" value="Register">
</form>


<?php
if (isset($_POST['register'])) {
    $userobj = new user ($_POST['fName'], $_POST['lName'], $_POST['plz'], $_POST['city'], $_POST['uName'], $_POST['email'], $_POST['password']);
    $userobj->insertDatabase();


    try {
        $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException  $e) {
        echo "Fehler: " . $e;
        exit();
    }

    $temp = $userobj->getUserId();

    $stmt = $db->query("SELECT * FROM User WHERE pk_user_id = '$temp'");
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    $_SESSION['user'] = $user;

    header("location: index.html");

}
?>

</body>
</html>
