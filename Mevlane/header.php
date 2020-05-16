<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Online Shopping</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <style>
        #navigation {
          background: #FF4E50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #blanchedalmond, #blanchedalmond);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #blanchedalmond, #blanchedalmond); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          
        }
        #header {
  
            background: #blanchedalmond;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #blanchedalmond, #blanchedalmond);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #blanchedalmond, #blanchedalmond); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
        }
        #top-header {
              
  
            background: #870000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #blanchedalmond, #blanchedalmond);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #blanchedalmond, #blanchedalmond); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #blanchedalmond;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #blanchedalmond, #blanchedalmond);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #blanchedalmond, #blanchedalmond); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #blanchedalmond;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #blanchedalmond, #blanchedalmond);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #blanchedalmond, #blanchedalmond); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          }
        .footer-links li a {
          color: #blanchedalmond;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 5, 0.14), 0 6px 30px 5px rgba(0, 0, 8, 0.12), 0 8px 10px -5px rgba(45, 6, 30, 0.2);

        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
    </style>

    </head>
	<body>
		<header>
			<div id="top-header">
		<div class="container">
		<ul class="header-links pull-right">
	  <li><a href="#"><i class="fa fa-inr"></i> INR</a></li>
	  <li>
	 <?php
         if(isset($_SESSION["uid"])){
         $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
         $query = mysqli_query($con,$sql);
         $row=mysqli_fetch_array($query);
            echo '
         <div class="dropdownn">
         <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
         <div class="dropdownn-content">
         <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
         <a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
         </div>
         </div>'; }
		 else{ 
          echo '
        <div class="dropdownn">
        <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
        <div class="dropdownn-content">
         <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
         <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
        </div>
        </div>';  }
      ?>
     </li>				
		</ul>
		</div>
			</div>