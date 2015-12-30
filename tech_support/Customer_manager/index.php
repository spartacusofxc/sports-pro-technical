<?php

require('../model/database.php');
require('../model/customer_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
 $action = filter_input(INPUT_GET, 'action');
  if ($action === NULL) {
      $action = 'search_customers';
    }
}    




if ($action == 'search_customers') {
include('search_customers.php');
}
else if( $action == 'list_customers');{ 
$lastName = $_POST['lastName'];
$customers = search_customers_name($lastName);
$customers = get_customers();
	include('list_customers.php');
}	
if ($action == 'edit_customer_form'){
	$customer_id = $_POST['customerID'];
	$customer = search_customers_ID($customer_id);
	$countries = get_countries(); 
	include('edit_customer_form.php');
} 
 else if  ($action == 'edit_customer_form'){
	$customerID = $_POST['customerID'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$city =  $_POST['city'];
	$state =  $_POST['state'];
	$postalCode = $_POST['postalCode'];
	$countryCode = $_POST['countryCode'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	edit_customer('$customerID, $firstName, $lastName, $address, $city
	$countryCode, $phone, $email, $password');
	
	
}	


?>

<!DOCTYPE html>
<html>
<head>
    <title>SportsPro Technical Support</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <main>
    
    <!-- display customer search form -->
    <h1>Customer Search</h1>       
    <form action="../model/customer_db.php" method="post">
        <label>Last Name:</label>
        <input type="text" name="lastName">&nbsp;
        <input type="submit" value="Search"><br>
    </form>
    <br>
     
   
 <!-- display a table of customers found in search -->
    <h1>Results</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>City</th>
            <th>&nbsp;</th>
        </tr>
            </table>
    </main>
</body>
</html>
















