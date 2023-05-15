<link rel="stylesheet" href="adminSelect.css">
<?
$prod_id=$_POST['prod_id_h']; 
$qty=$_POST['qty'];
//echo "product id" . $prod_id;
//echo "qty" . $qty . "<br>";
//session_save_path("/home/users/web/b1250/ywh.theswallowsnestcom/cgi-bin/tmp");
session_start();

//session_register("shp");
//$_SESSION["ordernumber"]=$ordernumber;

//echo "old session number" . $_SESSION["ordernumber"] . "<br>";
$ordernumber=$_SESSION["ordernumber"];

if (empty($ordernumber)){
     $date=date("mdY");
     $time=date("is");
     echo date("m");
     $ordernumber="$date.$time";
     $_SESSION["ordernumber"]=$ordernumber;
     //session_register("ordernumber");
		   print "Your new order number is $ordernumber";
}

if (empty($qty)) {
     echo "Please enter an amount.";
}
//cho $_SESSION["ordernumber"];
 
include ("connect_LP2.php");
$result = mysqli_query($link, "INSERT INTO shopping_cart_table (order_number, order_date, prod_id, cust_id, qty)
		VALUES ('$ordernumber','$date','$prod_id','99','$qty')");

if (!$result)
{
	
     //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	//echo ('bad results');
	//exit();
}
else
{
     include ("add_cart_page.php");
}
?>