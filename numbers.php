<?php
include("background.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Numbers</title>
	<style>
		h2
		{
			font-family: lucida handwriting;
			color: pulm;
			text-align: center;
        }
        div
        {       background-image: url(numbers/number1.jpg);
        	    margin: 50px 15px 50px 60px;
				width: 90%;
				height:80%;
				border: 1px groove;
				border-color:transparent;
			}
		
        	
         .logo
         {
		 	width: 150px;
		 	height: 160px;
		    overflow: hidden;
		    margin-top: 0px;
		    margin-bottom: -20px;
		    box-shadow: none;
		    border: none;
		}
		 table{

        	width: 100%;
        	padding:50px;
        	padding-left: 150px;
          	text-align:center;
        	color: pink;
        	font-family:Sans, cursive;
        	font-size: 30px;
        	}
		img
		{
			border: 1px solid #ddd; 
			border-radius: 4px;  
		    padding: 5px; 
			width:170px;
			height:170px;
			box-shadow: 0px 0px 6px 3px darkorchid;
			margin-left: 15px;

		}
		img:hover
		 {
         box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }
        #main{
		 padding: 5px;
			background-color: darkorchid;
		}
	</style>
</head>
<body bgcolor="<?php echo $bgColor ?>"><div>
		<h2>Numbers</h2>
<table>
	<tr>
		<td><a target="_blank" href="numbers/1.jpg">
  <img src="numbers/1.jpg" alt="Number 1">
</a></td>
		<td><a target="_blank" href="numbers/2.jpg">
  <img src="numbers/2.jpg" alt="Number 2">
</a></td>
		<td><a target="_blank" href="numbers/3.jpg">
  <img src="numbers/3.jpg" alt="Number 3">
</a></td>
	</tr>
	<tr>
		<td><a target="_blank" href="numbers/4.jpg">
  <img src="numbers/4.jpg" alt="Number 4">
</a></td>
		<td><a target="_blank" href="numbers/5.jpg">
  <img src="numbers/5.jpg" alt="Number 5">
</a></td>
		<td><a target="_blank" href="numbers/6.jpg">
  <img src="numbers/6.jpg" alt="Number 6">
</a></td>
	</tr>

	<tr>
		<td><a target="_blank" href="numbers/7.jpg">
  <img src="numbers/7.jpg" alt="Number 7">
</a></td>
		<td><a target="_blank" href="numbers/8.jpg">
  <img src="numbers/8.jpg" alt="Number 8">
</a></td>
		<td><a target="_blank" href="numbers/9.jpg">
  <img src="numbers/9.jpg" alt="Number 9">
</a></td>
	</tr>
</table>

</div>
</body>
</html>