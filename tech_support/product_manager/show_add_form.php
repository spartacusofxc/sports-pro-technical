
<?php 

require('../model/database.php');
require('add_product_form.php');
$query = 'SELECT *
          FROM products
          ORDER BY productCode';
$statement = $db->prepare($query);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();

?>


<?php include '../view/header.php'; ?>


    <main>
        <h1>Add Product</h1>
        <form method="post" action=""
       		id="add_product_form">
       		<input type= "hidden" name="action" value="add_products" />
<!--
            <label>Products:</label>
            <select name="productCode">
            <?php foreach ($products as $product) : ?>
                <option value="<?php echo $product['productCode']; ?>">
                    <?php echo $product['productCode']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
-->
		<p>
            <label>Code:</label>
            <input type="text" name="productCode">
		</p>

		<p>
            <label>Name:</label>
            <input type="text" name="name">
		</p>

		<p>
            <label>Version:</label>
            <input type="text" name="version">
		</p>
            
		<p>
            <label>Release Date:</label>
            <input type="text"  name="releaseDate">
            format
		</p>

            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
     <p><a href="index.php">View Product List</a></p>
    </main>
 <?php include '../view/footer.php'; ?>
