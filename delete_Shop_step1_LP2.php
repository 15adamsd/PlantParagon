<?
//connect to database
include ("connect_LP2.php");

// to get info
$result = mysqli_query($link, "SELECT * FROM shopping_cart_table");
if(!$result){
  echo('bad search');
}
else
{
    //echo('good search');
    ?>
    <html style="margin: 15px;">
    <link rel="stylesheet" href="adminSelect.css">
    <h1>Delete Record</h1>
    <hr>
    <a href="home.html"><button>Home</button></a>
    <h3>Select record to delete...</h3>
    <div style="margin: 15px;">
    <form name="shoppingInfo" method="post" action="delete_Shop_step2_LP2.php">
    <select style="font-size: 20px;" name="shopInfo">
    <?
    while ($row = mysqli_fetch_array($result))
    { 
       ?>
       <option value = "<?php echo  $row['shop_id'];?>"><?php echo  $row['order_number'];?>
       <?
        
    }  //end of while loop    
    ?>
    </select>
    <br>
    <br>
    <input style="font-size: 20px; margin-left: 60px;" type="submit" value="Delete">
  </form> 
    </div>
    <?php
     
} // end of IF else statement

?>