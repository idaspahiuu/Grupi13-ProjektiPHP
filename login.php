<?php include('db1.php'); ?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="login.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<title>Log In</title>
</head>

<body>
	<table>
		<tr><td>
	<form method="post" action="db1.php">
		

		<fieldset style="width:400px; background-image: url(signup.jpg); opacity:0.9 ;border-width:1px; border-color: #483D8B; border-radius: 12px; margin:15%;" > <legend style="color: white; font-family:Lucida Handwriting; text-shadow: 3px 2px #483D8B;"><h2>Sign Up</h2></legend>
			<?php include('errors.php'); ?>
		<div class="input-icons">
		
		<i class="fa fa-envelope icon"></i> 
		<input class="input-field " type="text" name="email" placeholder="Email" id="email" value="<?php echo $email ?>"></br>

		<i class="fa fa-key icon" aria-hidden="true"></i>
		<input class="input-field " type="password" name="Password" id="Password" placeholder="Password"></br>

	</div>
		<button type="submit" id="register" name="register" style=" font-weight: bolder;">Log In</button></br></br>
		<a style="border:1px #483D8B; font-weight: bold; border-radius: 10px; text-decoration: none; background-color:#F0F8FF; padding:6px; color: #483D8B" href="Register.php"> Sign Up </a> &nbsp;<span style="color:#D3D3D3"> if you don't have an account.</span>

	</fieldset>
	</form>
</td>
<td></td>
<td></td>
<td><img src="welcome.png" style="padding:200px; align-content: left"></img></td>
	</tr>
	</table>

</body>

<script type="text/javascript">
var currentTime = new Date().getHours();
if (7 <= currentTime && currentTime < 20) {
    if (document.body) {
        document.body.style.backgroundImage = "url('images.jpg')";
    }
}
else {
    if (document.body) {
        document.body.style.background = "url('images.jpg')";
    }
}

</script>
</html>
