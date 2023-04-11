<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    
    <h3>1</h3>
    <!-- hello world -->
    <?php
    function  sayHi($word) {
        echo "Hello {$word}!<br/>";
    }
    
    sayHi("world");
    
        ?>
    <h3>2</h3>
    <?php
    function area($length = 10, $width = 20){
        $area = $length * $width; 
        echo "A rectangle of length ". $length . " and width " . $width . " has an area of " . $area . "<br/>";
    }
    area();
    ?>
    <script>
    // i need more help on this one 
    // function strings($i = "<td>whats</td>" $j = "<td>up</td>", $m = "<td>doc</td>", $table = "!"){
    // return "<table border = 1 cellspacing = 1 cellpadding = 1>
    // <tr>
    // <td>$i</td>
    // <td>$j</td>
    // <td>$m</td>
    // <td>$table</td>
    // </tr>
    
    // </table>";
    // } -->
    // strings();
    // strings();
    // 
</script>
<h3>4</h3>
 <?php

function  sayHello($word) {
    echo "hello {$word}!<br/>";
}
$user = "gg allin";
sayHello($user);
//new 
function Rarea($length = 10, $width = 20){
    $area = $length * $width; 
    echo "A rectangle of length ".  $length . " and width " . $width . " has an area of " . $area . "<br/>";
}
sayHello($user);
//returns hello gg allin 
?>
<h3>5</h3>
<?php
function add_num(&$value) {
    $value += 4;
}
$num = 10; 
add_num($num);
echo $num;
?>
<!-- the &$value is passed by reference  to the function instead of being the same it changes-->
</body>
</html>