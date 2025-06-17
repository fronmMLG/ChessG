<?php
session_start();
include("connection.php");
include("functions.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lichess_username = $_POST['lichess_username'];
    $user_id = $_SESSION['user_id'];
    $query = "UPDATE users SET lichess_username = ? WHERE user_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("si", $lichess_username, $user_id);
    if ($stmt->execute()) {
        header("Location: profile.php");
        exit; 
    } else {
        echo "Binding error!";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ChessG</title>
      <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="lizhen.css">
      <link rel="stylesheet" href="link-lichess.css">
  </head>
  <body>
  <div id="top"></div>
<div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
	<div class="logout-button"><a href="index.php">Home</a></div>

    <div class="box-login">
        <div class="fullscreen-bg"></div>
    <div id="box">
<form method="post">
    <label>Enter your nickname on Lichess</label>
    <input type="text" name="lichess_username" required>
    <button type="submit" class="buttun-link">Link</button>
</form>
</div>
</body>
</html>