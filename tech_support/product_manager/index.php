
<?php  
require('../model/database.php');
require('../model/product_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
  $action = filter_input(INPUT_GET, 'action');
  if ($action === NULL) {
      $action = 'list_products';
    }
}    

error_log("Action");
error_log($action);
if ($action == 'list_products') {
	$products = get_products();
	include('list_products.php');
} else if ($action == 'delete product'){
	$productCode = $_POST['productCode'];
}

else if ($action == "show_add_form"){
	include('show_add_form.php');
}
else if ($action == 'add_product_form'){
	include('add_product_form.php');
	$productCode = filter_input(INPUT_POST, 'productCode',FILTER_VALIDATE_INT);
	$name = filter_input(INPUT_POST, 'name');
	$version = filter_input(INPUT_POST, 'version', FILTER_VALIDATE_INT);
	$releaseDate = filter_input(INPUT_POST, 'releaseDate', FILTER_VALIDATE_FLOAT);

	if($productCode == NULL && $name == NULL && $version == NULL && $releaseDate == NULL){
		$error = "Invalid product data check fields and try again.";
		include('../errors/error.php');
	} 	else {
		add_product($productCode, $name, $version, $releaseDate);
		$products = get_products();
		include('list_products.php');

	} 

}
?>














