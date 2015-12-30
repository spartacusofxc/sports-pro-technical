<?php
require('../model/database.php');







?>
<!DOCTYPE html>
<html>
<head>
    <title>SportsPro Technical Support</title>
    <link rel="stylesheet" type="text/css" href="../tech_support/main.css" />
</head>
<body>
    <main>
    
    <!-- display login form -->
    <h1>Get Customer</h1>
    <p>You must enter the customer's email address to select the customer.</p>
    <form action="create_incident_form.php" method="post">
        <label>Email:</label>
        <input type="text" name="cust_email">&nbsp;
        <input type="submit" value="Get Customer"><br>
    </form>
</main>
</body>
</html>       

<footer>
    <p class="copyright">
        &copy; 2015 SportsPro, Inc.
    </p>
</footer>
</body>
</html>


