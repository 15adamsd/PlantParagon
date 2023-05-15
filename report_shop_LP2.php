<?php

include ("connect_LP2.php");

// This includess the SQL that's needed to retreive all the records
$result = mysqli_query($link, "SELECT * FROM shopping_cart_table");

if(!$result){
  //echo('bad search');
}
else
{
  //echo('good search');
  ?>
   <link rel="stylesheet" href="adminSelect.css">
   <h1>Shopping Cart Report</h1>
   <a href="home.html"><button>Home</button></a>
   <?php
    while ($row = mysqli_fetch_array($result))
  {
        ?>
 <table width="600" cellpadding="7">
     <tr>
       <hr>
       <td><?php echo $row['order_number'];?></td> 
       <td><?php echo $row['order_date'];?></td>
       <td><?php echo $row['prod_id'];?></td>
       <td><?php echo $row['cust_id'];?></td>
       <td><?php echo $row['qty'];?></td>
       <hr>
    </tr>
</table>
        <?
  }  //end of while loop    
} // end of IF else statement
?>