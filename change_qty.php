<?
//check to see if item is to be update

$shop_id=$_POST['shop_id'];
$qty=$_POST['qty'];
//echo "shop_id is $shop_id";
//echo $qty;
include ("connect_LP2.php");

	
	$sql = "UPDATE shopping_cart_table SET qty = '$qty'   WHERE shop_id ='$shop_id'";



$result = mysqli_query($link, $sql);

if (!$result)
    {
	   echo ('NO Record Updated');
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
else
    {
	   //echo ('Good job record updated');
       ?>
       <h2 class="total" style="text-align: left; padding-left: 40px;">Quantity updated.</h2>
       <div>
           <a href="index.php"><button class="coolbutton" style="
           float: left;
           width: 300px;
           margin-left: 40px;">Continue shopping</button></a>
       </div>
<?		
    }
?>

	
   