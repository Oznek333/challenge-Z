<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="index.php">hoofdpagina</a><br>
    <br>
    <br>
    <?php 


function NL_number($phone_number){
    $valid_phone_number = filter_var($phone_number, FILTER_SANITIZE_NUMBER_INT);
    echo $valid_phone_number."<br>";
    }
    //NL phone numbers
    NL_number("04");
    NL_number("0333-3333333");
    NL_number("+92-333-3333333");
    NL_number("+92-333-3333333");
    NL_number("+92-333-3333333");
    //invalid phone numbers
    NL_number("03333333&333");
    NL_number("0333-33*33333");
    NL_number("+92-333-333##3333");


// $t = number("04");

// if ($t > "04") {
//   echo "Have a good morning!";
// } elseif ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

// nl +31 06
// be +32 04
// * 0472-0479 Proximus
// * 0484-0488 BASE
// * 0494-0499 Mobistar

?>

</body>

</html>