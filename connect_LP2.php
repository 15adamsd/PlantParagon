<?php
//echo('PHP worked'); 

//muting all echos to make html look better. 

$hostname="localhost:3360";
$username="adams_d_usrn";
$password="U&223lkt0";
$dbname="adams_d_dbn";

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