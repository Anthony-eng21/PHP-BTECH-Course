<?php 
require('function.php');
global $db;
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $arr = [];
    $arr['Code'] = $_POST['code'] ?? 1;
    $arr['Name'] = $_POST['name'] ?? '';
    $arr['Price'] = $_POST['price'] ?? '';
    $arr['ID'] = $_POST['id'] ?? 1;
    $arr['Category_id'] = $_POST['category_id'] ?? 1;
    $result = updateProduct($arr);
  if(!$result){
        echo mysqli_error($db);
  } else {
    header('Location: index.php?category_id=' . $arr['Category_id']); 
    exit();
  }
    };

?>