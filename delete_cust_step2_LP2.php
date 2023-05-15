<?php
$id=$_POST['custInfo']; 
//echo "the id is $id";

include ("connect_LP2.php");
// Select statement to retreive all information from table using a passed value
$result = mysqli_query($link, "SELECT * FROM cust_table WHERE cust_id='$id'");

if(!$result){
  //echo('bad search');
}
else
{
  //echo('good search');
   while ($row = mysqli_fetch_array($result))
  {
   ?>
   <link rel="stylesheet" href="adminSelect.css">
   <h1>Selected Record</h1>
   <hr>
   <a href="home.html"><button>Home</button></a>
<fieldset>
    <legend><h4>This is the record selected to delete</h4></legend>
    <form action="delete_cust_LP2.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['cust_id']; ?>">
    First Name <input name="fname" value="<?php echo $row['cust_fn']; ?>">
    <br>
    <br>
    Last Name <input  name="lname" value="<?php echo $row['cust_ln']; ?>">
    <br>
    <br>
    Address <input type="text" name="address" value="<?php echo $row['cust_add']; ?>">
    <br>
    <br>
    City <input type="text" name="city" value="<?php echo $row['cust_city']; ?>">
    <br>
    <br>
    State <select name="state">
    <option value='<?php echo  $row['cust_state']?>' selected='selected'><?php echo $row['cust_state']?></option>
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
    Zip <input type="text" name="zip" value="<?php echo $row['cust_zip']; ?>">
    <br>
    <br>
    Phone <input type="tel" name="phone" value="<?php echo $row['cust_phone']; ?>" >
    <br>
    <br>
    Email <input type="text" name="email" value="<?php echo $row['cust_email']; ?>">
    <br>
    <br>
    Password <input type="text" name="password" value="<?php echo $row['cust_password']; ?>">
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