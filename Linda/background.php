<?php
if (isset($_POST['submitted'])){
	
	$newbgColor=$_POST['bgColor'];
	
	#set cookies
	setcookie("bgColor",$newbgColor,time()+3600);
}

#ne rast se shfrytezuesi vjen per here te pare dhe cookies nuk jane vendosur 
if ((!isset($_COOKIE['bgColor']))){
	$bgColor = "White";
}
#nese cookie-t jane vendousr, atehere perdori ato cookie
else{
	$bgColor = $_COOKIE['bgColor'];
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="<?php echo $bgColor ?>"><div>
	<img class="logo"src="ida1.png">
	<table>
	<tr>
		<td>
		<p>Change background color:</p>
		<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
			<select name=bgColor>
				<option value ="pink">Pink</option>
				<option value ="lightblue">Light Blue</option>
				<option value ="lightgreen">Light Green</option>
			</select> 
			<input type="submit" name="submitted" value="Remember the value!">
	</td>
	</tr>
	</table>
</div></body>
</html>