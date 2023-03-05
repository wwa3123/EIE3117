<?php
    session_start();
    include_once("config.php");

        // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['message'])) {
        // Could not get the data that should have been sent.
        exit('Please complete the registration form!');
    }
    // Make sure the submitted registration values are not empty.
    if (empty($_POST['message'])) {
        // One or more values are empty.
        exit('Please complete the registration form');
    }


    if ($stmt = $connection->prepare('INSERT INTO message(uid, tid, message, sendtime) VALUES (?, ?, ?, now());')) {
        echo "userid=".$_SESSION['userid']."view=".$_SESSION['tutorviewid']."message=".$_POST['message'];
        $userm=$_SESSION['userid'];
        $tutorm=$_SESSION['tutorviewid'];
        $message=$_POST['message'];

        $stmt->bind_param('iis', $userm, $tutorm, $message);
        $stmt->execute();

        echo "";
        
    } else {
        // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';
    } 
    
    $connection->close();

    header('Location: viewtutor.php');
    exit;
?>