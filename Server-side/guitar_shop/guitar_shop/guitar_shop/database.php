<?php
$dbhost = 'localhost';
$dbuser = 'newUser';
$dbpass = 'pa55word'; //H%{W4Bq,k#6t
$dbname = 'my_guitar_shop1';
$error = '';

//Create database connection
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// check connection 
if(!$db){
    $error_message = $mysqli_error($connection);
    include("database_error.php");
    exit;
} else{
    return;
 }

?>