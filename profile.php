<?php 
session_start();
	include("connection.php");
	include("functions.php");

    $user_data = check_login($con);

    $lichess_data = get_lichess_data($con, $_SESSION['user_id']);

	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ChessG</title>
      <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="profile.css">
  </head>
  <body>
  <div id="top"></div>
<div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
	<div class="logout-button"><a href="index.php">Home</a></div>
	<br><span class="username"><?php echo htmlspecialchars($user_data['user_name']); ?></span><br>

    <br><span class="username2"><?php echo htmlspecialchars($user_data['user_name']); ?></span><br>

    <div class="profile">
    <?php if (isset($lichess_data['error'])): ?>
    <p><?php echo $lichess_data['error']; ?></p>
    <a href="link_lichess.php">Link Lichess account</a>
<?php else: ?>
    <div class="card">

    <div class="lichess-nick"><p><strong>Lichess nickname:</strong> <?php echo $lichess_data['username']; ?></p></div>
    <div class="content">
    <div class="left">
    <div class="blitz-icon"><p><img src="blitz-icon.png" alt="blitz-icon" width="100" height="100"><strong><a style="margin-left: 10px;">BLITZ elo:</a></strong> <?php echo $lichess_data['blitz_rating']; ?></p>
    <p>Games (Blitz): <strong><?= htmlspecialchars($lichess_data['blitz_games']) ?></strong></p>

</div>
    <div class="rapid-icon"><p><img src="rapid-icon.png" alt="rapid-icon" width="100" height="100"><strong><a style="margin-left: 10px;">RAPID elo:</a></strong> <?php echo $lichess_data['rapid_rating']; ?></p>
    <p>Games (Rapid): <strong><?= htmlspecialchars($lichess_data['rapid_games']) ?></strong></p>
</div>
    <div class="bullet-icon"><p><img src="bullet-icon.png" alt="bullet-icon" width="100" height="100"><strong><a style="margin-left: 10px;">BULLET elo:</a></strong> <?php echo $lichess_data['bullet_rating']; ?></p>
    <p>Games (Bullet): <strong><?= htmlspecialchars($lichess_data['bullet_games']) ?></strong></p>
</div>

<div class="tasks-icon"><p><img src="tasks-icon.png" alt="tasks-icon" width="100" height="100"><a style="margin-left: 10px;"><strong>TASKS elo:</strong> </a><?= htmlspecialchars($lichess_data['puzzle_rating']) ?></p>
    <p>Games (Tasks): <strong><?= htmlspecialchars($lichess_data['puzzle_games']) ?></strong></p>
</div>
</div>
<div class="right">
    <p>Registration date: <strong><?= htmlspecialchars($lichess_data['registered']) ?></strong></p>
   <div class="was-online-text"><p>Was online: <strong><?= htmlspecialchars($lichess_data['last_online']) ?></strong></p></div>
    <div class="allgames-icon"> <p><img src="allgames-icon.png" alt="allgames-icon" width="100" height="100"><a style="margin-left: 10px;">All games: <a><?= htmlspecialchars($lichess_data['games_played']) ?></strong></p></div>
</div>
</div>
</div>

<form action="unlink_lichess.php" method="post">
    <button type="submit" class="unlink-button">Unlink Lichess</button>
</form>

<?php endif; ?>
</div>
</body>
</html>