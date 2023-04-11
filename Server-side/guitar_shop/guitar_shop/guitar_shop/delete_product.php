<?php
require_once('database.php');

// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Delete the product from the database

$sql = "DELETE FROM products WHERE productID = '" . $product_id . "' AND categoryID = '" . $category_id . "' LIMIT 1";
$result = mysqli_query($db, $sql);
// Display the Product List page
if($result){
    header("Location:http://localhost/Server-side/guitar_shop/index.php");
} else {
    header("Location:http://localhost/Server-side/guitar_shop/database_error.php");
}