<?php
$id=$_POST['prodInfo']; 
//echo "the id is $id";

include ("connect_LP2.php");
// Select statement to retreive all information from table using a passed value
$result = mysqli_query($link, "SELECT * FROM prod_table WHERE prod_id='$id'");

if(!$result){
  //echo('bad search');
}
else
{
  //echo('good search');
   while ($row = mysqli_fetch_array($result)){
   ?>
   <link rel="stylesheet" href="adminSelect.css">
   <h1>Selected Record</h1>
   <hr>
   <a href="home.html"><button>Home</button></a>
<fieldset>
    <legend><h4>This is the record selected to delete</h4></legend>
    <form action="delete_prod_LP2.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['prod_id']; ?>">
    Product Name <input type="text" name="pname" value="<?php echo $row['prod_name']?>">
        <br>
        <br>
        Short Description
        <br>
        <input type="text" name="sDes" value="<?php echo $row['prod_small_des']; ?>">
        <br>
        <br>
        Long Description 
        <br>
        <input type="text" name="lDes" value="<?php echo $row['prod_large_des']; ?>">
        <br>
        <br>
        Price $<input type="number" name="price" value="<?php echo $row['prod_price']; ?>">
        <br>
        <br>
        Large Photo <input type="text" name="lPhoto" value="<?php echo $row['prod_photo_fn_large']; ?>">
        <br>
        <br>
        Small Photo <input type="text" name="sPhoto" value="<?php echo $row['prod_photo_fn_small']; ?>">
        <br>
        <br>
        Qty Onhand <input type="number" name="qty" value="<?php echo $row['prod_qty_onhand']; ?>">
        <br>
        <br>
        Featured Item? (Y/N) <input type="text" name="fItem" value="<?php echo $row['prod_feature_item']; ?>">
        <br>
        <br>
        Discount Code <input type="text" id="discount" value="<?php echo $row['prod_discount_code']; ?>">
        <br>
        <br>
</fieldset> 
<br>
<input style="font-size: 20px; margin-left: 60px;" type="submit" value="Delete">
</fieldset> 
</form>
</body>
<?
  }  //end of while loop    
} // end of IF else statement

?>