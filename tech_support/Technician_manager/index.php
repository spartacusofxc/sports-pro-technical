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
	}

		
	









?>

<html>
<main>
    <h1>Techs</h1>
	<head>
    <link rel ="stylesheet" href="../main.css">
	</head>
    <!-- display a table of products -->
    <table>
        <tr>
            <th>TechID</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>email</th>
            <th>phone</th>
            <th>password</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($technicians as $technician) : ?>
        <tr>
            <td><?php echo htmlspecialchars($technician['techID']); ?></td>
            <td><?php echo htmlspecialchars($technician['firstName']); ?></td>
            <td><?php echo htmlspecialchars($technician['lastName']); ?></td>
            <td><?php echo htmlspecialchars($technician['email']); ?></td>
            <td><?php echo htmlspecialchars($technician['phone']); ?></td>
            <td><?php echo htmlspecialchars($technician['password']); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="delete_technician">
                <input type="hidden" name="techID"
                       value="<?php echo htmlspecialchars($technician['techID']); ?>">
                <input type="submit" value="Delete">
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <p><a href="?action=show_add_techs_form">Add tech</a></p>
    
</html>    








