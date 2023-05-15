<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password'];  
} 

//echo "the username is $myusername";
//echo "the password is $mypassword"; 
 //$hash = password_hash($mypassword, PASSWORD_DEFAULT); 
 //echo "the password is $hash";  
 
 


//gets the record and searches for the correct username and password!

include ("connect_adm.php");
// Select statement to retreive all information from table using a passed value
$sql = "SELECT * FROM admin_table WHERE admin_username_email = '$myusername'";
$result = mysqli_query($link, $sql);
session_start();
$_SESSION['login_attempt'] = 0;
    if (mysqli_num_rows($result) == 1) {
        while($row=mysqli_fetch_assoc($result)){
            //echo "in while loop";
            if (password_verify($mypassword, $row['admin_password'])) {
                //echo "good all";
                header("location: home.html");
            } 
            else {
                if ($_SESSION['login-attempt'] > 2) {
                    exit("Too many login attempts.");
                }
                else {
                    $_SESSION['login-attempt']++;
                    //echo "bad password";
                    header("location: invalid_password.html");
                }
            }
         }
    }
    else {
        if ($_SESSION['login-attempt'] > 2) {
            exit("Too many login attempts.");
        }
        else {
            $_SESSION['login-attempt']++;
            //echo "bad username";
            header("location: invalid_password.html");
        }
    }
?>