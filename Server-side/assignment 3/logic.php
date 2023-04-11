<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logical expressions assignment.</title>
</head>
<body>
    <?php
    
    //simple if statement 
    $month = date('F'); //global variable 
    if ($month == "August") {
        echo "It's August, so it's really hot.";
    } elseif ($month != "August") {
        echo "Not August, so at least not in the peak of the heat.";
    }
    
    ?>
    <br/> <hr>
    <?php
   
   //ternary operator short hand 
    $month = date('F'); //global variable for new php statement:
    $result = ($month == "August") ? "It's August, so it's really hot."
     : "Not August, so at least not in the peak of the heat.";
     echo $result;
    
    ?>
    <br> <hr>
    <?php

    $month = date("n");
    switch($month) {
        case 1:
            echo "Summer is a promissory note signed in June, it's long days spent and gone before you know it, and due to be repaid next January.";
        break;
//
        case 2:
        echo "Why does February feel like one big Tuesday?";
        break;
//
        case 3:
            echo "Springtime is the land awakening. The March winds are the morning yawn.";
        break;
//
        case 4:
        echo "Here cometh April again, and as far as I can see the world hath more fools in it than ever.";
        break;
//
        case 5:  
            echo "The world's favorite season is the spring. All things seem possible in May.";
        break;
//     
        case 6:
        echo "There are two seasons in Scotland: June and Winter.";
        break;
//
        case 7:
            echo "Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.";
        break;
//
        case 8: 
        echo " August, the summer's last messenger of misery, is a hollow actor.";
        break;
//
        case 9:
            echo "We know that in September, we will wander through the warm winds of summer's wreckage. We will welcome summer's ghost.";
        break;
//
        case 10:
        echo "I'm so glad I live in a world where there are Octobers.";
        break;
//
        case 11:
            echo "The month of November makes me feel that life is passing more quickly. In an effort to slow it down, I try to fill the hours more meaningfully.";
        break;
//
        case 12:
        echo "God gave us memory so that we might have roses in December.";
        break;
//
         default:
             echo "Are you sure you know your months?";
         break;
    }

    ?> <br> <hr/>
</body>
</html>