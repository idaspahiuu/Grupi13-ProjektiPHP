<?php

 $email="";
 $email1="";
 $error = array();


 $conn=mysqli_connect("localhost", "root", "", "users");
if(!$conn)
{
	die("Konektimi ka deshtuar!". mysqli_connect_error());

}

if(isset($_POST['Delete']))
{
	$email=$_POST['email'];
	$email1=$_POST['email1'];

	if(empty($email))
	{
		array_push($error, "Email is required!");

	}
	if(empty($email1))
	{
		array_push($error, "Confirmation is required!");
		
	}
	if($email != $email1)
	{
		array_push($error, "Emails do not match!");
	}

	if(count($error)==0)
	{
		$query = "SELECT * FROM myusers WHERE email = '".$email."' ";
		if(mysqli_query($conn, $query))
		{
			$sql = "DELETE FROM myusers WHERE email='".$email."' ";
			if(mysqli_num_rows(mysqli_query($conn, $query)) > 0)
			{
				if (mysqli_query($conn, $sql))
				{	
					echo "Account deleted successfully!<br>";
					echo "We hope you will come back again :)";
					echo '<a href="https://www.google.com/">Leave this page</a>';
				}	
			}
			else
			{
				echo "Failed to delete account!<br>";
				echo '<a href="LogIn.php">Go back</a>';
			}
		}
	}
}

?>