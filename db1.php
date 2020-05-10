<?php

$email="";
$password="";
$error = array();

$conn=mysqli_connect("localhost", "root", "", "users");
if(!$conn)
{
	die("Konektimi ka deshtuar!". mysqli_connect_error());

}

if(empty($_SESSION))
	session_start();

if(isset($_POST['register']))
{

$email = $_POST['email'];
$password = $_POST['Password'];

$email = stripcslashes($email);
$password = stripcslashes($password);

	if(empty($email))
	{
		array_push($error, "Email is required!");

	}
	if(empty($password)){

		array_push($error, "Email is required!");
	}

	$query = "select * from myusers where email = '".$email." ' and password = '".md5($password). " ' ";

	$rezultati = mysqli_query($conn, $query );

	 if(mysqli_num_rows($rezultati)>0)
	{
        // Nëse ekziston shfrytëzuesi në db (tabelën authorized_users)
        $_SESSION['valid_user'] = $email;
    }
    if(isset($_SESSION['valid_user']))
    {
    	header('location: homepage.php');
    }

    
}
$conn->close();
?>

