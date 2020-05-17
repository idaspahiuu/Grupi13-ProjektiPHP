<?php
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['about']))
{  
	$teksti1 = trim($_POST['fname']) . " ";
	$teksti2 = trim($_POST['lname']) . " ";
	$teksti3 = trim($_POST['about']) . " ";
	$filename = "info.txt"; 
	$file = fopen($filename, "w" );
	try{
		if($file == false){
			echo "Error in opening new file";
			throw new Exception();
		}
		else{
			fwrite( $file, $teksti1);
			fwrite( $file, $teksti2);
			fwrite( $file, $teksti3);
			fclose( $file );
		}
	}
	catch(Exception $ex){
		echo "Ky eshte gabimi: ".$ex ."<br>";
	}
	finally{
		
	}
}
?>
<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Homepage</title>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
body{
  background-color: #8B008B;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.dropbtn {
  background-color: #8B008B;
  color: white;
  padding: 16px;
  font-size: 24px;
  border: none;
  cursor: pointer;

}

.dropbtn:hover, .dropbtn:focus {
  background-color: #9932CC;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #4a4141;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #f1f1f1;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>
<nav id="main">
  	<img class="logo"src="img/ida1.png">
	<ul class="nav-links">
		<li class="active">
			<a  href="homepage.php">Home</a>
		</li>
		<li>
			<a href="store.html">Store</a>
		</li>
		<li>
			<a href="links.html">Video</a>
		</li>
	</ul> 
  <div class="dropdown">
  <button onclick="myFunction1()" class="dropbtn">&#9776;</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="update.php">Change password</a>
    <a href="delete.php">Delete account</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
</nav>
<p>
  <br>
  "Children are great imitators, so give them something great to imitate."
</p>
<br>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="img/ida1.jpg">
  <div class="text" >Learn the alphabet with us!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="img/ida2.jpg">
  <div  class="text">Animals, fruit, vegetables...</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/ida3.jpg">
  <div  class="text">Objects...</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/ida4.jpg">
  <div  class="text">Words...</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<br>

<div style="border:solid 3px #FAEBD7; border-radius: 4px; background-image: url('img/i.jpg');background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
<table style="display: inline-block; float left; width:25%;">
  <tr>
    <th>About abcLearning</th>
    <tr >s
      <td ><iframe class="photo" src="https://www.youtube.com/embed/DCWv-Zu-M7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        AbcLearning is a global education initiative of Age of Learning
        Inc. <br>Our goal is to help children build a strong
         foundation for future academic success by providing 
         a comprehensive and engaging online curriculum 
         to greatly assist early learners to succeed in pre-k, kindergarten, and early
          elementary school program ...
  <br>
<br><a style="text-decoration: none; color:purple;background-color:#FFB6C1;border: 1px groove transparent; border-radius: 5px;" href="aboutus.html"> Read more about us</a></td>
    </tr>

</table>

<table style="display: inline-block; width:35%;">
  <tr>
    <th>Why is our page helpful</th>
    <tr >
      <td ><img class="photo1" src="img/ida6.jpg">
      Children can learn here the basic things like the alphabet.</td>
    </tr> <tr >
      <td ><img class="photo1" src="img/ida8.jpg">
      They can also learn about animals!</td>
    </tr>
     <tr >
      <td ><img class="photo1" src="img/ida9.jpg">
      Fruit and vegetable are an important part of our life!</td>
    </tr>
     <tr >
      <td ><img class="photo1" src="img/ida10.jpg">
      Learn the objects with us! 
    <a style="text-decoration: none; color:purple;background-color:#FFB6C1;border: 1px groove transparent; border-radius: 5px;" href="services.php"> View all of our services</a></td>
    </tr>

</table>
<table style="display: inline-block; float right; column-span: 3;">
  <tr>
    <th>Reviews<br>
      <img style="width:200px; height:100px;" src="img/1.png"></th>
   <tr >
      <td >
        <div style="border:solid 1px; border-radius: 8px; padding: 10px">
        <div id="poll">
<h3>Do you like our website?</h3>
<form>
Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>
</div>
      </td>

  <tr>
    

    <td><div style="border:1px #483D8B; font-weight: bold; border-radius: 10px;  background-color:#F0F8FF; padding:6px; color: #483D8B"><a  href="rate.php"><img style="width: 30px; height: 30px;" src="img/star2.png"></a>
      <a style="text-decoration: none;href="rate.php">Check this and rate us!</a>
    </div>
    </td>
    
  </tr>

</tr>
<tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>

</table>
<table style="display: inline-block;">
  <tr>
    <td>
      <img style="width:150px;" src="img/123.png">
    </td>
  </tr>
</table>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


</body>
<footer>

  <table style="display: inline-block; width:25%; margin-bottom: 60px;">
  <tr>
    <th class="p1">Details</th>
    <tr >
      <td class="p2"> 
            Contact Master<br>
            Tel: +38349551044<br>
            Email:<a style="color:  #6A5ACD; font-weight: bold" href="abcLearning@gmail.com"> abcLearning@gmail.com</a> </td>
    </tr> 
    <tr >
      <td class="p2"> Hours of service<br>
            Monday-Friday:8am-6pm<br>
            Saturday:10am-4pm</td>
    </tr>
    <tr><td></br>
    	</br>
    	</br>
    </br>
    <button style="font-size:15px; color: #00acee; border:solid 1px white; background-color: white; border-radius: 5px;"> <i class="fa fa-twitter"></i><a style="text-decoration: none; font-weight: bold; color: #00acee" href="api.php">Check our tweets</a></button>
<br>
</td></tr>
</table>




<table style="display: inline-block; width:25%; margin-bottom: 20px;">
  <tr>
    <th class="p1">You can also find us on</th>
    <tr >
      <td class="p2"><a style="color:  white; text-decoration: none; font-weight: bold;" href="https://www.facebook.com/kidsacademyks/"><img class="photo3" src="img/facebook-logo.png" alt="Facebook"> Facebook</a>
      </td>
    </tr>
     <tr >
      <td class="p2">
      <a style="color: white; text-decoration: none; font-weight: bold;" href="https://instagram.com/twolittleducklings?igshid=8nwi38b8b0ld"><img class="photo3" src="img/instagram.png"> Instagram</a></td>
    </tr>
     <tr >
      <td class="p2"><a style="color: white; text-decoration: none; font-weight: bold;" href="https://twitter.com/kidsforpeace?lang=en"><img class="photo3" src="img/twitter1.png">
       Twitter</a></td>
    </tr>
     <tr >
      <td class="p2" ><a style="color: white; text-decoration: none; font-weight: bold;"  href="https://www.tumblr.com/tagged/coloring-pages-for-kids"><img class="photo3" src="img/tumblr.png">
       Tumblr</a></td>
    </tr>
    <tr><td></br>
    	</br>
    	</br>
    </br>
<br>
</td></tr>
    </table>



    <table style="display: inline-block; width: 30%; margin-bottom: auto;" >
      <tr>
        <th class="p1">More</th>

        <td class="p2">
         If you have any critics,
         suggestion or recommendation
         let us know by emailing us, 
         or contacting us in other 
         social media. We always welcome
         creative ideas. 
         Also if you are interested on 
         working with us, let us know by
         sending your CV<span id="dots">...</span><span id="more">, and explain
         why would you like to do this job.
         Remember that being creative 
         is very important.
         We have over 50 employees but 
         we're always searching for 
         new creative minds. You can be one of them.
     </br>
     </br>
     </br>
     </br>
     </br>
     </br>
 </br>






       </span>
       <button onclick="myFunction()" id="myBtn">Read more>></button>
        </td>
      </tr>
      
    </table>
<table style="display: inline-block;">
  <tr>
    <td><div class="p1">About You</div>
      <form enctype='multipart/form-data' method='post'>
        <br>
        Name: <br>
        <input style="width:170px; background-color: pink;" type="text" name="fname" placeholder="First name" required><br>
        Last Name: <br>
        <input style="width:170px; background-color: pink;" type="text" name="lname" placeholder="Last name" required><br>
        Write something about yourself:<br>
         <input style="width:170px; height: 100px; background-color: pink;" type="text" name="about" placeholder="Write here" required><br>
         <input style="width: 100px; float: right;" type="submit" value="Submit">


      
        <br>
        
      </form>
    </td>
  </tr>
  
</table>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>

<script type="text/javascript">
var currentTime = new Date().getHours();
if (7 <= currentTime && currentTime < 20) {
    if (document.body) {
        document.body.style.backgroundImage = "url('morningg.jpg')";
        
    }
}
else {
    if (document.body) {
        document.body.style.backgroundImage = "url('night.jpg')";
    }
}

</script>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more>>"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "<<Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</footer>
</html>