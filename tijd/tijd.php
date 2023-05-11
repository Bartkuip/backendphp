<?php
    $time = date("G:i:sa");
    $hour = date("H");
    if($hour >= "18"){
        echo("Good evening! <br>");
        echo($time);
        $class = 'goodmorning';
    }elseif($hour >= "12"){
        echo("Good afternoon! <br>");
        echo($time);
        $class = 'afternoon';
    }elseif($hour >= "6"){
        echo("Goodmorning! <br>");
        echo($time);
        $class = 'goodevening';
    }elseif($hour >= "0"){
        echo("Goodnight ! <br>");
        echo($time);
        $class = 'goodnight';
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body class="<?php echo $class?>">
    
</body>
</html>

