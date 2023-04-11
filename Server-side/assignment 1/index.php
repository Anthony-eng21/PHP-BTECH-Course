<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment 1</title>
</head>
<body>
    <!--mf pt1-->
    <?php 
    $textWhole = "Twinkle, Twinkle little star.";
    echo $textWhole;
    
    echo "<br />";
    $greeting = "live, laugh";
    $target = "love.";
    $phrase = $greeting . " " . $target;
    echo "{$greeting} little {$target}<br/>";
   
    echo "Twinkle, Twinkle little star.<br/>";

    echo "{$phrase}<br/>"
    
   ?>
    <!--- mf pt2 -->
    <?php
    $x = 10;
    $y = 7;
    ?>
    <?php
   echo $x + $y ;?><br/>
   <?php
   echo ($x - $y);?><br/>
   <?php
   echo $x * $y;
   ?><br/>
   <?php
   echo $x / $y;
   ?><br/>
     <?php
   echo $x % $y;
   ?><br/>

   <!-- mf pt3-->
    
   <?php
   $variable = 8;
   echo $variable;
   ?><br/>
    <?php
   echo $variable += 2;
   ?><br/>
    <?php
   echo $variable -= 4;
   ?><br/>
    <?php
   echo $variable *= 5;
   ?><br/>
    <?php
   echo $variable /= 3;
   ?><br/>
    <?php
   $variable++; echo $variable;
   ?><br/>
     <?php
   $variable--; echo $variable;
   ?><br/>

   <!--- mf pt4 -->

   <?php 
   $around = "around";
    
    echo "what comes around goes {$around}";
   ?>


</body>
</html>