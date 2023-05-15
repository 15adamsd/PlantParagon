<?
include ("connect_LP2.php");
$result = mysqli_query($link, "SELECT * FROM prod_table");
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
        <div class="flex-item">
            <p class="plantName"><?php echo $row['prod_name'];?></p>
        <img src="<?php echo  $row['prod_photo_fn_small'];?>">
        <hr>
        <div class="cardInfo">
            <p><?php echo  $row['prod_small_des'];?></p>
            <p class="cardPrice">$<?php echo  $row['prod_price'];?></p>
        </div>
        <br>
            <a href="single_product.php?id=<?php echo  $row['prod_id'];?>"><button class="coolbutton" style="
            height:25px;
            width: 100px;
            font-size: 18px;
            ">View</button></a>
        <form action="add_cart.php" class="f_class" method="post">
        <div style="text-align:center;font-weight:bolder;font-size:20px;color:#FFE8D6;">
              Amount: <input style="background:none;color:#FFE8D6;"type="text" size="3" name="qty" id="qty">
        </div>
            <input type="hidden" name="prod_id_h" value="<?php echo  $row['prod_id'];?>">
            <input class="coolbutton" style="
            height:25px;
            width: 100px;
            font-size: 18px;
            " type="submit" value="Purchase"> 
            <br>
        </form>
        </div>
        <? 
   } // ends the while loop
} // ends the if statement
?>