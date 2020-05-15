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
	<title>5 Little Things That Kids Love</title>
	<style>
		h2{
			font-family: lucida handwriting;
			color: #FAEBD7;
			text-align: center;
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
	</style>
</head>
<body bgcolor="<?php echo $bgColor ?>"><div>
	<img class="logo"src="img/ida1.png">
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
	<h2>5 Little Things That Kids Love</h2>
	<p><h2> Undivided attention</h2></p>
<p>
		One of the things children love the most is, getting full attention. But, isn’t it true with we adults as well?

		So, put that phone away and meet your child eye to eye. Really pay attention to them, and nothing else, and they will shower you with the purest love in the world.



		<p><h2> Their world</h2></p>
		<p>
		It seems like one of the things all kids is living in a continual world of make-believe.

		As a parent, you have to be responsible and level-headed. But, once in a while, step outside of the adult zone and act more child-like.
		
		One excellent way to do this is to join their make-believe world. Who cares if Legos aren’t actually alive? Just go with it and have fun!


		<p><h2>Creative pursuits</h2></p>
		<p>
		Kids love to create, even if what they are painting or gluing together isn’t a masterpiece. The important part is the process.

		This is one of the most important lessons to be learned, as we, grown-ups are always more result-oriented. And, amidst the race of achieving success, we forget enjoying the process and living life!
		

		<p><h2>Dance parties</h2></p>
		<p>
			If you are ruminating over what do kids love, dancing is what they love!

			Dancing allows them to express themselves freely, and also, it is one of the best ways to exercise.
			
			So, get a bunch of kid dance tunes going and let loose! Show your kids some of your own dance moves.

		<p><h2>Cuddles</h2></p>
		<p>
			Cuddling is one of the things that all kids love.

			Kids need physical touch, and nothing is better than cuddles.
			
			Some kids ask for them, and others act testy until you realize that they need a little love. So, when you realize that your kids are unreasonably cranky, now you know what needs to be done!

			<p><h2>Best friends</h2></p>
		<p>
			Kids love their parents, and nothing can alter this fact. But,  at the same time, it is also true that they need people of their own age who love and accept them.

So, always encourage and help them foster friendships with other great kids.
</p>


</div></body>
</html>
