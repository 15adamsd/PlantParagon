<?
//connect to database
include ("connect_LP2.php");

// to get info
$result = mysqli_query($link, "SELECT * FROM shopping_cart_table");
if(!$result){
  //echo('bad search');
}
else
{
    //echo('good search');
    ?>
    <html style="margin: 15px;">
    <link rel="stylesheet" href="adminSelect.css">
    <h1>Update Record</h1>
    <hr>
    <a href="home.html"><button>Home</button></a>
    <h3>Select record to update...</h3>
    <div style="margin: 15px;">
    <form name="shoppingInfo" method="post" action="updateShop_step2_LP2.php">
    <select style="font-size: 20px; width: 200px" name="shopInfo">
    <?
    while ($row = mysqli_fetch_array($result))
    { 
      //$name = $row['cust_fn']. " ".$row['cust_ln'];
       ?>
       <option value = "<?php echo  $row['shop_id'];?>"><?php echo  $row['order_number'];?>
       <?   
    }  //end of while loop    
    ?>
    </select>
    <br>
    <br>
    <input style="font-size: 20px; margin-left: 60px;" type="submit" name="submit">
  </form> 
    </div>
    <?php
     
} // end of IF else statement

?>