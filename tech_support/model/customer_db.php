<?php



$customer_id = filter_input(INPUT_POST, 'customer_id');
function get_customers(){
	global $db;
	$query = 'SELECT * FROM customers
	BY customerID = :customer_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':customer_id', $customer_id); 
    $statement->execute();
    $technicians = $statement->fetch();
    $statement->closeCursor();
	return $customers;
	
}
	function get_countries(){
	global $db;
	$query = 'SELECT * FROM countries';
	$statement = $db->prepare($query); 
    $statement->execute();
    $technicians = $statement->fetchAll();
    $statement->closeCursor();
	return $countries;
}




	
	
	
	
	

?>
