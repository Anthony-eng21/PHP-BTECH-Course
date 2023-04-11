<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php array</title>
</head>
<body>
    <?php
    $weatherConditions = array("Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Windy");
    ?>
    <?php 
    echo ("We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet.")
    ?>
<pre>
   <?php echo print_r($weatherConditions); ?>
</pre>
<hr>
<?php echo ("Associative Countries Array");?><br/>
<?php $countries = array("City" => "Country", "Tokyo" => "Japan", "Mexico City" => "Mexico", "New York City" => "USA", "Mumbai" => "India", "Seoul" => "South Korea", "Lagos" => "Nigeria", "Buenos Aires" => "Argentina", "Cairo" => "Egypt", "London" => "England")
?>
<?php 
foreach ($countries as $key => $val){
	echo "Key-value pair is: "."(".$key.", ".$val.")";
    echo "<br>";
}
?>
<hr>
<?php echo ("I added a foreach loop for the assoc arr, I think it looks nice!") ?>
</body>
</html>