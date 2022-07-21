<?php

$op = isset($_REQUEST["operation"]) ? ($_REQUEST["operation"]) :''; 
$op2 = isset($_REQUEST) ? ($_REQUEST) :''; 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            input,select{
                font-size: 1.2em;
            }
        </style>
    </head>
    <body>
        <form>
            <select name="operation">
            <?php
            for ($i=1; $i <= 8; $i++) { 
                echo "<option>$i</option>";
            }
            ?>    
            </select>
            <input type="submit" value="="/>
        </form>
        <?php
        if($op != ''){
            echo "<form>";
            for ($i=1; $i <= $op; $i++) { 
                echo '<input name="operation" value="'.$op.'" hidden/>';
                echo '<input type="checkbox" name="'.$i.'"/>';
            }
            echo '<input type="submit" value="="/>';
            echo "</form>";
        }
        if($op2 != '' && $op2 != null){
            $keys = array_keys($op2);
            if (($key = array_search("operation", $keys)) !== false) {
                unset($keys[$key]);
            }
            $b = "";
            for ($i=1; $i <= $op; $i++) { 
            for ($k=1; $k <= count($keys); $k++) {
                if(($key = array_search($i, $keys)) !== false){
                    $b .= "1";
                    break;
                } 
                else{

                    $b .= "0";
                    break;
                }
                }
            }
              echo $b;
              $b2 = strrev($b) ;
              $result = 0;
              for ($i=0; $i < strlen($b2); $i++) { 
                if($b2[$i] == "1"){

                      $result += 2**$i;
                  }
              }
              echo "<br>Result is: ". $result;
            //echo $keys[0];

        }


        ?>
    </body>
</html>