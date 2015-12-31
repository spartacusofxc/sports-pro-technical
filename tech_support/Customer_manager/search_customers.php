<?php include 'view/header.php'; ?>

    
<main>    
  <h1>Customer Search</h1>
  
		 <form action="." method="post">
		<input type="hidden" name="action" value="get_customers" />
    	<label>Last Name:</label>
    	<input type="input" name="lastName" value="" /> 
    	<input type="submit" value="Search" />

   
    <h1>Results</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>City</th>
            
            <th>&nbsp;</th>
        </tr>
            </table>


<?php foreach ($customers as $tcustomer) : ?>
        <tr>
            <td><?php echo htmlspecialchars($customer['customerID']); ?></td>
            <td><?php echo htmlspecialchars($customer['emailAddress']); ?></td>
            <td><?php echo htmlspecialchars($customer['lastName']); ?></td>
            <td><?php echo htmlspecialchars($customer['email']); ?></td>
            
                <input type="hidden" name="customerID"
                       value="<?php echo htmlspecialchars($customer['customerID']); ?>">
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </main>   

<?php include 'view/footer.php'; ?>
