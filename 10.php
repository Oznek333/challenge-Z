<form action="" method="post">
  
    <fieldset>
        <legend>Lijsten Priemgetallen</legend>
        <table>
            <tr>
                <!-- <td>Van</td>
                <td><input type="text" size="4" name="number1" /></td>
                <td>Tot</td>
                <td><input type="text" size="4" name="number2" /></td>
                <td><input type="submit" name="lijst" value="Maak Lijst" /></td>
               </tr>
           </table> -->
        <?php
        
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $columns = 10;
                if(isset($_POST['lijst']) && !empty($number1) && !empty($number2) && is_numeric($number1) && is_numeric($number2)) {
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
                    echo '</table>';
                    echo '<p>Er zijn ' . $priemgetal . ' getallen van de ' . $totalNumbers . ' (' . round(($priemgetal/$totalNumbers)*100) . '%) getallen priem.</p>';
                }
            }
            
        ?>
       </fieldset>
</form>