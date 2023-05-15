<link rel="stylesheet" href="main.css"> 
<?php
session_start();
//session_register("shp");
//$_SESSION["ordernumber"]=$ordernumber;
//echo $_SESSION["ordernumber"];
$ordernumber=$_SESSION["ordernumber"];
//echo $_SESSION["ordernumber"];
include ("connect_LP2.php");

//Query to retreive content from the table to creat invoice
$sql = "SELECT prod_table.*, shopping_cart_table.* FROM prod_table, shopping_cart_table WHERE prod_table.prod_id = shopping_cart_table.prod_id and  shopping_cart_table.order_number='$ordernumber'";

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
    <br><br><br>
     <table> 
     <tr>
        <td class="tableHead">Product Number</td>
        <td class="tableHead">Item Name</td>
        <td class="tableHead">Quanity</td>
        <td class="tableHead">Price</td>
        <td class="tableHead">Total</td>

    <?    
    while ($row = mysqli_fetch_array($result))
    {
      $total_price = $row['prod_price'] * $row['qty'];
      $final_total = $final_total + $total_price;
      $order_number = $row['order_number'];
      ?>
      <form action="check_out.php" method="post" name="cart">
        <tr>
          <td><?php echo  $row['prod_id'];?></td>
          <td><?php echo  $row['prod_name'];?></td>
          <td>
            <input type="hidden" value="<?php echo  $row['shop_id'];?>" name="shop_id">
            <input style="background: none;" type="text" size="3" value=" <?php echo  $row['qty'];?>" name="qty">
            <input class="coolbutton" style="
            font-size: 15px; 
            font-weight:bolder;
            width:100px;" 
            type="submit" value="Update" name="update">
          </td>
          <td>$<?php echo  $row['prod_price'];?></td>
          <td>$<?php echo  $total_price?></td>
          <td>
            <input type="hidden" value="<?php echo  $row['shop_id'];?>" name="shop_id">
            <input class="coolbutton" style="
            font-size: 15px; 
            font-weight: bolder;
            width:100px;" 
            type="submit" value="Delete" name="delete">
          </td>
        </tr> 
  </form>
    
    <?
  }  //end of while loop  
  
  
  ?> 
  </table>
  <h2 class="total">Final Total: $<?php echo  $final_total?></h2>
  <div style="padding-left: 40px;">
    <h1 class="total" style="text-align: left;">Select one of the following options to complete your order...</h1>
    <br><br>
    <a href="login.php?order_number=<?php echo  $order_number?>"> <button class="coolbutton" style="margin-left: 630px;">Log in</button></a></br></br>
    <a href="register.php?order_number=<?php echo  $order_number?>"><button class="coolbutton" style="margin-left: 630px;">Register</button></a></br></br>
    <a href="guest_checkout.php?order_number=<?php echo  $order_number?>"><button class="coolbutton"style="margin-left: 630px;" >Guest</button></br></br>
  </div>
  <br><br>
<?               
} // end of IF else statement


?>
