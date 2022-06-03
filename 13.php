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
<form action="13.php" method="post">
<input type="number" name="diameter">
<input type="submit" name="submit" value="bereken">
</form>

<?php
 if(isset($_POST['submit'])){
 $diameter= $_POST['diameter'];
 $straal= $diameter / 2;
 $straal_kwadraat= $straal * $straal;
 
echo "omtrek = ". pi() * $diameter;
echo "<br>";
echo "oppervlakte = ". $straal_kwadraat * pi();
 }
?>

</body>
</html>