<?php



$customerID = filter_input(INPUT_POST, 'customerID', FILTER_VALIDATE_INT);
$productCode = filter_input(INPUT_POST, 'productCode', FILTER_VALIDATE_INT);



require_once('../model/database.php');

 function add_registration($customerID, $productID){
 $query = 'INSERT INTO resgistrations
                  ( customerID, productCode)
              VALUES
                 ( :customerID, :productCode)';
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customerID);
    $statement->bindValue(':productCode', $productCode);
    $statement->execute();
    $registrations = $statement->fetch();
    $statement->closeCursor();
 
 }


 include('index.php');










?>