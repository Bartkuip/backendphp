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
    <p>"Mijn <?php echo $_POST["huisdier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["kind"]; ?> voor hem gekocht!" </p>
    <p>Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezig"]; ?> leren?"" </p>
    <p>Maar Sire, daar kunt u toch uw <?php echo $_POST["euro"]; ?> voor gebruiken.</p>
    <p><?php echo $_POST["persoon"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had. </p>
    <p>"<?php echo $_POST["verveel"]; ?>, Sire" </p>
</body>
</html>