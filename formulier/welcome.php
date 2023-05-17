<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$showResult = False; 
#doorgaan loop maken, met fout doorgaan = false


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $showResult = True;
    if (empty($_POST["name"])) {
      $nameErr = "Vul een naam in!";
      $showResult = False;
    } else {
      $name = test_input($_POST["name"]);
    }
  
    if (empty($_POST["email"])) {
      $emailErr = "Vul een email in";
      $showResult = False;
    } else {
      $email = test_input($_POST["email"]);
    }
  
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
    }
  
    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }
  
    if (empty($_POST["gender"])) {
      $genderErr = "Vul een geslacht in!";
      $showResult = False;
    } else {
      $gender = test_input($_POST["gender"]);
    }
}

#je bouwt de melding op, append aan array en daarna nakijken

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="email" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Male
        <input type="radio" name="gender" value="male">Female
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
    <?php
    if($showResult == True){
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    }
    ?>     
</body>
</html>