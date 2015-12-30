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

<!-- the head section -->
<head>
    <title>add technician</title>
   
</head>

<!-- the body section -->
<body>
    

    <main>
        <h1>Add technician</h1>
        <form method="post" action="add_tech_form.php"
              id="add_tech_form">

            
            <label> First Name:</label>
            <input type="text" name="firstName"><br>

            <label>lastName:</label>
            <input type="text" name="lastName"><br>
            
            <label>email</label>
            <input type="text" name="email"><br>
            
			<label>phone</label>
            <input type="text" name="phone"><br>
            
            <label>password</label>
            <input type="text" name="password"><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add technician"><br>
        </form>
     <p><a href="index.php">View technician List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?>
    </footer>
</body>
</html>

