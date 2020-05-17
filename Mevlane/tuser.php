
<?php
require("dbconfig.php");
$connect = mysqli_connect(servername, username, password, dbname); 
if (!$connect) {  
   die("Konektimi deshtoi: " . mysqli_connect_error()); 
}
$sql = "CREATE TABLE user_info (
  user_id int(10) NOT NULL,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  email VARCHAR(300) NOT NULL,
  password VARCHAR(300) NOT NULL,
  mobile VARCHAR(10) NOT NULL,
  address VARCHAR(300) NOT NULL
)";
 
$retval = mysqli_query($connect, $sql );
if(!$retval)
{
die('Nuk mund te krijohet tabela: ' . mysqli_error($connect));
}
echo "Tabela u krijua me sukses\n";
mysqli_close($connect);	
?>
