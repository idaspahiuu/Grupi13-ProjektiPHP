<?php
define("servername","localhost");
define("dbname","store");
define("username","root");
define("password","");


$connect = mysqli_connect(servername, username, password, dbname); //shtojme 'dbname' 
if (!$connect) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

?>

