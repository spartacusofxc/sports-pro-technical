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

<?php include '../view/header.php'; ?>



    <main>
        <h2>view/update customer </h2>
        <form action="edit_customer.php" method="post"
              id=edit_product_form">
            <input type="hidden" name="customer_id"
                   value="<?php echo $customers['customerID']; ?>">
			<p>
            <label>firstName:</label>
            <input type="input" name="firstName"
                   value="<?php echo $customers['firstName']; ?>">
    		</p> 
    	   
			<p>
            <label>lastName:</label>
            <input type="input" name="lastName"
                   value="<?php echo $customers['lastName']; ?>">
           </p> 

            <label>Address:</label>
            <input type="input" name="address"
                   value="<?php echo $customers['address']; ?>">
       	 <p>

            <label>City:</label>
            <input type="input" name="city"
                   value="<?php echo $customers['city']; ?>">
            </p>
            
            <label>state:</label>
            <input type ="input" name="state"
            	 value="<?php echo $customers['state']; ?>">
        <p>
            
            <label>postalCode</label>
            <input type ="input" name="PostalCode"
        	 value="<?php echo $customers['PostalCode']; ?>">
        </p> 
            <p>
            
            <label>countryCode</label>
            <input type ="input" name="CountryCode"
            	 value="<?php echo $customers['CountryCode']; ?>">
            </p>
            
			<label>phone</label>
            <input type ="input" name="	phone"
            	 value="<?php echo $customers['phone']; ?>">
            <p>
            
            <label>email</label>
            <input type ="input" name="email"
            	 value="<?php echo $customers['email']; ?>">
            </p>
	
			<label>password</label>
            <input type ="input" name="password">
            <p>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes">
            </p>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

   
<?php include '../view/footer.php'; ?>