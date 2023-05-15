<?
$id=$_GET['id']; 

include ("connect_LP2.php");
$result = mysqli_query($link, "SELECT * FROM prod_table WHERE prod_id='$id'");
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
        <style>
            .leftS {
                width: 300px;
                height: 500px;
                margin-left: 170px;
                margin-top: 70px;
                background: #6B705C;
                color: #FFE8D6;
                padding: 15px;
            }
            
            h3 {
                font-size: 50px;
                font-weight: bolder;
            }

            .rightS {
                margin-left: 500px;
                margin-top: -550px;
            }
        </style>
        <div class="leftS">
            <h3><?php echo  $row['prod_name'];?></h3>
            <p> <?php echo  $row['prod_large_des'];?></p>
            <p style="font-size: 40px;">$<?php echo $row['prod_price'];?></p>
            <form action="add_cart.php" method="post">
                <input type="hidden" name="prod_id_h" value="<?php echo  $row['prod_id'];?>">
                <div style="text-align:center;font-weight:bolder;font-size:20px;color:#FFE8D6;">
                Amount: <input style="background:none;color:#FFE8D6;"type="text" size="3" name="qty" id="qty">
                </div>
                <br> 
                <input class="coolbutton" type="submit" value="Purchase">
            </form> 
        </div>
        <div class="rightS">  
            <img src="<?php echo  $row['prod_photo_fn_large'];?>">
        </div>
        <? 
   } // ends the while loop
} // ends the if statement
?>