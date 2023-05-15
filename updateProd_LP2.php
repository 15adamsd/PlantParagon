<?php
//echo "in the update";

//<!---- this retreiveis the data from your form, 
//-- field names here need to match name fields in your form
$id = $pname = $sDes = $lDes = $price = $lPhoto = $sPhoto = $qty = $fItem = $discount = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $id=$_POST['id'];
  $pname = $_POST["pname"]; 
  $sDes = $_POST["sDes"];
  $lDes = $_POST["lDes"];
  $price = $_POST["price"];
  $lPhoto = $_POST["lPhoto"];
  $sPhoto = $_POST["sPhoto"];
  $qty = $_POST["qty"];
  $fItem = $_POST["fItem"];
  $discount = $_POST["discount"];
  
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

$sql = "UPDATE prod_table SET prod_name = '$pname', prod_small_des ='$sDes', prod_large_des = '$lDes', prod_price = '$price', prod_photo_fn_large = '$lPhoto', prod_photo_fn_small = '$sPhoto', prod_qty_onhand = '$qty', prod_feature_item ='$fItem', prod_discount_code = '$discount'  WHERE prod_id ='$id'";



$result = mysqli_query($link, $sql);

if (!$result)
    {
      ?>
      <html>
      <link rel="stylesheet" href="adminSelect.css">
      <h1>ERROR: Record not updated.</h1>
      <hr>
      <h3>Select option...</h3>
      <a href="report_prod_LP2.php"><button>See Report</button></a>
      <a href="home.html"><button>Home</button></a>  
      <a href="p_table.html"><button>Product Table</button></a>
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
      <a href="report_prod_LP2.php"><button>See Report</button></a>
      <a href="home.html"><button>Home</button></a>  
      <a href="p_table.html"><button>Product Table</button></a>
      </html>
      <?php	
    }
?>