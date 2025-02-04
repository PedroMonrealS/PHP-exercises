<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require('./pdo_connect.php'); // Connect to the db.

    $errors = []; // Initialize an error array.

    // Check for a first name:
    if (empty($_POST['weight'])) {
        $errors[] = 'You forgot to enter the weight';
    } else {
        $wg = trim($_POST['weight']);
    }

    if (empty($errors)) { // If everything's OK.

        // Register the user in the database...
        require('./pdo_connect.php'); // Connect to the db.

        $queryOK = TRUE;
        try {
            $q = "INSERT INTO weights (Weight,Date) VALUES (:wg, NOW() )";

            $stmnt = $pdo->prepare($q);
            $stmnt->bindValue(':wg', $wg);
            $stmnt->execute();
        } catch (PDOException $ex) {
            $queryOK = FALSE;
            $output = 'Database error: ' . $ex->getMessage() . ' in ' . $ex->getFile() . ':' . $ex->getLine();
        }
        if ($queryOK) {
            echo "Register added to Database<br>";
        } else {
            echo "Please try again later<br>";
            echo "Debug information:<br>";
            echo $output . "<br>";
            echo $q . "<br>";
        }
    } else { // Report the errors.

        echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br>';
        foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br>\n";
        }
        echo '</p><p>Please try again.</p><p><br></p>';
    } // End of if (empty($errors)) IF.

} // End of the main Submit conditional.
?>
<br><br>
<h1>Weight</h1> 
<form action="" method="post">
    <input type="number" name="weight" value="0" min="0" max="200" placeholder="Weight">
    <input type="submit" name="submit" value="Register">
</form>

<a href="average.php">Average</a>
<?php
?>