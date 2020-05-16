<?php

if(isset($_POST['Submit']))
{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$body=$_POST['body'];

		$header = "From: ".$name."\n"."Email: ".$email."\n"."Subject: ".$subject."\n";
		
		if(mail('spahiuida5@gmail.com', $subject, $body, $header))
		{
			echo "Thank you ".$name." for your feedback!";
		}
		else{
			echo "Email was not sent!";
		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
	<p>
        <a style="text-decoration: none;text-shadow: 3px; color: #483D8B ; font-weight: bold;" href="Homepage.php"><i class="fa fa-arrow-circle-left" style="font-size:24px; color:#483D8B; text-shadow: 3px;"></i> Homepage</a>
    
    </p>

<h2>Contact us</h2>

<div class="container">
  <form action="Contact.php" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="subject" name="subject" placeholder="Subject..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Email</label>
    </div>
    <div class="col-75">
     <input type="text" id="email" name="email" placeholder="Your email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="body" name="body" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

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