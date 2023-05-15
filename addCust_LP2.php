<?php
$id = $lname = $fname = $address = $city = $state = $zip = $phone = $email = $password =  "";
$password = $_GET["password"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lname = $_POST["lname"];
  $fname = $_POST["fname"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $pword = $_POST["password"]; // do not use $password because you will reset with connect.php
}
include ("connect_LP2.php");
$result = mysqli_query($link, "INSERT INTO cust_table ( cust_id, cust_ln, cust_fn, cust_add, cust_city, cust_state, cust_zip, cust_phone, cust_email, cust_password)
		VALUES ('$lname','$fname','$address','$city','$state','$zip','$phone','$email','$pword')");

if (!$result)
{
  ?>  
  <html>
  <link rel="stylesheet" href="adminSelect.css">
  <h1>ERROR: Record not added.</h1>
  <hr>
  <h3>Select option...</h3>
  <a href="report_cust_LP2.php"><button>See Report</button></a>
  <a href="home.html"><button>Home</button></a>  
  <a href="c_table.html"><button>Customer Table</button></a>
  </html>
  <?php
}
else
{
  ?>  
  <html>
  <link rel="stylesheet" href="adminSelect.css">
  <h1>SUCCESS: Record added.</h1>
  <hr>
  <h3>Select option...</h3>
  <a href="report_cust_LP2.php"><button>See Report</button></a>
  <a href="home.html"><button>Home</button></a>  
  <a href="c_table.html"><button>Customer Table</button></a>
  </html>
  <?php
}
?>