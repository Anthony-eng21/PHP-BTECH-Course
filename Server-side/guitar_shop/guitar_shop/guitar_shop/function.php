<?php
require_once('database.php');
function categoryName($id) {
global $db;
$id = $id ?? 1; 
$sql = "SELECT categoryName FROM categories ";
$sql .= "where categoryID = $id";

$category_set = mysqli_query($db, $sql);
$data = getDataRows($category_set);
return $data[0]['categoryName'];
} 

?>

<?php 
function getAllCategories() {
    global $db;
    $sql = "SELECT * FROM categories ";
    $sql .= "ORDER BY categoryID ASC";
    $categories_set = mysqli_query($db, $sql);
    return $categories_set;
}
?>
<?php 
function productSelected($categoryid){
    global $db;
    $id = $categoryid ?? 1;
    $sql = "SELECT * FROM products ";
    $sql .= "WHERE categoryID = $id";
    $product_set = mysqli_query($db, $sql);
    $data = getDataRows($product_set);
    // var_dump($data);
return $data;
}

?>
<?php

function getDataRows($result){
    $data =  [];
    while ($row = $result -> fetch_assoc()) {
        array_push($data, $row);
    } return $data; 
}

function updateProduct($product_set){
    global $db;
    $sql = "UPDATE products SET ";
    $sql .= "categoryID = '" . $product_set['Category_id'] . "', ";
    $sql .= "productCode = '" . $product_set['Code'] . "', ";
    $sql .= "productName = '" . $product_set['Name'] . "', ";
    $sql .= "listPrice = '" . $product_set['Price'] . "' ";
    $sql .= "WHERE productID = '" . $product_set['ID'] . "'";
    $result = mysqli_query($db, $sql);
    // echo mysqli_error($db);
    return $result;
}

function getProductsById($productID){
global $db;
    $id = $productID ?? 1;
    $sql = "SELECT * FROM products ";
    $sql .= "WHERE productID = $id";
    $product_set = mysqli_query($db, $sql);
    $data = getDataRows($product_set);

return $data[0];

}

?>