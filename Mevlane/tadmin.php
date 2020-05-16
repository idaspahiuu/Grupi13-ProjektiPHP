<?php
$connect = mysqli_connect(servername, username, password, dbname); 
if (!$connect) {  
   die("Konektimi deshtoi: " . mysqli_connect_error()); 
}
$sql = "CREATE TABLE admin_info (
  admin_id INT(10) NOT NULL,
  admin_name VARCHAR(100) NOT NULL,
  admin_email VARCHAR(300) NOT NULL,
  admin_password VARCHAR(300) NOT NULL
)";
 
$retval = mysqli_query($connect, $sql );
if(! $retval )
{
die('Nuk mund te krijohet tabela: ' . mysqli_error($connect));
}
echo "Tabela u krijua me sukses\n";
mysqli_close($connect);	
?>
