<?php


$email="";
$Password="";
$Password1="";

$error = array();

$conn=mysqli_connect("localhost", "root", "", "users");
if(!$conn)
{
	die("Konektimi ka deshtuar!". mysqli_connect_error());

}

if(empty($_SESSION))
	session_start();



if(isset($_POST['Change']))
{

$email = $_POST['email'];
$Password = $_POST['Password'];
$Password1 = $_POST['Password1'];

$email = stripcslashes($email);
$Password = stripcslashes($Password);
$Password1= stripcslashes($Password1);

	if(empty($email))
	{
		array_push($error, "Email is required!");

	}
	if(empty($Password))
	{

		array_push($error, "Password is required!");
	}
	if(empty($Password1))
	{

		array_push($error, "Confirmation is required!");
	}
	if($Password != $Password1)
	{
		array_push($error, "Passwords do not match!");
	}
	if(strlen($Password)<8)
	{
		array_push($error, " Password must be at least 8 characters in length!");	
	}

	if(count($error)==0)
	{
		$_SESSION['valid_user']=$email;
		$query = "SELECT * FROM myusers WHERE email = '".$_SESSION['valid_user']."' ";
		if(mysqli_query($conn, $query))
		{
			$sql = "UPDATE myusers SET password='".md5($Password)."' WHERE 	email ='".$_SESSION['valid_user']."' ";
			if(mysqli_num_rows(mysqli_query($conn, $query)) > 0)
			{
				if (mysqli_query($conn, $sql))
				{	
					echo "Password updated successfully!<br>";
					echo '<a href="LogIn.php">Go back to LogIn</a>';
				}	
			}
			else
			{
				trigger_error("Failed to update password!".'<br>');
				echo '<a href="LogIn.php">Go back</a>';
			}
		}
	}
	
}
	

$conn->close();


?>

