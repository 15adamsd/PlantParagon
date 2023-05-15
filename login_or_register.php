<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width"> 
  <link rel="stylesheet" href="main.css"> 
  <style>
    html {
      background:#A5A58D;
    }
  </style>
</head>
<body>
   
<header>
    <?
       include ("nav.html");
    ?>
           

</header>
<div>
    
<div id="left_content_form" style="float: left; margin-left: 300px;"> 
   <form action="customer_menu.php" method="post">   
   <h2 class="head">Registered User</h2>
   <label>Username: </label>
   <input class="form_input" type="text" name="username"><br>
   </br>
   <label>Password: </label>
   <input class="form_input" type="password" name="password">
   </br><br>
   <input class="coolbutton" type="submit" name="old_user" value="Login">
   </form>
</div>
          
     
    
           
      <div id="right_content_form" style="float: right; margin-right: 400px;">
           <form action="new_customer.php" method="post">
            <h2 class="head">New user</h2>
            <label>Last name</label>
        <input type="text" name="lname">
        <br>
        <br>
        First name   <input type="text" name="fname">
         <br>
        
        <br>
        Address <input type="address" name="address">
        <br>
        <br>
        City <input type="city" name="city">
        <br>
        <br>
        Zip <input type="zip" name="zip">
        <br>
        <br>
        State <select name="state">
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
        Phone <input type="tel" name="phone">
        <br>
        <br>
        Email <input type="text" id="email" name="email">
        <br>
        <br>
        
        <label>Password</label>
       
        <input class="form_input" type="password" name="password">
        <br>
        <br>
        <input class="coolbutton" type="submit" value="Register" name="new_user">
    </fieldset> 

           </form>           
      </div> 
   
</div>

</body>
<footer><?include('footer.html')?></footer>
</html>