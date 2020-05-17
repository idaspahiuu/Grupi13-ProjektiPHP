<?php
require("dbconfig.php");

$connect = mysqli_connect(servername, username, password, dbname); 
if (!$connect) {  
   die("Konektimi deshtoi: " . mysqli_connect_error()); 
}
$sql = "CREATE TABLE cart(
  id INT(10) NOT NULL,
  p_id VARCHAR(10) NOT NULL,
  ip_add VARCHAR(250) NOT NULL,
  user_id INT(10) DEFAULT NULL,
  qty INT(10) NOT NULL
)";
 
$retval = mysqli_query($connect, $sql );
if(!$retval)
{
die('Nuk mund te krijohet tabela: ' . mysqli_error($connect));
}
echo "Tabela u krijua me sukses\n";
mysqli_close($connect);	
?>