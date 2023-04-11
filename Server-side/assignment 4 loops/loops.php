<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>php loops</title>
</head>
<body>
    <?php
    
    $i = 'abc';
    $j = '0';
    

    while ($j <= 8){
        echo $i . " ";
        $j++;
    };
    //prints abc 9*
    ?> <br/> <hr/>

    <?php 
    //prints xyz abc 9*
    $i = 'xyz';
    $j = '0';
    

     do{
        echo $i . " ";
        $j++;
    }   while ($j <= 8);
    //prints 1 - 9 with spaces
    ?> <br/> <hr/>

    <?php 

    for($z = 1; $z < 10; $z++){
        echo $z . "  ";
    };

    ?> <br/><hr/>

    <?php 
    $a = 'A'; //this global variable is for the ++ of letters 

    for($i = 1; $i <= 6; $i++){
        echo $i . ". " . "Item " . $a++ . '<br/>';
    };
    ?><br/> <hr/>

    <?php 
    
    for ($count = 1; $count <= 12; $count++){
        $squared = $count * $count;
    print("$count  squared is $squared <br/>");
    };
    echo "I just declared squared as a new variable worked the same";
    ?><hr/><br/>
    <?php 
//this is a multiplication table 
    for($i = 1; $i <= 7; $i++){
        for ($t = 1; $t <= 7; $t++){
            printf("%d * %d = %d",$i,$t,($i * $t));
            // echo " ";
            echo "<br/> ";
            if($t == 7){
                echo "<br/> ";
            }
        }
    }

    ?>
    <hr/><br/>

    <?php 
    $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
    //
    $daysInMonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    
    // foreach($months as $key => $value  ) {
        // echo "month is ;) " . $months[$key] . " - " . "and how many days there are: " . $daysInMonth[$key] . '<br/>';
    // } this works but doesn't make a table.

    echo '<table>'; // I used HTML elements to help create a 'table' like structure.
        echo "<h1>How many days are in each months?</h1>";
    foreach(array_keys($months) as $m){
        echo '<tr><td><br/>';
        echo $months[$m] . " There are";
        echo '</td><td> <br/>';
        echo $daysInMonth[$m] . " days in this month." ;
        echo '</td></tr>';
    }

    echo '</table>';

    ?><br/> <hr/>
    
    <?php 
    echo 'test';
    ?>
</body>
</html>