<?php
$username="";
$email="";
$Password="";
$Password1="";
$error = array();

$conn=mysqli_connect("localhost", "root", "", "users");
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
if(empty($_SESSION))
	session_start();

	if(isset($_POST['register']))
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$Password = $_POST['Password'];
		$Password1 = $_POST['Password1'];	


	if(empty($username))
	{
		array_push($error, "Username is required!");
	}
	else if(!preg_match("/^[a-zA-Z ]*$/",$username)) {
      array_push($error, "Only letters and white space allowed in username!");
	}

	if(empty($email))
	{
		array_push($error, "Email is required!");
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	array_push($error, "Invalid email format!");
    }
	
	if(empty($Password))
	{
		array_push($error, "Password is required!");
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
		$password_1 = md5($Password);
		$sql = "INSERT INTO myusers (username, email, password) VALUES ('$username', '$email', '$password_1')";

		$sql1 ="SELECT ID FROM myusers WHERE email= '".$email."' ";

			$p = mysqli_query($conn, $sql1);	
			$num = mysqli_num_rows($p);
    		if($num > 1)
    		{

	    		array_push($error, "This email is already used!");
	    	}
    		else
    		 {
    		 	$conn->query($sql);
    		    $_SESSION['valid_user'] = $email;
    		    if(isset($_SESSION['valid_user']))
				    {
				    	if(file_exists("homepage.php"))
				        {
						  $file = fopen("homepage.php", "r");
						} 
						else
						{
						  die("Error: The file does not exist.");
						}
					 }

    			
    		}

	

	}
	
}
 $conn->close();


?>