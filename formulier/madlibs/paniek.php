<?php
    $huisdier = $persoon = $land = $verveel = $kind = $spijbel = $euro = $bezig = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $huisdier = $_POST["huisdier"];
        $persoon  = $_POST["persoon"];
        $land = $_POST["land"];
        $verveel = $_POST["verveel"];
        $kind = $_POST["kind"];
        $spijbel = $_POST["spijbel"];
        $euro = $_POST["euro"];
        $bezig = $_POST["bezig"];
      }

?>
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
    <form method="POST" action="paniekResult.php">
        Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="huisdier"><br>
        Wat is de belangrijkste persoon in je leven? <input type="text" name="persoon"><br>
        In welk land zou je willen wonen? <input type="text" name="land"><br>
        Wat doe je als je je verveelt? <input type="text" name="verveel"><br>
        Met welk speelgoed speelde je als kind het meest? <input type="text" name="kind"><br>
        Bij welke docent spijbel je het liefts? <input type="text" name="spijbel"><br>
        Als je 100k had, wat zou je dan kopen? <input type="text" name="euro"><br>
        Wat is je favoriete bezigheid <input type="text" name="bezig"><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
    
</body>
</html>