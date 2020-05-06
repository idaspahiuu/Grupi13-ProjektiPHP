<?php
$username="";
$email="";
$error = array();

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

	if(isset($_POST['register']))
	{
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$email = mysql_real_escape_string($_POST['[Password]']);
		$email = mysql_real_escape_string($_POST['Password1']);

	}

	if(empty($username))
	{
		array_push($error, "Username is required!");
	}
	if(empty($email))
	{
		array_push($error, "Email is required!");
	}
	if(empty($Password))
	{
		array_push($error, "Password is required!");
	}
	if($Password != $Password1)
	{
		array_push($error, "Passwords do not match!");
	}

	if(count($error)==0)
	{
		$password_1 = md5($password);
		$sql = "INSERT INTO myUsers (username, email, password) VALUES ($username, $email, $password_1)";
		mysqli_query($conn, $sql);
	}

?>