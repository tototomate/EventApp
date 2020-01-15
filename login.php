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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">

        body {
            overflow-x: hidden;
            /*background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
            */
            display: flex;
            width: 100vw;
            height: 100vh;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        @keyframes fadeout {
            from {
                opacity: 100%;

            }
            to {
                opacity: 20%;

            }
        }

        @keyframes fadein {
            from {
                opacity: 0%;

            }
            to {
                opacity: 100%;

            }
        }

        img {
            position: absolute;
            animation-name: fadeout;
            animation-timing-function: ease;
            animation-duration: 2s;
            animation-fill-mode: forwards;
            animation-delay: 0.5s;
            animation-iteration-count: 1;
        }

        div#form_container {
            position: absolute;
            opacity: 0;
            animation-name: fadein;
            animation-duration: 2s;
            animation-delay: 1s;
            animation-fill-mode: forwards;

            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            width: 90vw;
            height: 50vh;
            font-family: "Calibri Light";
            color: white;
            /*
            width: 300px;
            border: 3px solid rgba(125, 34, 146, 0.47);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.5);
            background: linear-gradient(145deg, #c31432, #240b36);

            */
        }

        div.input {
            display: flex;
            justify-content: space-between;
            margin: 5px;
        }

        label {
            display: flex;
            min-width: 5em;
        }

        input {
            display: flex;
            flex-grow: 1;
        }

        .btn {
            width: 30vw;
            margin: 30px;
        }

        .input-container {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .button-container {
            display: flex;
            justify-content: space-around;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial;
            font-weight: bold;
        }

        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 812px)
        and (-webkit-min-device-pixel-ratio: 3) {
            body {
                background-color: lightblue;
            }
        }

    </style>

    <body>

    <img src="app/images/Logos/Logo_4.svg">

    <div id="form_container" class="container">
        <div class="col-12 align-items-center login-container">
            <h3>Login</h3>
        </div>
        <form method="POST" action="login.php" name="loginForm" class="column">
            <div class="input-group input-container">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="input-group input-container">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="button-container">
                <div>
                    <input class="btn btn-primary" type="submit" name="login" value="Login">
                </div>
                <div >
                    <input class="btn btn-light" type="submit" name="register" value="Register">
                </div>
            </div>

        </form>
    </div>

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


    if (isset($user['password']) && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("location: app/index.html");
    } else {
        echo "failure";
    }

}