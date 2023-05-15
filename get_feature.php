<?
include ("connect_LP2.php");
$result = mysqli_query($link, "SELECT * FROM prod_table WHERE prod_feature_item='Y'");
if (!$result)
{
	$error = 'Error fetching data: ' . mysqli_error($link);
	echo ('bad results');
	//exit();
}
else
{
	//echo ('got a good result');

	
	
    while ($row = mysqli_fetch_array($result))
  {
        
		?>
        <link rel="stylesheet" href="main.css">
        <div class="rightC">
            <img src="<?php echo  $row['prod_photo_fn_large'];?>">
        </div>
        <div class="leftC">
           <h1><?php echo $row['prod_name'];?></h1>
           <hr>
           <br>
           <p><?php echo  $row['prod_large_des'];?></p>
           <p class="price">$<?php echo  $row['prod_price'];?></p>
        </div>
        <div class="randC">
           <br>
           <a href="single_product.php?id=19"><button class="coolbutton">View Plant</button></a>
           <br><br><br>
           <form action="add_cart.php" method="post">
           <input type="hidden" name="prod_id_h" value="<?php echo  $row['prod_id'];?>">
           <div style="text-align:center;font-weight:bolder;font-size:20px;color:#FFE8D6;">
              Amount: <input style="background:none;color:#FFE8D6;"type="text" size="3" name="qty" id="qty">
           </div>
           <br>
           <input class="coolbutton" type="submit" value="Purchase">
           <br><br><br>
           </form>        
         </div>
              <? 
   } // ends the while loop
} // ends the if statement for results of sql
?>