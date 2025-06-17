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
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo "Error";
		}else
		{
			echo "Error";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="login.css">
	<title>Login</title>
</head>
<body>
	<div class="background-color">
<div class="chessgif"> <img src="chessgif.gif" alt="background-gif"> </div><div class="box-login">	
<div class="fullscreen-bg"></div>
<div id="login-text">Join Now</div>
<div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
<div id="login-text2">Login</div><div id="box"><form method="post">
			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Login"><br><br>
			<div class="click-text"><a href="signup.php">Click to Signup</a><br><br></div>
		</form></div></div></div>
</body>
</html>