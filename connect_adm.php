<?php
//echo('PHP worked'
$hostname="localhost:3360";
//$hostname="localhost";
$username="mlong_home_username";
$password="Eiuk10_2";
$dbname="mlong_home_test_db";
$usertable="ad_table";

$link = mysqli_connect($hostname, $username, $password);
   if(!$link){
      //echo('bad connect');
   }
  else
  {
      //echo('good connect');
  }

if (!mysqli_select_db($link, $dbname))
{
	//echo('no database selected'); 
	
}
else
{   
  //echo('database selected');  
}

?>