<link rel="stylesheet" href="adminSelect.css"> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $id=$_POST['shopInfo'];
}
include ("connect_LP2.php");
//$sql = "SELECT * FROM shopping_cart_table  WHERE shop_id ='$id'";
$sql = "SELECT prod_table.*, shopping_cart_table.* FROM prod_table, shopping_cart_table WHERE prod_table.prod_id = shopping_cart_table.prod_id and  shopping_cart_table.shop_id='$id'";

$result = mysqli_query($link, $sql);

if(!$result){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
else
{
  //echo('good search');
 //$num_rows = mysqli_num_rows($result);   
  //echo "$num_rows Rows\n";
  //echo('your order');
  ?> 
  
     <table> 
     <tr>
        <td>Product number</td>
        <td>Item name</td>
        <td>Quanity</td>
        <td>price</td>
        <td>total</td>



    <?    
    while ($row = mysqli_fetch_array($result))
  {
   
   
    $total_price = $row['prod_price'] * $row['qty'];
    $final_total = $final_total + $total_price;
    $order_number = $row['order_number'];
        ?> 
        
        <form action="update_or_delete.php" method="post" name="cart">
    <tr>
        <td><?php echo  $row['prod_id'];?></td>
        <td><?php echo  $row['prod_name'];?></td>
        <td>
            <input type="hidden" value="<?php echo  $row['shop_id'];?>" name="shop_id">
            <input type="text" size="3" value=" <?php echo  $row['qty'];?>" name="qty">
            <input type="submit" value="update" name="update">
        
        </td>
        <td><?php echo  $row['prod_price'];?></td>
        <td><?php echo  $total_price?></td>
        <td>
        <input type="hidden" value="<?php echo  $row['shop_id'];?>" name="shop_id">
            
            <input type="submit" value="delete" name="delete">
            
        </td>
  </tr> 
  </form>
    
    <?
  }  //end of while loop  
  
  
  ?> 
  </table>
  <h2>Total: $<?php echo $final_total?></h2>
  <br>
  <a href="home.html"><button>Home</button></a>  
<?               
} // end of IF else statement


?>