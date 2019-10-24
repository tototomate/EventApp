<?php
    /*
     * der html-teil ist nur als Richtwert zu verstehen, input Felder & form bitte mit selbem Namen erstellen
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IEvent</title>
</head>
<body>
    <form method = "post" action = "login.php" name = "loginForm">
        Vorname:  <input type = "text"     name = "fName">          <br>
        Nachname: <input type = "text"     name = "lName">          <br>
        PLZ:      <input type = "number"   name = "plz">            <br>
        Stadt:    <input type = "text"     name = "city">           <br>
        Username: <input type = "text"     name = "uName">          <br>
        Email:    <input type = "email"    name = "email">          <br>
        Passwort: <input type = "password" name = "password">       <br>
        <input type="button" value="FERTIG">
    </form>
</body>
</html>

<?php
    $user = new User ($_POST['fName'], $_POST['lName'], $_POST['plz'], $_POST['city'], $_POST['uName'], $_POST['email'], $_POST['password']);
    $user->insertDatabase();
?>