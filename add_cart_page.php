<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Danielle Adams">
<title>PlantParagon</title>
<link rel="stylesheet" href="main.css">
<style>
    html {
        background-image: url('closeleaf2.jpeg');
        background-size: cover;
    }
    h2 {
        font-weight: bolder;
        font-size: 80px;
        color: #DDBEA9;
        padding-top: 50px;
    }
    .added {
        background: #FFE8D6;
        width: 1100px;
        height: 300px;
        margin-left: 150px;
        margin-top: 250px;
        text-align: center;
    }
    .left {
        float: left;
        margin-left: 120px;

    }
    .right {
        float: right;
        margin-right: 120px;

    }
</style>
</head>
<body>
    <header><?include ("nav.html");?></header>
<div class="added"> 
    <h2>Item added to cart!</h2>
    <hr>
    <div class="left">
    <a href="index.php"><button class="coolbutton" style="width: 350px;">Continue shopping</button></a>
</div>
<div class="right">
    <a href="check_out.php"><button class="coolbutton">View cart</button></a>
</div>
</div>
<footer><?include ("footer.html");?></footer>
</body>
</html>