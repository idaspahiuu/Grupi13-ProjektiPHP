<?php 
session_start();
$connect = mysqli_connect("localhost", "root","", "store" );

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_image'		=>	$_POST["image"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Produkti eshte i shtuar!")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_image'		=>	$_POST["image"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Produkti u fshi")</script>';
				echo '<script>window.location="store.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8"/>
		<title>STORE</title>
		<script src="store.js" async></script>
	</head>
	<style>
	  * {
        margin-left: auto;
        margin-right: auto;
        padding: 0px;
        box-sizing: border-box;
    }
	  body {
        background-color: #8B008B;
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
	ul li.active a {
        background: #8B008B;
        color: #FAEBD7;
    }
	.logo{
        height: 140px;
    }
	
.primary-btn {
  display: inline-block;
  padding: 12px 30px;
  background-color: #D10024;
  border: none;
  border-radius: 40px;
  color: #FFF;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.primary-btn:hover, .primary-btn:focus {
  opacity: 0.9;
  color: #FFF;
}
.wrap-login100 {
    width: 50px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
}
.p-r-55 {
    padding-right: 55px;
}
.p-l-55 {
    padding-left: 55px;
}
.p-b-54 {
    padding-bottom: 54px;
}
.p-t-65 {
    padding-top: 65px;
}
.login100-form {
    width: 100%;
}
.login100-form-title {
    display: block;
    font-family: Poppins-Bold;
    font-size: 39px;
    color: #333333;
    line-height: 1.2;
    text-align: center;
}
.p-b-49 {
    padding-bottom: 49px;
}
.validate-input {
    position: relative;
}
.wrap-input100 {
    width: 100%;
    position: relative;
    border-bottom: 2px solid #d9d9d9;
}
	</style>
	<body>
	<nav id="main">
            <img class="logo" src="mevla.jpg">
            <ul class="nav-links">
                <li>
                    <a href="homepage.html">Home</a>
                </li>
                <li>
                    <a class="active" href="store.html">Store</a>
                </li>
                <li>
                    <a href="links.html">Video</a>
                </li>
            </ul>
        </nav>
		<br />
				<div style = "text-align:center">
			    <h1 style = "color : blanchedalmond">SHOP HERE!</h1>
			    <h2 style = "color : blanchedalmond">Now you can buy our products online</h2>
				<br/>
				<?php 
               include "logini.php";
               include "lform.php";
			   include "rform.php";
			   include"register.php";
                ?>
				
		<div class="container">
			<br />
			<br />
			<br />
			<?php
				$query = "SELECT * FROM produktet ORDER BY item_id ASC";
				$result = mysqli_query($connect, $query);
				if(!$result)
	            {
	            die('Can not add items to the table: ' . mysqli_error($connect));
	            }
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="store.php?action = add & id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						
						<img src="images/<?php echo $row["item_image"]; ?>" class="img-responsive"/><br/>

						<h4 class="text-info"><?php echo $row["item_name"]; ?></h4>

						<h4 class="text-danger"><?php echo $row["item_price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="ADD TO CART" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<div class="table-responsive">
				<table class="table table-bordered">
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo $values["item_image"]; ?></td>
						<td><?php echo $values["item_price"]; ?></td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="store.php?action = delete & id=<?php echo $values["item_id"]; ?>"><span class = "text-danger">REMOVE</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"> <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>	
				</table>
			</div>
		</div>
	</div>
	<br />
		  <form>
          <input class="input" type="email" placeholder="Enter Your Email">
	      <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
		  </form>
	</body>
	<script type="text/javascript">
    var currentTime = new Date().getHours();
    if (7 <= currentTime && currentTime < 20) {
        if (document.body) {
            document.body.background = "https://static.collectui.com/shots/3556242/dj-lubelski-large";
        }
    }
    else {
        if (document.body) {
            document.body.background = "https://images.pexels.com/photos/956999/milky-way-starry-sky-night-sky-star-956999.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500";
        }
    }
</script>
</html>
<?php
include "footer.php";
?>