<?
//connect to database
include ("connect_LP2.php");

// to get info
$result = mysqli_query($link, "SELECT * FROM prod_table");
if(!$result){
  //echo('bad search');
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
    <form name="productInfo" method="post" action="delete_prod_step2_LP2.php">
    <select style="font-size: 20px;" name="prodInfo">
    <?
    while ($row = mysqli_fetch_array($result))
    { 
       ?>
       <option value = "<?php echo  $row['prod_id'];?>"><?php echo  $row['prod_name'];?>
      
       <?
        
    }  //end of while loop    
    ?>
    </select>
    <br>
    <br>
    <input style="font-size: 20px; margin-left: 60px;" type="submit" name="Delete">
  </form> 
    </div>
    <?php
     
} // end of IF else statement

?>