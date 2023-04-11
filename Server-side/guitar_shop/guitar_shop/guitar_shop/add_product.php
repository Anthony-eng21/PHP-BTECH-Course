<?php
global $db;
// Get the product data
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

// Validate inputs
if ($category_id == null || $category_id == false ||
        $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $sql = "INSERT INTO products (categoryID, productCode, productName, listPrice) ";
    $sql .= "VALUES ('" . $category_id . "', '". $code . "', '" . $name ."', '" . $price . "')";
    // Display the Product List page
    $result = mysqli_query($db, $sql);
    // var_dump(mysqli_error($db));
    // var_dump($result);
    // die();

    //list page
    if($result){
        header("Location: add_product.php");
    } else {
        header("Location: database_error.php");
    }
}
?>