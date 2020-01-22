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
<style type="text/css">

    body{
        overflow-x:hidden;
        /*background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
        */
        display:flex;
        width:100vw;
        height:100vh;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    @keyframes fadeout{
        from{
            opacity:100%;

        }
        to{
            opacity:20%;

        }
    }
    @keyframes fadein{
            from{
                opacity:0%;

            }
            to{
                opacity:100%;

            }
        }
    img{
        position:absolute:
    }
    img{
        animation-name:fadeout;
        animation-timing-function:ease;
        animation-duration:2s;
        animation-fill-mode: forwards;
        animation-delay:0.5s;
        animation-iteration-count: 1;
    }
    div#form_container{
        position:absolute;
        opacity:0;
        animation-name:fadein;
        animation-duration:2s;
        animation-delay:1s;
        animation-fill-mode: forwards;

    }
    form{
        border: 3px solid rgba(125, 34, 146, 0.47);
        box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.5);
        background: linear-gradient(145deg, #c31432, #240b36);
        font-family:"Calibri Light";
        color:white;
    }
    div.input{
        display:flex;
        justify-content:space-between;
        margin:5px;
    }
    label{
        display:flex;
        min-width:5em;
    }
    input{
        display:flex;
        flex-grow:1;
    }
    div.button{
        display:flex;

        margin:5px;
    }
    div.button button{
        display:flex;
    }
</style>
<body>
<img src="app/images/Logos/Logo_4.svg">

<div id="form_container">
<form method = "post" action = "registration.php" name = "registrationForm">
    <div class="input"><label>Vorname:  </label><input type = "text"     name = "fName"></div>
    <div class="input"><label>Nachname: </label><input type = "text"     name = "lName"></div>
    <div class="input"><label>PLZ:      </label><input type = "number"   name = "plz"></div>
    <div class="input"><label>Stadt:    </label><input type = "text"     name = "city"></div>
    <div class="input"><label>Username: </label><input type = "text"     name = "uName"></div>
    <div class="input"><label>Email:    </label><input type = "email"    name = "email"></div>
    <div class="input"><label>Passwort: </label><input type = "password" name = "password"></div>
<div class="button">
    <input type="submit" name="register" value="Register">
    </div>
</form>
</div>


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

    echo "<script> location.href='index.html'; </script>";

}
?>

</body>
</html>
