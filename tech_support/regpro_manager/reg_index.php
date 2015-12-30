<?php

require('../model/database.php');
require('../model/product_db.php');
require('../model/customer_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
 $action = filter_input(INPUT_GET, 'action');
  if ($action === NULL) {
      $action = 'customer_login';
    }
}    


if ($action == 'customer_login'){
	include('customer_login.php');
}	else if ($action == 'select_product'){
	$email = $_POST['login_email'];
	$customer = search_customer_email($email);
	$products = get_products();
	include('select_product.php');
}	else if ($action == 'add_registration'){
	$customerID = $_POST['customerID'];
	$productID = $_POST['productType'];
	add_registration($customerID, $productID);
	include('registration_message.php');
	
	
}
		
	









?>






