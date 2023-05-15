
<!DOCTYPE html>
<head>
    <title>PlantParagon</title>
  <meta name="viewport" content="width=device-width"> 
  <link rel="stylesheet" href="main.css"> 
  <style>
  #main {
    display: -webkit-flex;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

}
.flex-item {
    background-color: #6B705C;
    margin-top: 30px;
    margin-left: 100px;
    margin-bottom: 100px;
    font-size: 20px;
    width: 300px;
    height: 650px;
    padding: 20px;
    color:  #FFE8D6;
    box-shadow: 6px 6px 5px gray;
    text-align: center;
    border-radius: 10px;
    
}

.plantName {
    font-weight: bolder;
    font-size: 25px;
}
.button_on {
     display:block;
}
.button_off {
display:none;
}  
h2 {
    text-align: center;
} 
.cardPrice {
    font-weight: bolder;
    font-size: 40px;
    color: #6B705C;


}

.cardInfo {
    text-align: center;
    background: #DDBEA9; 
    height: 130px; 
    width: 270px;
    padding: 15px;
}
</style>
</head>
<body>
   
<header>
    <?
      include ("nav.html");    
    ?>        
</header>
<div id="main">
    <?
    include ("get_multi_product.php");
    ?>          
</div>
<footer style="position: relative">
    <?include ("footer.html");?>
</footer>
</body>
</html>