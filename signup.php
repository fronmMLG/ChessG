<?php 
session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}else
		{
			echo "Error";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="singup.css"></head>
<body>
<div class="chessgif"> <img src="chessgif.gif" alt="background-gif"> </div>
<div class="fullscreen-bg"></div>
<div id="login-text">Register Now</div>
<div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
<div id="login-text2">Signup</div><div id="box">	
		<form method="post">
			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>
			<div class="click-text"><a href="login.php">Click to Login</a><br><br></div>
		</form></div>
</body>
</html>