<?php








function get_products(){
	global $db;
	$query = 'SELECT * FROM products';
	$statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}







?>

