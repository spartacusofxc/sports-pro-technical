<?php include 'view/header.php'; ?>

<html>
<main>
    <h1>customer</h1>

    <!-- display a table of products -->
    <table>
        <tr>
            <th>CustomerID</th>
            <th>firstName</th> 
            <th>lastName</th>
            <th>email</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($customers as $customer) ?>
        <tr>
            <td><?php echo htmlspecialchars($customer['customerID']); ?></td>
            <td><?php echo htmlspecialchars($customer['firstName']); ?></td>
            <td><?php echo htmlspecialchars($customer['lastName']); ?></td>
            <td><?php echo htmlspecialchars($customer['email']); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="select_customer">
                <input type="hidden" name="customerID"
                       value="<?php echo htmlspecialchars($customer['customerID']); ?>">
                <input type="submit" value="select">
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>

</html>



<?php include 'view/footer.php'; ?>
