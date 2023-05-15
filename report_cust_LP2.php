<?php

include ("connect_LP2.php");

// This includess the SQL that's needed to retreive all the records
$result = mysqli_query($link, "SELECT * FROM cust_table");

if(!$result){
  //echo('bad search');
}
else
{
  //echo('good search');
  ?>
   <link rel="stylesheet" href="adminSelect.css">
   <h1>Customer Report</h1>
   <a href="home.html"><button>Home</button></a>
   <?php
    while ($row = mysqli_fetch_array($result))
  {
        ?>
 <table width="400" cellpadding="7">
     <tr>
       <hr>
       <td><?php echo $row['cust_id'];?></td>
       <td><?php echo $row['cust_fn'];?></td> 
       <td><?php echo $row['cust_ln'];?></td>
       <td><?php echo $row['cust_add'];?></td>
       <td><?php echo $row['cust_city'];?></td>
       <td><?php echo $row['cust_state'];?></td>
       <td><?php echo $row['cust_zip'];?></td>
       <td><?php echo $row['cust_phone'];?></td>
       <td><?php echo $row['cust_email'];?></td>
       <td><?php echo $row['cust_password'];?></td>
       <hr>
    </tr>
</table>
        <?
  }  //end of while loop    
} // end of IF else statement
?>