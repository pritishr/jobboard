<!DOCTYPE html>
<html>
<head>
	<style>
		body {background-color:yellow}
		h1   {color:blue}
		p    {color:green}
		.sign-up, .login{
			height: 400px; width: 400px;
			background-color: white;
		}
		div {
			display: inline-block;
		}
		.login {
			position: relative; top: -39px;
		}
		.wrapper {
			margin: 150px;
		}
	</style>
	<title>login page</title>
</head>

<body>
	<div class="wrapper">

<?php

if(isset($_GET['error']) && $_GET['error']  == "confirmfail" )
{
	echo "<h1 style = 'text-align: center'> Password Missmatch </h1>"; 
}
?>
<?php
if(isset($_GET['error']) && $_GET['error']  == "invalid_login" )
{
	echo "<h1 style = 'text-align: center'> invalidlogin </h1>"; 
}
?>
		<div class="sign-up">
			<form action="signup.php" method="post">
				<h1 style = "text-align: center"> SIGN UP </h1>
				<input type = "text" name = "username" placeholder="Username"><br><br>	
				<input type = "text" name = "password" placeholder="Password"><br><br>	
				<input type = "text" name = "confirmpassword" placeholder="Confirm Password"><br><br>
				<input type = "submit" value = "submit">
			</form>
		</div>

		<div class="login">
			<form action="checklogin.php" method="post">
			<h1 style = "text-align: center"> LOGIN </h1>
			 <input type = "text" name = "username" placeholder="Username"><br><br>	
			<input type = "text" name = "password" placeholder="Password"><br><br>
			<input type = "submit" value = "submit">
		</div>
	</div>
</form>
</body>
</html> 