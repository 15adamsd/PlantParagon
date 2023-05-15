<?php
//echo "in the delete";

//<!---- this retreiveis the data from your form, 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  
  $id=$_POST['shopInfo'];
 
}


  



//!-- Your connection information needs to go here, 
include ("connect_LP2.php");

$sql = "DELETE FROM shopping_cart_table  WHERE shop_id ='$id'";





$result = mysqli_query($link, $sql);


if (!$result)
    {
      ?>
      <html>
      <link rel="stylesheet" href="adminSelect.css">
      <h1>ERROR: Record not updated.</h1>
      <hr>
      <h3>Select option...</h3>
      <a href="report_shop_LP2.php"><button>See Report</button></a>
      <a href="home.html"><button>Home</button></a>  
      <a href="s_table.html"><button>Shopping Cart Table</button></a>
      </html>
      <?php
    }
else
    {
      ?>  
      <html>
      <link rel="stylesheet" href="adminSelect.css">
      <h1>SUCCESS: Record updated.</h1>
      <hr>
      <h3>Select option...</h3>
      <a href="report_shop_LP2.php"><button>See Report</button></a>
      <a href="home.html"><button>Home</button></a>  
      <a href="s_table.html"><button>Shopping Cart Table</button></a>
      </html>
      <?php	
    }
?> 