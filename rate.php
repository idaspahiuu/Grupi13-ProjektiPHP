<?php
$total="";
$total_p1_rating="";
$total_p2_rating="";
$total_p3_rating="";

  $host="localhost";
  $username="root";
  $password="";
  $databasename="users";


 $conn=mysqli_connect($host,$username,$password, $databasename);
 /*
$sql="CREATE TABLE `rate` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `page` int(11) NOT NULL,
 `page1` int(11) NOT NULL,
 `page2` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1";

 mysqli_query($conn, $sql);*/


if(isset($_POST['submit_rating']))
{
 	$php_rating=$_POST['phprating'];
 	$ph_rating=$_POST['phrating'];
 	$p_rating=$_POST['prating'];
  
  	$insert=mysqli_query($conn, "INSERT INTO rate (id, page, page1, page2) VALUES('','$php_rating','$ph_rating','$p_rating')");
 }

  	$page="";
  	$page1="";
  	$page2="";

  	$select_rating=mysqli_query($conn , "SELECT page,page1,page2 FROM rate");
    $total=mysqli_num_rows($select_rating);

    while($row= $select_rating -> fetch_array(MYSQLI_NUM))
		    {
			  $p1par[]=$page;
			  $p2par[]=$page1;
			  $p3par[]=$page2;
			  
		    }
		    $total_p1_rating=(array_sum($p1par)/$total);
		    $total_p2_rating=(array_sum($p2par)/$total);
		    $total_p3_rating=(array_sum($p3par)/$total);

?>
<!DOCTYPE html>
<html>
<head>

<style type="text/css">
body
{
	background-image: url('images.jpg');
	font-family:helvetica;
	text-align:center;
}
h1
{
	margin-top:20px;
	font-size:40px;
	color:#E6E6E6;
}
#total_votes
{
	font-size:30px;
	color:#808080;
	font-weight:bold;
}
.div
{
	border:1px solid #E6E6E6;
	clear:both;
	margin-top:20px;
	height:100px;
	width:400px;
	padding:10px;
	margin-left:575px;
	border-radius:3px;
	background-color: plum;
}
.div p
{
	margin:0px;
	font-size:20px;
	text-align:left;
	color: black;
	font-weight: bold;
}
img
{
	margin-top:10px;
	width:50px;
	height:50px;
	float:left;
	
}
input[type="submit"]
{
	border:none;
	background:none;
	background-color:#585858;
	width:100px;
	height:50px;
	color:white;
	border-radius:3px;
	font-size:17px;
	margin-top:20px;
}
</style>
<link rel="stylesheet" type="text/css" href="rating_style.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").innerHTML=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="img/star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="img/star1.png";
      }
   }

</script>
  
</head>

<body>
	<p>
        <a style="text-decoration: none;text-shadow: 3px; color: #483D8B ; font-weight: bold;" href="Homepage.php"><i class="fa fa-arrow-circle-left" style="font-size:24px; color:#483D8B; text-shadow: 3px;"></i> Homepage</a>
    
    </p>

<form method="post" action="rate.php">
  <p id="total_votes">Total Votes:<?php echo $total; ?></p>
  <div class="div">
	  <p>Our services</p>
	  <input type="hidden" id="php1_hidden" value="1">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="php1" class="php">
	  <input type="hidden" id="php2_hidden" value="2">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="php2" class="php">
	  <input type="hidden" id="php3_hidden" value="3">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="php3" class="php">
	  <input type="hidden" id="php4_hidden" value="4">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="php4" class="php">
	  <input type="hidden" id="php5_hidden" value="5">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="php5" class="php">
	</div>

	<div class="div">
	  <p>Our store</p>
	  <input type="hidden" id="ph1_hidden" value="1">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="ph1" class="ph">
	  <input type="hidden" id="ph2_hidden" value="2">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="ph2" class="ph">
	  <input type="hidden" id="ph3_hidden" value="3">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="ph3" class="ph">
	  <input type="hidden" id="ph4_hidden" value="4">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="ph4" class="ph">
	  <input type="hidden" id="ph5_hidden" value="5">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="ph5" class="ph">
	</div>
	
	<div class="div">
	  <p>Gaming</p>
	  <input type="hidden" id="p1_hidden" value="1">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="p1" class="p">
	  <input type="hidden" id="p2_hidden" value="2">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="p2" class="p">
	  <input type="hidden" id="p3_hidden" value="3">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="p3" class="p">
	  <input type="hidden" id="p4_hidden" value="4">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="p4" class="p">
	  <input type="hidden" id="p5_hidden" value="5">
	  <img src="img/star1.png" onmouseover="change(this.id);" id="p5" class="p">
	</div>

	  <input type="hidden" name="phprating" id="phprating" value="0">
	  <input type="hidden" name="phrating" id="phrating" value="0">
	  <input type="hidden" name="prating" id="prating" value="0">

  	  <input type="submit" value="Submit" name="submit_rating">
	    


  

</form> 

</body>
</html>