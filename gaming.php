<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			 background-color: #8B008B;
			  height: 100%;
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
			}
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

        nav {
        border-bottom: 2px groove #FAEBD7;
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #FAKED7;
        font-family: Comic Sans MS;
    }
	 .nav-links {
        list-style: none;
        display: inline-flex;
        padding: 0px;
        justify-content: space-around;
        width: 30%;
        float: right;
    }
	 .nav-links a {
            position: relative;
            padding: 130%;
            display: block;
            color: #FAEBD7;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            letter-spacing: 2px;
            float: right;
            align-items: center;
    }
	li a:hover {
        background-color: #D8BFD8;
    }
    ul li.active a
	{
	background:plum;
	color:#FAEBD7 ;
	}	
</style>
	<title>Game</title>
</head>
<body>
	<nav id="main" style="background-color: orchid ">
            <img class="logo" src="img/ida1.png">
            <ul class="nav-links">
                <li>
                    <a href="homepage.php">Home</a>
                </li>
                <li >
                    <a href="store.php">Store</a>
                </li>
                <li class="active">
                    <a  href="gaming.php">Game</a>
                </li>
            </ul>

        </nav>
	
<div>
	<h2>Play a game</h2>
	<br>
	<table style="margin-left: 100px;padding: 20px;" cellspacing="5">
		<tr><td><img width="300px" height="190px" src="gaming/t1.png"><br><a  style="text-decoration: none; color: white; font-weight: bold;font-family: Sans, cursive; border: 1px solid white; border-radius: 6px; background-color: plum; padding: 4px; " href="gaming/Tictac/index.php">Play TicTacToe</a></td>
			<td>	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;</td>
			<td><img width="200px" height="190px" src="gaming/hm.png"><br><a  style="text-decoration: none; color: white; font-weight: bold;font-family: Sans, cursive; border: 1px solid white; border-radius: 6px; background-color: plum; padding: 4px; " href="gaming/hangman/index.php">Play Hangman</a></td>
			<td>	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;		&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;</td>
			<td><img width="200px" height="190px" src="gaming/calculator.png"><br><a  style="text-decoration: none; color: white; font-weight: bold;font-family: Sans, cursive; border: 1px solid white; border-radius: 6px; background-color: plum; padding: 4px; " href="gaming/calc.php">Calculate</a></td></tr>
			
	</table>


</div>
</body>
<footer>
	<table align="right" width="80%" cellspacing="10px">
		<tr>
			<div class="link">
			<td ><a style="text-decoration: none; padding: 10px; color: white;" href="#">ABOUT</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: white;" href="#">HELP</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: white;" href="#">PRIVACY</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: white;" href="#">LOCATIONS</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: white;" href="#">LANGUAGE</a></td>
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
        document.body.style.backgroundImage = "url('img/morningg.jpg')";
        
    }
}
else {
    if (document.body) {
        document.body.style.backgroundImage = "url('img/night.jpg')";
    }
}

</script>
</html>