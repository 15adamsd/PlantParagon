<?

$del_id=$_POST['shop_id'];
include ("connect_LP2.php");
//if ($d_button == "delete"){
	//print "<p>the item needs to be deleted value of $del_id";
	
	
   $sql = "DELETE FROM shopping_cart_table WHERE shop_id = '$del_id'";
   $result = mysqli_query($link, $sql);
   
   if (!$result)
       {
          echo ('NO Record deleted');
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
       }
   else
       {
         ?>
            <h2 class="total" style="text-align: left; padding-left: 40px;">Item deleted.</h2>
            
     <?	
       }
	


?>