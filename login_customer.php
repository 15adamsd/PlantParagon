<?php

session_start();

//session_register("shp");
//$_SESSION["ordernumber"]=$ordernumber;


$ordernumber=$_SESSION["ordernumber"];

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password'];   
//echo "the username is $myusername";
//echo "the password is $mypassword";   
}
include ("connect_LP2.php");
// Select statement to retreive all information from table using a passed value
$sql = "SELECT * FROM cust_table WHERE cust_email = '$myusername' and cust_password = '$mypassword'";

$result = mysqli_query($link, $sql);
if(!$result){
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
else
{
//echo('good search');
$count = mysqli_num_rows($result); 
//echo "count - $count";
    if($count == 1) {
        //echo ("Your Login Name or Password is Good");
        //echo $row['cust_id']; 
         //mysqli_free_result($result);
        $row = mysqli_fetch_assoc($result);
        $cust_id_org =$row["cust_id"];
         $lname = $row['cust_ln'];
         $fname = $row['cust_fn'];
       //echo " the lname is   $lname      ";
       //echo " the fname is $fname"
       //echo " the id is     $cust_id_org      ";
       ?>
       <link rel="stylesheet" href="main.css">
       <style>
         html {
           background: #A5A58D;
         }
         .thx {
           margin-top: 200px;
           color: #6B705C;
           font-weight: bolder;
           font-size: 50px;
           text-align: center;
         }
         .oth {
           color: #FFE8D6;
           font-size: 30px;
           font-weight: bolder;
           text-align: center;
         }
       </style>
       <header>
         <?include('nav.html')?>
       </header>
       <div class="thx">
         <h1> Thank you for your order!</h1>
         <? echo "$fname $lname"?>
       </div>
       <h2 class="oth">Order Number: <?php echo $ordernumber;?></h2>
       <div>
           <a href="index.php"><button class="coolbutton" style="
           float: left;
           width: 300px;
           margin-left: 550px;">Continue shopping</button></a>
       </div> 
       <footer><?include('footer.html')?></footer>
     <?php
      }
    else {
        echo "Incorrect username or password.";
    }
  
    $sql = "UPDATE shopping_cart_table SET cust_id = '$cust_id_org' WHERE cust_id ='99'";      
    $result2 = mysqli_query($link, $sql);
 
   if (!$result2)
    {
	  echo ('NO Record Updated');
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
} // end of IF else statemen 
 
?>