<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?include ("connect_LP2.php");

$order_number = $_GET['order_number']; 
//echo $order_number;

	$sql = "UPDATE shopping_cart_table SET cust_id = 'OP' WHERE order_number ='$order_number'";



$result = mysqli_query($link, $sql);

if (!$result)
    {
	 echo ('NO Record Updated');
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
else
    {
       ?>
       <link rel="stylesheet" href="main.css"> 
       <header><?include('nav.html')?></header>
       <style>
           html {
               background: #A5A58D;

           }
       </style>
       <body>
       <div class="thx" style="margin-top: 30px;">
         <h1> Thank you for your order!</h1>
       </div>
       <h2 class="oth">Order Number: <?php echo $order_number;?></h2>
       <br>
       <h2 class="oth">Please enter your shipping information.</h2>
       <div style="padding-left: 600px;">
       <label style="color:#FFE8D6">Address</label> <input type="address" name="address">
        <br>
        <br>
        <label style="color:#FFE8D6"> City</label> <input type="city" name="city">
        <br>
        <br>
        <label style="color:#FFE8D6">State</label> <select name="state">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        <br>
        <br>
        <label style="color:#FFE8D6">Zip</label> <input type="zip" name="zip">
       </div>
       <br><br>
       <div>
           <a href="index.php"><button class="coolbutton" style="
           float: left;
           width: 300px;
           margin-left: 550px;">Continue shopping</button></a>
       </div> 
       </body>
       <footer><?include('footer.html')?></footer>
       <?		
    }
?>