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
<form method = "post" action = "create_event.php" name = "createEvent">
    Name:       <input type = "text"     name = "name">              <br>
    Location:   <input type = "text"     name = "location">          <br>
    Date:       <input type = "date"     name = "date">              <br>
    Description:<input type = "text"     name = "desc">              <br>
    <input type="button" value="FERTIG">
</form>
</body>
</html>

<?php
    $event = new Event ($_POST['name'], $_POST['location'], $_POST['date'], $_POST['desc']);
    $event->insertDatabase();
?>