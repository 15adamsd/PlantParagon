<?php
$id = $pname = $sDes = $lDes = $price = $lPhoto = $sPhoto = $qty = $fItem = $discount =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $pname = $_POST["pname"];
  $sDes = $_POST["sDes"];
  $lDes = $_POST["lDes"];
  $price = $_POST["price"];
  $lPhoto = $_POST["lPhoto"];
  $sPhoto = $_POST["sPhoto"];
  $qty = $_POST["qty"];
  $fItem = $_POST["fItem"];
  $discount = $_POST["discount"];
}
include ("connect_LP2.php");
$result = mysqli_query($link, "INSERT INTO prod_table ( prod_name, prod_small_des, prod_large_des, prod_price, prod_photo_fn_large, prod_photo_fn_small, prod_qty_onhand, prod_feature_item, prod_discount_code)
		VALUES ('$pname','$sDes','$lDes','$price','$lPhoto','$sPhoto', '$qty', '$fItem','$discount')");

if (!$result)
{
  ?>  
  <html>
  <link rel="stylesheet" href="adminSelect.css">
  <h1>ERROR: Record not added.</h1>
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
  <h1>SUCCESS: Record added.</h1>
  <hr>
  <h3>Select option...</h3>
  <a href="report_prod_LP2.php"><button>See Report</button></a>
  <a href="home.html"><button>Home</button></a>  
  <a href="p_table.html"><button>Product Table</button></a>
  </html>
  <?php
}