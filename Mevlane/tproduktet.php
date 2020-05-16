<?php
require("dbconfig.php");

$connect = mysqli_connect(servername, username, password, dbname); 
if (!$connect) {  
   die("Konektimi deshtoi: " . mysqli_connect_error()); 
}
$sql = "CREATE TABLE produktet (
item_id INT(15) UNSIGNED AUTO_INCREMENT,
item_name VARCHAR(30) NOT NULL,
item_image VARCHAR(50) NOT NULL,
item_price INT(10) NOT NULL,
item_quantity INT(50) NOT NULL,
 PRIMARY KEY (item_id)
)";
 
$retval = mysqli_query($connect, $sql );
if(! $retval )
{
die('Nuk mund te krijohet tabela: ' . mysqli_error($connect));
}
echo "Tabela u krijua me sukses\n";
mysqli_close($connect);	
?>

