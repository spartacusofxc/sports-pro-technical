<?php
require('../model/database.php');







?>

<html>
<head>Customer login</head>
<body>
<form name="EmailString" action="registration_message.php" method="post">
<br />
You must login before you can register a product: <input type="text" name="email" value="">
<select name ="products">
<option value= "productCode"</option>
<br />
</select>

<input type="submit" name="btnSubmit" value="login">
<p><a href="?action=registartion_message">login</a></p>

</form>

</body>
</html>

