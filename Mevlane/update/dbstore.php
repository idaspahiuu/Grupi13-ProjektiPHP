<?php
require("dbconfig.php");


$conn = mysqli_connect(servername, username, password); 
if (!$conn) {  
   die("Connection failed: " . mysqli_error($conn)); 
}

$sql = 'CREATE Database Store';

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
die('Could not create database: ' . mysqli_error($conn));
}
echo "Database Store created successfully\n";
mysqli_close($conn);
?>