<?php
//echo "in the update";

//<!---- this retreiveis the data from your form, 
//-- field names here need to match name fields in your form
$id = $fname = $lname = $address = $city = $state = $zip = $phone = $email = $pword = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $id=$_POST['id'];
  $fname = $_POST["fname"]; 
  $lname = $_POST["lname"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $pword = $_POST["password"];
  
  /*
  echo "the id is $id";
  echo "the last name is $lname";
echo "the first name is $fname";
echo "the email is $email";
echo "the address is $address";
echo "the city is $city";
echo "the email is $email";
echo "the phone is $phone";
echo "the state $state";
  */
}


  



//!-- Your connection information needs to go here, 
include ("connect_LP2.php");

//$sql = "UPDATE cust_table SET cust_ln = '$lname', cust_fn ='$fname'  WHERE cust_id ='$id'";

$sql = "UPDATE cust_table SET cust_fn = '$fname', cust_ln ='$lname', cust_add = '$address', cust_city = '$city', cust_state = '$state', cust_zip = '$zip', cust_phone = '$phone', cust_email ='$email', cust_password = '$pword' WHERE cust_id ='$id'";



$result = mysqli_query($link, $sql);

if (!$result)
    {
      ?>
      <html>
      <link rel="stylesheet" href="adminSelect.css">
      <h1>ERROR: Record not updated.</h1>
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
      <h1>SUCCESS: Record updated.</h1>
      <hr>
      <h3>Select option...</h3>
      <a href="report_cust_LP2.php"><button>See Report</button></a>
      <a href="home.html"><button>Home</button></a>  
      <a href="c_table.html"><button>Customer Table</button></a>
      </html>
      <?php	
    }
?>
    