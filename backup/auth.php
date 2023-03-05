<?php

    session_start(); // starting a session
    // Database configuration file
    
    function validate($name, $pass){

        include('config.php');
        $sql = "Select * from user where uname ='$name' and upassword ='$pass'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result);

        

        if($row) {

			$_SESSION["userid"]= $row["uid"];

            header('location: test.php');

        } else {
            echo "<p>no susch record</p>";
        }

        return;
    } 

    if(isset($_COOKIE["user_login"]) && isset($_COOKIE["userpassword"])) {
        $username=$_COOKIE['user_login'];
        $password=$_COOKIE['userpassword']; 
        validate($username, $password);
    }
    



    if(isset($_POST["login"]))  {
        
        // Getting Post Vlaues
        $username=$_POST['username'];
        $password=hash('SHA256',$_POST['password']);

        if(!empty($_POST["remember"])) {

            //COOKIES for username
            setcookie("user_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
            //COOKIES for password
            setcookie("userpassword",$password,time()+ (10 * 365 * 24 * 60 * 60));

        } 

        validate($username, $password);
    }
?>