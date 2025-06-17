<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
    function expectedScore($playerRating, $opponentRating) {
        return 1 / (1 + pow(10, ($opponentRating - $playerRating) / 400));
    }
    function calculateNewRating($currentRating, $opponentRating, $score, $kFactor) {
        $expected = expectedScore($currentRating, $opponentRating);
        return round($currentRating + $kFactor * ($score - $expected));
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $playerRating = (int)$_POST["player_rating"];
        $opponentRating = (int)$_POST["opponent_rating"];
        $score = (float)$_POST["score"];
        $kFactor = (int)$_POST["k_factor"];
        $newRating = calculateNewRating($playerRating, $opponentRating, $score, $kFactor);
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="fide-calculator.css">
<link rel="stylesheet" href="styles.css">
	<title>ChessG Calculator</title>
</head>
<body>
<div id="top"></div>
<div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
	<div class="logout-button"><a href="index.php">Home</a></div>
	<br><span class="username" onclick="window.location.href='profile.php'"><?php echo htmlspecialchars($user_data['user_name']); ?></span><br>
    <div class="box-calculator">
<h2>FIDE Rating Calculator</h2>
<div id="box">
    <form method="post">
        <label>Current Rating:</label>
        <input id="text" type="number" name="player_rating" oninput="validateInput(this)" required><br>
        <label>Opponent Rating:</label>
        <input id="text" type="number" name="opponent_rating" oninput="validateInput(this)" required><br>
        <label>Game Result (1 = Win, 0.5 = Draw, 0 = Loss):</label>
        <input id="text" type="number" step="0.5" name="score" oninput="validateInput(this)" required><br>
        <label>K-Factor (10, 20, or 40):</label>
        <input id="text" type="number" name="k_factor" oninput="validateInput(this)" mix="10" max="40" required><br>
        <button type="submit">Calculate</button>
    </form></div>
<div class="card"><div class="content">
    <p class="heading">Rating Formula</p><p class="para">
    <a><span class="italictext">R<span class="small-italic">new</span> = R<span class="small-italic">old</span> + K * (S - E)</span></a>
      <br><a><span class="italictext">R</span><span class="small-italic">old</span> - Current player rating </a>
      <br><a><span class="italictext">K</span> - Coefficient (usually 10, 20 or 40 depending on the level of the player)</a>
      <br><a><span class="italictext">S</span> - Actual result (1 - win, 0.5 - draw, 0 - loss)</a>
      <br><a><span class="italictext">E</span> - Expected result</a></p></div></div><div class="card2">
  <div class="content"><p class="heading">K-Factor</p><p class="para">
    <a><span class="italictext">K = 40</span> Usually used for new players or players with few games played. This allows their rating to adapt more quickly to their actual level.</a>
      <br><a><span class="italictext">K = 20</span> Used for players with a set rating who have already played a sufficient number of games.</a>
      <br><a><span class="italictext">K = 10</span> Used for highly ranked players (e.g. players with a rating above 2400) to make their rating change more smoothly.</a></p></div></div>
    <?php if (isset($newRating)): ?>
        <h3>Your Rating: <?php echo $newRating; ?></h3>
    <?php endif; ?>
</div>
    <script>
        function validateInput(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
            if (input.value.length > 5) {
                input.value = input.value.slice(0, 5);
            }
        }</script>
</body>
</html>