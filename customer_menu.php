<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password'];   
//echo "the username is $myusername";
 //echo "the password is $mypassword";   
}
include ("connect_LP2.php");
// Select statement to retreive all information from table using a passed value
$sql = "SELECT * FROM cust_table WHERE cust_email = '$myusername' and cust_password = '$mypassword'";

$result = mysqli_query($link, $sql);
if(!$result){
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
else
{
//echo('good search');
$count = mysqli_num_rows($result); 
//echo "count - $count";
    if($count == 1) {
        //echo ("Your Login Name and Password is Good");
    
         //echo $row['cust_id']; 
         //mysqli_free_result($result);
        $row = mysqli_fetch_assoc($result);
        $cust_id_org =$row["cust_id"];
         $lname = $row['cust_ln'];
       //echo " the lname is   $lname      ";
      // echo " the id is     $cust_id_org      ";
      }
      else
    {
	   //echo ('Good job record updated');
     ?>
     <h1> Password or user name invalid</h1>
    <?php 
    }
    // this code selects the records from the shopping cart that so that the user can see their prevous orders
    $sql = "SELECT * FROM shopping_cart_table  WHERE cust_id ='$cust_id_org' GROUP BY order_number";      
    $result2 = mysqli_query($link, $sql);
 
   if (!$result2)
    {
	  //echo ('NO Record Updated');
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
      else
    {
        //echo ('got record from shopping cart');
        $name = $row['cust_fn']. " ".$row['cust_ln'];
        
        ?>
        <link rel="stylesheet" href="main.css">
        <style>
          html {
            background: #A5A58D;

          }
        </style>
        <form name="order" method="post" action="afterpurchase.php">
         <h1 class="head">Welcome</h1>   
        <p class="head"><?php echo  $name;?></p>
        <H2>Select order.</h2>
        <select name="order">
        <?
        while ($row2 = mysqli_fetch_array($result2))
        { 
          $order_info = $row2['order_number']. " ".$row2['order_date'];
         
           ?>
           <option value = "<?php echo  $row2['shop_id'];?>"><?php echo  $order_info;?>
          
           <?
            
        }  //end of while loop    
        ?>
        </select>
        <br>
        <input type="hidden" value="<?php echo  $row2['order_number'];?>" name="order_number">
        <input type="submit" name="submit">
      </form>
        <?    

    } // end of result2 IF

} // end of IF else statemen 
 
?>