<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">hoofdpagina</a>
    <br>
    <br>
<form action="14.php" method="post">
<input type="number" name="celsius">
<input type="submit" name="submit" value="bereken">
</form>

<?php
 if(isset($_POST['submit'])){
 $celsius= $_POST['celsius'];
 

 echo "Kelvin ". $celsius + 237;
 echo "<br>";
 echo "Fahrenheit ". $celsius * 1.8 + 32;
 }
?>

</body>
</html>