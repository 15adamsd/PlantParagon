<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width"> 
  <link rel="stylesheet" href="main.css">
  <style>
      .loc {
          background: #6B705C;
          margin-left: 470px;
          margin-top: 100px;
          padding: 20px;
          width: 500px;
          height: 300px;
          text-align: center;
      }
      .head {
          color:  #FFE8D6;
          font-weight: bolder;
          font-size: 40px;
      }
      .sub {
          font-weight: bolder;
          font-size: 20px;
          color:#CB997E;
      }
  </style>    
</head>
<body>  
<header>
    <?
    include ("nav.html");
    ?>
</header>
<div class="container">
<div class="loc"> 
    <form action="login_customer.php" method="post">   
    <h2 class="head">Registered User</h2>
        <label class="sub">Username: </label>
        <input class="form_input" type="text" name="username"><br>
    </br>
        <label class="sub">Password: </label>
        <input type="password" name="password">
  </br>
  <p></p>
        <input class="coolbutton" type="submit" name="old_user" value="Login">
    </form>
    </div>
</div>
<footer><? include ("footer.html")?></footer>
</body>
</html>