<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

?>
<ul>
    <?php
    $Lts = ["A","B","C","D","E","F","G","H"];

echo "<body style='background-color:violet'> ";
for ($j=0; $j < 8; $j++) {  
    echo "<div>";
    for ($i=0; $i < 4; $i++) { 
        if($i==0){
            echo "<div style='display:inline-block;margin:10px;'>".$Lts[$j]."</div>";
        }
        $ss = $j %2 ? "black" : "white";
        $s2 = $ss == "black" ? "white" :"black";
        echo "<div style='background-color:$ss;display:inline-block;width:100px;height:100px;'></div>";
        echo "<div style='background-color:$s2;display:inline-block;width:100px;height:100px'></div>";
    }
    echo "</div>";     
} 

echo "</body>";

    
    

    ?>
</ul>
    
</body>
</html>