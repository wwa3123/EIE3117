
<?php
    
    include_once("config.php");

        // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['description'], $_POST['typeField'])) {
        // Could not get the data that should have been sent.
        exit('Please complete the registration form!');
    }
    // Make sure the submitted registration values are not empty.
    if (empty($_POST['description']) || empty($_POST['typeField'])) {
        // One or more values are empty.
        exit('Please complete the registration form');
    }


        if ($stmt = $connection->prepare('UPDATE tutor SET tarea = ?, tdescription = ? where tid = ?')) {
            echo 'test';

            $stmt->bind_param('sss', $_POST['typeField'], $_POST['description'], $_SESSION['userid']);
            $stmt->execute();
            echo 'You have successfully registered! You can now login!';
        } else {
            // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        } 
    
    $connection->close();
?>
        

    