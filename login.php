<?php


$conn=mysqli_connect("localhost", "root", "", "Users");
if(!$conn)
{
	die("Konektimi ka deshtuar!". mysqli_connect_error());

}
	
//Krijimi i databazes users
/*
$sql = "CREATE DATABASE Users";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

mysqli_close($conn);
*/

//Krijimi i tabeles myusers
/*$sql = "CREATE TABLE myUsers(
ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "TABLE created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

mysqli_close($conn);*/

?>