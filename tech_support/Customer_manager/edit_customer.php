<?php
$customerID = filter_input(INPUT_POST, '$customer_id', FILTER_VALIDATE_INT);
$firstName = filter_input(INPUT_POST, 'firstName', FILTER_VALIDATE_INT);
$lastName = filter_input(INPUT_POST, 'lastName');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city', FILTER_VALIDATE_FLOAT);
$state = filter_input(INPUT_POST, 'state');
$postalCode = filter_input(INPUT_POST, 'postalCode');
$CountryCode = filter_input(INPUT_POST, 'countryCode');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

// Validate inputs
if ($customerID == NULL || $customerID == FALSE || $firstName == NULL || 
        $firstName == FALSE || empty($lastName) || empty($lastName) || 
        $address == NULL || $address == FALSE ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('../errors/error.php');
} else {
    // If valid, update the product in the database
    require_once('../model/database.php');
    $query = 'UPDATE customers
              SET customerID = :$customer_id,
                  firstName = :firstName,
                  lastName = :lastName,
                  address = :address,
                  city = :city,
                  state = :state,
                  postalCode = :PostalCode,
                  countryCode = countryCode,
                  phone = :phone, 
                  email = :email, 
                  password = :password
               WHERE customerID = :customer_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':$customer_id', $customer_id);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':postalCode', $postalCode);
    $statement->bindValue(':countryCode', $countryCode);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
	$statement->bindValue('password', $password);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>