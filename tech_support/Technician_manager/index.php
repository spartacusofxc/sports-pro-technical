<?php  
require('../model/database.php');
require('../model/tech_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
 $action = filter_input(INPUT_GET, 'action');
  if ($action === NULL) {
      $action = 'list_techs';
    }
}    



if ($action == 'list_techs') {
$technicians = get_techs();
include('list_techs.php');
} else if ($action == 'delete_tech'){
	$techID = $_POST['techID'];
}


 if ($action == "show_add_techs_form"){
	include('show_add_techs_form.php');
}
else if ($action == 'add_techs'){
	include('add_techs_form.php');
	$firstName = filter_input(INPUT_POST, 'firstName');
	$lastName = filter_input(INPUT_POST, 'lastName');
	$email = filter_input(INPUT_POST, 'email');
	$phone = filter_input(INPUT_POST, 'phone');
	$password = filter_input(INPUT_POST, 'password');
}
if( $firstName == NULL && $lastName == NULL && $email == NULL && $phone == NULL && $password == NULL){
	$error = "Invalid product data check fields and try again.";
	include('../errors/error.php');
} 	else {
	add_techs($firstName, $lastName, $email, $phone, $password);
	$technicians = get_techs();
	include('show_add_techs_form.php');
	}

		
	









?>








