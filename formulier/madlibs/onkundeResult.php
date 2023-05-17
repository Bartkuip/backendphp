<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
    <ul>
        <li><a href="paniek.php">Paniek</a></li>
        <li><a href="onkunde.php">Onkunde</a></li>
    </ul>
</head>
<body>
    <?php
        echo ($_POST["huisdier"]);
        echo "<br>";
        echo ($_POST["email"]);
        echo "<br>";
        echo ($_POST["website"]);
        echo "<br>";
        echo ($_POST["comment"]);
        echo "<br>";
        echo ($_POST["gender"]);
        ?>
    ?>
</body>
</html>