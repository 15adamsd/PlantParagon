<?php
$fname = $lname = $email = $address = $state = $zip = $city = $phone = $password = "";
$order_number = $_GET['order_number']; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $zip = $_POST["zip"];
  $phone = $_POST["phone"];
  $state = $_POST["state"];
  $pword = $_POST["password"];
  //cannot use $password becasue it is used in the connect.php

}
include ("connect_LP2.php");
$result = mysqli_query($link, "INSERT INTO cust_table ( cust_ln, cust_fn, cust_add, cust_city, cust_state, cust_zip, cust_phone, cust_email, cust_password)
		VALUES ('$lname','$fname','$address','$city','$state','$zip','$phone','$email','$pword')");
if (!$result)
{

	echo ('NO Record Inserted');
	//exit();
}
else
{

    ?>
     <link rel="stylesheet" href="main.css">
     <style>
       html {
         background: #A5A58D;
       }
      </style>
      <header><?include('nav.html')?></header>
     <h2 class="thx">Thanks for registering!</h2>
     <h2 class="oth" style="color: #FFE8D6;">In order to verify your registration you will need to login.</h2> 
    <a href="login.php?order_number=<?php echo  $order_number?>"> <button class="coolbutton" style="
           float: left;
           width: 300px;
           margin-left: 550px;">Log in</button> </a>
    <footer><?include('footer.html')?></footer>
	<?
}
?>