<?php 

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password); 
if (!$connect) {  
   die('Nuk mund te konektohet databaza: ' . mysqli_error($connect)); 
}
echo "Databaza u konektua";
mysqli_close($connect);

?>
 
 