<?php

include ("connect_LP2.php");

// This includess the SQL that's needed to retreive all the records
$result = mysqli_query($link, "SELECT * FROM prod_table");

if(!$result){
  //echo('bad search');
}
else
{
  //echo('good search');
  ?>
   <link rel="stylesheet" href="adminSelect.css">
   <h1>Product Report</h1>
   <a href="home.html"><button>Home</button></a>
   <?php
    while ($row = mysqli_fetch_array($result))
  {
        ?>
 <table width="600" cellpadding="7">
     <tr>
       <hr>
       <td><?php echo $row['prod_id'];?></td> 
       <td><?php echo $row['prod_name'];?></td> 
       <td><?php echo $row['prod_small_des'];?></td>
       <td><?php echo $row['prod_large_des'];?></td>
       <td><?php echo $row['prod_price'];?></td>
       <td><?php echo $row['prod_photo_fn_large'];?></td>
       <td><?php echo $row['prod_photo_fn_small'];?></td>
       <td><?php echo $row['prod_qty_onhand'];?></td>
       <td><?php echo $row['prod_feature_item'];?></td>
       <td><?php echo $row['prod_discount_code'];?></td>
       <hr>
    </tr>
</table>
        <?
  }  //end of while loop    
} // end of IF else statement
?>