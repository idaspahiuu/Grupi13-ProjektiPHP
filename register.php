<!DOCTYPE html>
<html>
<?php include('php-sql\db.php');?>
<link rel="stylesheet" type="text/css" href="login.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<title>Log In</title>
</head>

<body>
	<table>
		<tr><td>
	<form method="post" action="Register.php">
		

		<fieldset style="width:400px; background-image: url(img/signup.jpg); opacity:0.9 ;border-width:1px; border-color: #483D8B; border-radius: 12px; margin:15%;" > <legend style="color: white; font-family:Lucida Handwriting; text-shadow: 3px 2px #483D8B;"><h2>Sign Up</h2></legend>
			<?php include('php-sql\errors.php'); ?>
		<div class="input-icons">

		<i class="fa fa-user icon"></i> 
		<input class="input-field " type="text" name="username" placeholder="Username" id="username" value="<?php echo $username ?>"></form></br>
		
		<i class="fa fa-envelope icon"></i> 
		<input class="input-field " type="text" name="email" placeholder="Email" id="email" value="<?php echo $email ?>"></br>

		<i class="fa fa-key icon" aria-hidden="true"></i>
		<input class="input-field " type="password" name="Password" id="Password" placeholder="Password"></br>

		<i class="fa fa-key icon" aria-hidden="true"></i>
		<input class="input-field " type="password" name="Password1" id="Password1"  placeholder="Confirm password"></br>
	</div>
		<button type="submit" id="register" name="register" style=" font-weight: bolder;">Sign Up</button></br></br>
		<a style="border:1px #483D8B; font-weight: bold; border-radius: 10px; text-decoration: none; background-color:#F0F8FF; padding:6px; color: #483D8B" href="LogIn.php"> Log In </a> &nbsp;<span style="color:#D3D3D3"> if you already have an account.</span>

	</fieldset>
	</form>
</td>
<td></td>
<td></td>
<td><img src="img/welcome.png" style="padding:200px; align-content: left"></img></td>
	</tr>
	</table>

</body>
<footer>
	<table align="right" width="80%" cellspacing="10px">
		<tr>
			<div class="link">
			<td ><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">ABOUT</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">HELP</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">PRIVACY</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">LOCATIONS</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">LANGUAGE</a></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td style="color:"#DCDCDC" ">&#9400; ABCLearn 2020</td>

		</tr>
	</table>
</footer>

<script type="text/javascript">
var currentTime = new Date().getHours();
if (7 <= currentTime && currentTime < 20) {
    if (document.body) {
        document.body.style.backgroundImage = "url('img/images.jpg')";
    }
}
else {
    if (document.body) {
        document.body.style.background = "url('img/images.jpg')";
    }
}

</script>
</html>