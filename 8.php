<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priemgetallen</title>
</head>

<body>

    <a href="index.php">hoofdpagina</a>
    <br>
    <br>
    <form action="" method="post">

        <fieldset>
            <legend>Lijst Priemgetallen</legend>

            <?php
    
              $number1 = 1;
              $number2 = 100;
              $columns = 10;
                  $i = $number1;
                  $totalNumbers = $number2 - $number1 + 1;
                  $tableDesignCount = 1;
                  $priemgetal = 0;
                  echo '<table style="width: 100%;">';
                  while($i <= $number2) {
                      if($tableDesignCount == 1) {
                          echo '<tr>';
                      }
                      $gevondenDelers = 0;
                      for($i2 = 1; $i2 <= $i; $i2++) {
                          $result = $i / $i2;
                          if(is_int($result)) {
                              $gevondenDelers++;
                          }
                      }
                      
                      echo '<td><span style="padding: 2px; background: #';
                      if($gevondenDelers == 2) {
                          echo 'DFFFE3';
                          $priemgetal++;
                      }
                      else {
                          echo 'FFDFE3';
                      }
                      echo '">' .  $i++ . '</span></td>';
                      if($tableDesignCount == $columns) {
                          echo '</tr>';
                          $tableDesignCount = 0;
                      }
                      $tableDesignCount++;
                  }
      ?>
        </fieldset>
    </form>

</body>

</html>