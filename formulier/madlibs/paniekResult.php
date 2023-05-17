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
    <h1> Onkunde </h1>
    <p> Er heerst paniek in het koningkrijk <?php echo $_POST["land"]; ?>, Koning <?php echo $_POST["spijbel"]; ?> is ten einde raad en als koning <?php echo $_POST["spijbel"]; ?> ten einde raad is dan roept hij zijn ten-einde-raadheer <?php echo $_POST["persoon"]; ?></p>
    <p>"<?php echo $_POST["persoon"]; ?>! Het is ramp! Het is een schande!" </p>
    <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?" </p>
    <p>"Mijn schildpad is verdwenen! Zo maar, zonder waarschuwing. En ik had net Lego voor hem gekocht!" </p>
    <p>Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd programmeren leren?"" </p>
    <p>Maar Sire, daar kunt u toch uw supercomputer voor gebruiken.</p>
    <p>Spinoza, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had. </p>
    <p>"Mij vervelen, Sire" </p>
    <?php
        echo "<h2>Your Input:</h2>";
        echo $_POST["huisdier"];
        echo $_POST["persoon"];
        echo $_POST["land"];
        echo $_POST["verveel"];
        echo $_POST["kind"];
        echo $_POST["spijbel"];
        echo $_POST["euro"];
        echo $_POST["bezig"];
    ?>
</body>
</html>