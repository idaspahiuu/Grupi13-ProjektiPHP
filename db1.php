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

		array_push($error, "Password is required!");
	}
	if(strlen($password)<8)
	{
		array_push($error, "Password must be at least 8 characters in length!");
	}

	$query = "select * from myusers where email = ? and password = md5(?) ";
	$stmt = mysqli_prepare($conn, $query);
	mysqli_stmt_bind_param($stmt, "ss",$email, $password);
	mysqli_stmt_execute($stmt);
	$rezultati = mysqli_stmt_get_result($stmt);

	if(!$rezultati)
	{
		array_push($error, "Action denied!");
	}

	 elseif(mysqli_num_rows($rezultati)>0)
	{
        // Nëse ekziston shfrytëzuesi në db (tabelën authorized_users)
        $_SESSION['valid_user'] = $email;

    }

    elseif(isset($_SESSION['valid_user']))
    {
    	header('location: homepage.php');
    }
    else
    {
   		array_push($error, "Wrong email or password!");
    }


    
}
$conn->close();
?>

