<?php
session_start();
require_once 'dbconfig.php';
 

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
        $username = $_POST["username"];
        $password = $_POST['password'];
        $pass = md5($password);
 
    
    // Validate credentials
    if($username && $password){

        $qry = "SELECT * FROM admin WHERE username='$username' and password ='$pass'";
        if($result = mysqli_query($db, $qry)){
           if(mysqli_num_rows($result) > 0){
            
             $_SESSION['userLogged'] = "admin";
             header("Location: home.php");
               
            }
        
        } 
        else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }else{
        echo "error";
    }

    
    // Close connection
    mysqli_close($db);
}
?>