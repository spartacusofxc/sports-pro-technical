
<?php include 'view/header.php'; ?>


    <main>
    
    <!-- display login form -->
    <h1>Get Customer</h1>
    <p>You must enter the customer's email address to select the customer.</p>
    <form action="create_incident_form.php" method="post">
        <label>Email:</label>
        <input type="text" name="email">&nbsp;
        <input type="submit" value="Get Customer"><br>
    </form>
</main>
       

<?php include '../view/footer.php'; ?>