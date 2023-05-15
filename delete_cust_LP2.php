<?php
//echo "in the delete";

//<!---- this retreiveis the data from your form, 
//-- field names here need to match name fields in your form
$id = $fname = $lname = $address = $city = $state = $zip = $phone = $email = $pword = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  
  $id=$_POST['id'];
 
}


  



//!-- Your connection information needs to go here, 
include ("connect_LP2.php");

$sql = "DELETE FROM cust_table  WHERE cust_id ='$id'";





$result = mysqli_query($link, $sql);

if (!$result)
    {
      ?>
      <html>
      <link rel="stylesheet" href="adminSelect.css">
      <h1>ERROR: Record not updated.</h1>
      <hr>
      <h3>Select option...</h3>
      <a href="report_cust_LP2.php"><button>See Report</button></a>
      <a href="home.html"><button>Home</button></a>  
      <a href="c_table.html"><button>Customer Table</button></a>
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
      <a href="report_cust_LP2.php"><button>See Report</button></a>
      <a href="home.html"><button>Home</button></a>  
      <a href="c_table.html"><button>Customer Table</button></a>
      </html>
      <?php	
    }
     

?> 