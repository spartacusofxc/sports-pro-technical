
<?php

$firstName = filter_input(INPUT_POST, 'firstName',FILTER_VALIDATE_INT);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_VALIDATE_FLOAT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_FLOAT);
$phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_FLOAT);
$password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_FLOAT);
// Validate inputs
if ( $firstName == null || $lastName == null || $email == false || $phone == false || $password == null || $password == false) {
    $error = "Invalid product data. Check all fields and try again.";
    
} else {
    require_once('../model/database.php');

    // Add the product to the database  
    function add_tech( $techID, $firstName, $lastName, $email, $phone, $password){
    $query = 'INSERT INTO technicians
                  (firstName, lastName,$email, $phone, $password)
              VALUES
                 (:firstName, :lastName,  :phone, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $pasword);
    $statement->execute();
    $technicians = $statement->fetch();
    $statement->closeCursor();

}
    // Display the Product List page
 include('index.php');
}
?>