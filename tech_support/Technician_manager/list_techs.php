
<?php require('../model/database.php'); ?>


<?php include 'view/header.php'; ?>



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
        



</htmL>



<?php include 'view/footer.php'; ?>











