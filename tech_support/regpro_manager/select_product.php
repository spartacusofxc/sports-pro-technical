<?php
 require_once('../model/database.php');

$email = filter_input(INPUT_POST, 'email');

echo "Your entered Email Address is: " . $email;

$NameEnd = strpos($email, "@");
echo "<p>The email id from the address is: " . substr($email, 0, $NameEnd) . "</p>";

//Use combination of substr() and strpos() functions to get the domain name portion
$DomainBegin = strpos($email, "@") + 1;
$DomainEnd = strpos($email, ".") - $DomainBegin;
echo "<p>The domain name portion of the email address is: " . substr($email, $DomainBegin, $DomainEnd) . "</p>";

//Use the strchr(string, search_string) to extract a portion of the string
//should return top level domain
echo "<p>The domain identifier of the email address is " . strchr($email, ".") . "</p>";

?>

















