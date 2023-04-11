 <?php 
 if(!($_SERVER['REQUEST_METHOD'] === 'POST')) {
    require('index.php');
    exit();
 }
 require('function.php');
// $id = $_GET['id'] ?? '';
// require('database.php');
// require_once('function.php');
// //Get Categories from the Database
// $sql = "SELECT * FROM categories";
// //gets everythig from categories table.
// $categories = mysqli_query($connection, $sql);
$categories = getAllCategories();
$id = $_POST['product_id'] ?? 1;
$product = getProductsById($id);

// $allVars = get_defined_vars();
// print_r($allVars);
// var_dump($product);
?> 
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>edit Product</h1>
        <form action="edit.php" method="post"
              id="edit_product">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>
            <label>Code:</label>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="text" name="code" value="<?php echo $product['productCode']; ?>">

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $product['productName']; ?>">

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $product['listPrice']; ?>">
                
            <label>&nbsp;</label>
            <input type="submit" value="edit Product"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>

</body>
</html>
