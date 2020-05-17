<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	h2{
			font-family: lucida handwriting;
			color: #FAEBD7;
			text-align: center;
        }
        div{
        		margin: 50px 15px 50px 60px;
				background-color: #483D8B;
				width: 90%;
				height:80%;
				border: 1px groove;
				border-color:transparent;
				border-radius: 5px;

        }
        p{
        	text-align: center;
        	color: antiquewhite;
        	font-family:Sans, cursive;
        	padding: 50px;

        }
         .logo{
		 	width: 150px;
		 	height: 160px;
		    overflow: hidden;
		    margin-top: 0px;
		    margin-bottom: -20px;
		    background-color: 
		}
		div{
        		margin: 50px 15px 50px 60px;
				background-color: orchid;
				width: 90%;
				height:80%;
				border: 1px groove;
				border-color:transparent;
				border-radius: 5px;

        }
</style>
<head>

	<title>
		Numbers
	</title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<div>
<?php

$num = array(1,3,2,8,5,7,4,6,10,12,15,11,13,16,14,17,19,18,20,23,21,22);
foreach ($num as $value) {
	echo "<font color=white font face='verdana' size='5pt'><p style='display:inline-block;'>".$value. " "."</p>";
}	
?>

</div>

<div>
	<form method="post" action="array.php" >
	<input style="font-weight:bold;margin-left:30px;border-radius: 5px; padding: 3px; background-color: #FFE4C4; color:#483D8B" type="submit" name="sort" id="sort" value="Sort numbers">
	</form>
	<?php

		if(isset($_POST['sort']))
		{
			$num = array(1,3,2,8,5,7,4,6,10,12,15,11,13,16,14,17,19,18,20,23,21,22);
			sort($num);
			$arrlength = count($num);
			for($x = 0; $x < $arrlength; $x++)
			{ 
			  echo "<font color=white font face='verdana' size='5pt'><p style='display:inline-block;'>".$num[$x]." "."</p>";
			}
		}
	?>
</div>
	<div>
		<form method="post" action="array.php" >
	<input style="font-weight:bold;margin-left:30px;border-radius: 5px; padding: 3px; background-color: #FFE4C4; color:#483D8B" type="submit" name="sum" id="sum" value="Sum">
	</form>
	<?php

		if(isset($_POST['sum']))
		{
			$num = array(1,3,2,8,5,7,4,6,10,12,15,11,13,16,14,17,19,18,20,23,21,22);
			  echo "<font color=white font face='verdana' size='5pt'><p align='center'>"."Sum of the previous numbers: ".array_sum($num)." "."</p>";
			
		}
	?>
	</div>
	<div>
		<form method="post" action="array.php"> 
			<label style="margin-left: 20px;">Tell us more about what you like</label>
			<br>
			<div style="margin-left:10px;">
			<input style="border-radius: 5px; padding: 3px" type="text" name="color" placeholder="Favorite color">
			<input style="border-radius: 5px; padding: 3px" type="text" name="animal" placeholder="Favorite animal">
			<input style="border-radius: 5px; padding: 3px" type="text" name="fruit" placeholder="Favorite fruit">
			<input style="border-radius: 5px; padding: 3px" type="text" name="vegetable" placeholder="Favorite vegetable">

			<input style="font-weight:bold;margin-left:30px;border-radius: 5px; padding: 3px; background-color: #FFE4C4; color:#483D8B" type="submit" name="click" id="click" value="Confirm">
			</div>
		</form>
		<?php
			if(isset($_POST['click']))		
			{
				$color=$_POST['color'];
				$animal=$_POST['animal'];
				$fruit=$_POST['fruit'];
				$vegetable=$_POST['vegetable'];

				$_SESSION['col']=$color;
				$_SESSION['anim']=$animal;
				$_SESSION['fr']=$fruit;
				$_SESSION['veg']=$vegetable;



				echo "<p style='margin-left:10px;'>Your favorite color is "."<font color =".$_SESSION['col'].">".$_SESSION['col']."</font></p>";
				echo "<p style='margin-left:10px;'>Your favorite animal is ".$_SESSION['anim']."&nbsp;"."&nbsp;"."<img width='100px' height='100px' src='animals/".$_SESSION['anim'].".jpg'></p>";
				echo "<p style='margin-left:10px;'>Your favorite fruit is ".$_SESSION['fr']."&nbsp;"."&nbsp;"."<img width='100px' height='100px' src='fv/".$_SESSION['fr'].".jpg'> </p>";
				echo "<p style='margin-left:10px;'>Your favorite vegetable is ".$_SESSION['veg']."&nbsp;"."&nbsp;"."<img width='100px' height='100px' src='fv/".$_SESSION['veg'].".jpg'> </p>";

			}

		?>
	</div>
</body>


</html>