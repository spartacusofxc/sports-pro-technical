<?php
require('../model/database.php');

$customerID = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM customers
          WHERE customerID = :customer_id';
$statement = $db->prepare($query);
$statement->bindValue(':customer_id', $customerID);
$statement->execute();
$product = $statement->fetch();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Customer manger</title>
</head>

<!-- the body section -->
<body>
    <header><h1>Customer Manager</h1></header>

    <main>
        <h1>view/update customer </h1>
        <form action="edit_customer.php" method="post"
              id=edit_product_form">
            <input type="hidden" name="customer_id"
                   value="<?php echo $customers['customerID']; ?>">

            <label>firstName:</label>
            <input type="input" name="firstName"
                   value="<?php echo $customers['firstName']; ?>">
            <br>

            <label>lastName:</label>
            <input type="input" name="lastName"
                   value="<?php echo $customers['lastName']; ?>">
            <br>

            <label>Address:</label>
            <input type="input" name="address"
                   value="<?php echo $customers['address']; ?>">
            <br>

            <label>City:</label>
            <input type="input" name="city"
                   value="<?php echo $customers['city']; ?>">
            <br>
            
            <label>state:</label>
            <input type ="input" name="state"
            	 value="<?php echo $customers['state']; ?>">
            <br>
            
            <label>postalCode</label>
            <input type ="input" name="PostalCode"
            	 value="<?php echo $customers['PostalCode']; ?>">
            <br>
            
            <label>countryCode</label>
            <input type ="input" name="CountryCode"
            	 value="<?php echo $customers['CountryCode']; ?>">
            <br>
            
			<label>phone</label>
            <input type ="input" name="	phone"
            	 value="<?php echo $customers['phone']; ?>">
            <br>
            
            <label>email</label>
            <input type ="input" name="email"
            	 value="<?php echo $customers['email']; ?>">
            <br>
	
			<label>password</label>
            <input type ="input" name="password"
            	 value="<?php echo $customers['password']; ?>">
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes">
            <br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?></p>
    </footer>
</body>
</html>