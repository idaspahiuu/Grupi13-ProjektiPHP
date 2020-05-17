<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-color: lightblue;
		}
	</style>
    <meta charset="utf-8" />
    <title>Calculator</title>
	<link rel = "stylesheet" type = "text/css" href = "gaming.css">
</head>
<body>
	<h1 style="color: #483D8B; text-shadow:2px;">Calculator</h1>
<div class = "container">
<form>
	<div style="border:solid 1px aquamarine; font-family: Sans, cursiva; padding:100px; border-radius: 5px; background-color: aquamarine; color: white; font-weight: bold; width:200px; ">
<input style="border-radius: 5px; padding: 5px;" type = "text" name = "number1" placeholder = "Enter number 1"><br><br>
<input style="border-radius: 5px; padding: 5px;" type = "text" name = "number2" placeholder = "Enter number 2"><br><br>
<select style="border-radius: 5px; padding: 5px; name = "operator">
    <option>None</option>
	<option>Add</option>
	<option>Subtract</option>
	<option>Multiply</option>
	<option>Divide</option>
</select>
<br>
<br>
   <button style="border-radius: 5px; padding: 5px; type = "submit" name = "submit" value = "submit">Calculate</button>
   </div>
</form>
<br>
<p style="border:solid 1px aquamarine; font-family: Sans, cursiva; padding:3px; border-radius: 3px; background-color: aquamarine; color: white; font-weight: bold; width:120px; ">The result is: 

    <?php
      if(isset($_GET['submit'])){
		  $result1 = ($_GET['number1']);
		  $result2 = ($_GET['number2']);
		  $operator = ($_GET['operator']);
		  
		  switch($operator) {
			  case 'None' :
			  echo "You need to select an operator!";
			  break;
			  case 'Add' :
			  echo $result1 + $result2;
			  break;
			  case 'Subtract' :
			  echo $result1 - $result2;
			  break;
			  case 'Multiply' :
			  echo $result1 * $result2;
			  break;
			  case 'Divide' :
			  echo $result1 / $result2;
			  break;
		  }
	  }
    ?>
    </p>
</div>
</body>

</html>