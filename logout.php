<?php 
session_start();
$loggedin_user = $_SESSION['email'];
unset($_SESSION['email']);
session_destroy();
$cookie_name = 'bgColor';
unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
$res = setcookie($cookie_name, '', time() - 3600);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<p>
        <a style="text-decoration: none;text-shadow: 3px; color: #483D8B ; font-weight: bold;" href="home.php"><i class="fa fa-arrow-circle-left" style="font-size:24px; color:#483D8B; text-shadow: 3px;"></i> Go back</a>
    
    </p>

 <?php
    if ($loggedin_user)
    {
        echo '<p style="border: solid 1px plum; border-radius:8px; padding:10px; width:50%; margin:300px; text-align:center; background-color:#FFFFF0">You have been logged out.</p>';
    }
    else
    {
        // Nese nuk eshte i çkyqur përdoruesi, por ka arritur deri këtu përmes një URL
        echo '<p style="border: solid 1px plum; border-radius:8px; padding:10px; width:50%; margin:300px; text-align:center;  background-color:#FFFFF0;">You were not logged in, and so have not been logged out.</p>';
    }
    ?>
    

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
			<td color="#DCDCDC">&#9400; ABCLearn 2020</td>

		</tr>
	</table>
</footer>
</html>
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
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</html>
