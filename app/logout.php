<?php
session_start();
session_destroy();

echo "Logout erfolgreich";
?>

    <!doctype HTML>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>IEvent</title>
    </head>
    <body>
    <form method="post" action="logout.php" name="testForm">
        <input type="submit" name="continue" value="OK">
    </form>
    </body>
    </html>

<?php

if (isset($_POST['continue'])) {
    header("location: login.php");
}