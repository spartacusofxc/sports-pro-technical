<?php
require('../model/database.php');
require('add_tech_form.php');
$query = 'SELECT * FROM technicians';
$statement = $db->prepare($query);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>
<html>
<?php include '../view/header.php'; ?>
    <main>
        <h1>Add technician</h1>
        <form method="post" action="add_tech_form.php"
              id="add_tech_form">

         <p>   
            <label> First Name:</label>
            <input type="text" name="firstName"><br>
		</p>
            <label>lastName:</label>
            <input type="text" name="lastName"><br>
        <p>    
            <label>email</label>
            <input type="text" name="email"><br>
         </p>   
			<label>phone</label>
            <input type="text" name="phone"><br>
        <p> 
            <label>password</label>
            <input type="text" name="password"><br>
        </p>
            <label>&nbsp;</label>
            <input type="submit" value="Add technician"><br>
        </form>
     <p><a href="index.php">View technician List</a></p>
    </main>


<?php include '../view/footer.php'; ?>

</html>

