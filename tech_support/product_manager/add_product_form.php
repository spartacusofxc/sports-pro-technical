<?php
/*
$productCode = filter_input(INPUT_POST, 'productCode', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name', FILTER_VALIDATE_INT);
$version = filter_input(INPUT_POST, 'version', FILTER_VALIDATE_FLOAT);
$releaseDate = filter_input(INPUT_POST, 'releaseDate', FILTER_VALIDATE_FLOAT);
*/
// Add the product to the database  
function add_product( $productCode, $name, $version, $releaseDate){
	global $db;
	error_log($productCode);
	error_log($name);
	error_log($version);
	error_log($releaseDate);
	error_log(strtotime("now"));
    $query = 'INSERT INTO products
                  (productCode, name, version, releaseDate)
              VALUES
                 (:productCode, :name, :version :releaseDate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $productCode);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':releaseDate', $releaseDate);
    $statement->execute();
    $statement->closeCursor();

}

// Validate inputs
if ($productCode == null || $productCode == false ||
	 $name == null || $version == null || $releaseDate == null || $releaseDate == false) {
	 $error = "Invalid product data. Check all fields and try again.";
    
} else {
    require_once('../model/database.php');
}
    // Display the Product List page
// include('index.php');


?>