<?
session_start();

//session_register("shp");
//$_SESSION["ordernumber"]=$ordernumber;
//echo $_SESSION["ordernumber"];
$ordernumber=$_SESSION["ordernumber"];
//echo $_SESSION["ordernumber"];
//echo $_POST['update'];


include ("connect_LP2.php");
if (isset($_POST['update']) ) {
include ("change_qty.php");
}
if (isset($_POST['delete']) ) {
    include ("delete_shopping_item.php");
    }

include ("show_cart.php");


?>
