<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width"> 
  <title>PlantParagon</title>
  <link rel="stylesheet" href="main.css"> 
  <style>
  .total {
    text-align: right;
    font-size: 40px;
    font-weight: bolder;
    color: #CB997E;
    padding-right: 50px;
  }
  table, td, th {
    border: none;
    padding: 15px;
  }
  .tableHead {
    color: #6B705C;
    font-size: 25px;
    font-weight: bolder;
  }
  td {
    color: #DDBEA9;
    font-size: 20px;
    font-weight: bolder;
  }
  table {
    margin-left: 40px;
    border-collapse: collapse;
    width: 100%;
  }
</style>
</head>
<body>   
<header>
  <?include ("nav.html");?>       
</header>
<div id="container">
  <?include ("get_cart_content.php");?>
</div>
</body>
</html>