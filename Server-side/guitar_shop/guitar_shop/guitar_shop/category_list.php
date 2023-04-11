<?php
require_once('database.php');
require_once('function.php');
// Get all categories

$categories = getAllCategories();
$query = "SELECT categoryID, categoryName FROM categories";

$categories = mysqli_query($db, $query);
if(!empty($_POST)){
    $newcategoryadd = "INSERT INTO my_guitar_shop1.categories (categoryName)
    VALUES ('{$_POST['newcategory']}')";
    mysqli_query($db, $newcategoryadd);
}
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Id</th>
        </tr>
        
        <!-- add code for the rest of the table here -->
    </tr>
    
    <?php foreach ($categories as $category) : ?>
    <tr>
        <td>
            <?php echo $category['categoryName']; ?>
        </td>
        <td>
           <a href=".?category_id=<?php echo $category['categoryID'] ?>" <?php  echo $category['categoryID'] ;?>
        </td>
    </tr>
        <?php 
        endforeach; ?>
    </table>

    <h2>Add Category</h2>
    
    <!-- add code for the form here -->
    <form action="category_list.php" method="post">
        <label> Category Name </label></br> <input type="text" name="newcategory" placeholder="Name">
        <button type="submit">submit</button>
    </form>
    <br>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>