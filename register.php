<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="main.css">
    <style>
        .mid {
            text-align: left;
            margin-left: 470px;
            background: #6B705C;
            height: 580px;
            width: 400px;
            padding-left: 90px;
            padding-top: 15px;
        }
    </style>
</head>
<header>
    <? include ("nav.html");
    ?>
</header>
<body>
    <br><br>
    <div class="mid">
        <h1 class="head">New User</h1>
        <form name ="customerInfo" action="new_customer.php" method="post"> 
        <label class="sub">First Name</label> <input type="text" name="fname">
        <br>
        <br>
        <label class="sub">Last Name</label> <input type="text" name="lname">
        <br>
        <br>
        <label class="sub">Address</label> <input type="address" name="address">
        <br>
        <br>
        <label class="sub"> City</label> <input type="city" name="city">
        <br>
        <br>
        <label class="sub">State</label> <select name="state">
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
        <label class="sub">Zip</label> <input type="zip" name="zip">
        <br>
        <br>
        <label class="sub">Phone</label> <input type="tel" name="phone">
        <br>
        <br>
        <label class="sub">Email</label> <input type="text" id="email" name="email">
        <br>
        <br>
        <label class="sub">Password</label>
        <input type="text"  name="password">
        <br>
        <br>
    <br>
    <input class="coolbutton" style="font-size: 20px; margin-left: 60px;" type="submit" value="Submit">
    </form>
</div>
<footer><? include("footer.html")?></footer>
</body>
</html>