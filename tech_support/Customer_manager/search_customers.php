<?php include 'view/header.php'; ?>

<html>
<head>
    <title>SportsPro Technical Support</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <main>
    
    
    <h1>Customer Search</h1>       
    <form action="../model/customer_db.php" method="post">
        <label>Last Name:</label>
        <input type="text" name="lastName">&nbsp;
        <input type="submit" value="Search"><br>
    </form>
    <br>
     
   
    <h1>Results</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>City</th>
            <th>phone</th>
            <th>password</th>
            
            <th>&nbsp;</th>
        </tr>
            </table>
    </main>
</body>
</html>
<?php foreach ($customers as $tcustomer) : ?>
        <tr>
            <td><?php echo htmlspecialchars($customer['customerID']); ?></td>
            <td><?php echo htmlspecialchars($customer['emailAddress']); ?></td>
            <td><?php echo htmlspecialchars($customer['lastName']); ?></td>
            <td><?php echo htmlspecialchars($customer['city']); ?></td>
            <td><?php echo htmlspecialchars($customer['phone']); ?></td>
            <td><?php echo htmlspecialchars($customer['password']); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="customerID"
                       value="<?php echo htmlspecialchars($customer['customerID']); ?>">
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
    

<?php include 'view/footer.php'; ?>
