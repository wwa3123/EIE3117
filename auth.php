<?php

    session_start(); // starting a session
    // Database configuration file
    
    function validate($name, $pass, $type){

        include('config.php');
        
        if ($type == "student"){
            $sql = "Select * from user where uname ='$name' and upassword ='$pass'";
            $id="uid";
            
        }else if($type =="tutor"){
            $sql = "Select * from tutor where tname ='$name' and tpassword ='$pass'";
            $id="tid";
            
        }else{
            echo 'type wrong';
        }
        
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result);

        

        if($row) {

			$_SESSION["userid"]= $row[$id];
            $_SESSION["username"]=$name;
            $_SESSION["usertype"]=$type;

            if($_SESSION["usertype"]== "student"){
                header('location: tutorlist.php');
            }if($_SESSION["usertype"]== "tutor"){
                header('location: tutorprofile.php');
            }
        } else {
            echo "<p>no susch record</p>";
        }

        return;
    } 

    if(isset($_COOKIE["user_login"]) && isset($_COOKIE["userpassword"])) {
        $username=$_COOKIE['user_login'];
        $password=$_COOKIE['userpassword']; 
        $type=$_COOKIE['usertype']; 
        
        validate($username, $password, $type);
    }
     

    if(isset($_POST["login"]))  {
        
        // Getting Post Vlaues
        $username=$_POST['username'];
        $password=hash('SHA256',$_POST['password']);
        $type=$_POST['radio'];
        

        if(!empty($_POST["remember"])) {

            //COOKIES for username
            setcookie("user_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
            
            //COOKIES for password
            setcookie("userpassword",$password,time()+ (10 * 365 * 24 * 60 * 60));
            setcookie("usertype",$type,time()+ (10 * 365 * 24 * 60 * 60));

        } 

        validate($username, $password, $type);
    }
?>