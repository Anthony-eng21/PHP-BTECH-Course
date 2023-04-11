<?php
require_once('database.php');
include('function.php');
// Get category ID
if (!isset($category_id)) {
    $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        // $category_id = 1;
        header('Location: index.php?category_id=1');
    }
}
// Get name for selected category
// $query = "SELECT * FROM categories ";
// $result_set = mysqli_query($connection, $query);
$category_name = categoryName($category_id);
// Get all categories
$categories = getAllCategories($db);

// Get products for selected category
$products = productSelected($category_id, $db);
?>
<!DOCTYPE html>
<html lang="en">



<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="./main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; chareser=utf-8">
    <meta charset="UTF-8">
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Product List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
            <?php foreach ($categories as $category) : ?>
            <li><a href=".?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>          
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="edit_product.php" method="post">
                <input type="hidden" name="product_id"
                        value="<?php echo $product['productID']; ?>">
                        <input type="hidden" name="category_id"
                        value="<?php echo $product['categoryID']; ?>">  
                        <input type="submit" value="edit">             
                </form></td>
            </tr>
            <?php endforeach; ?>

        <p><a href="add_product_form.php">Add Product</a></p>
        <p><a href="category_list.php">List Categories</a></p>        
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>