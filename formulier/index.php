<html>
<body>
<?php
// var_dump($_POST);
echo "<h2>Your Input:</h2>";
if(!empty($_POST['name'])){
    echo htmlspecialchars($_POST["name"]);
} else {
    echo $name;
}


echo "<br>";
echo htmlspecialchars($_POST["email"]);
echo "<br>";
echo htmlspecialchars($_POST["website"]);
echo "<br>";
echo htmlspecialchars($_POST["comment"]);
echo "<br>";
echo htmlspecialchars($_POST["gender"]);
?>

</body>
</html>