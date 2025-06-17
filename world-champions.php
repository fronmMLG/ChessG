<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="world-champions.css">
<link rel="stylesheet" href="styles.css">
	<title>ChessG</title>
</head>
<body>
	<div id="top"></div>
<div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
	<div class="logout-button"><<a href="index.php">Home</a></div>
	<br><span class="username" onclick="window.location.href='profile.php'"><?php echo htmlspecialchars($user_data['user_name']); ?></span><br>
<div class="world-text"><a>All World Chess Champions</a></div>
	<section class="section-main">
		<div class="section-box" onclick="window.location.href='steinitz.php'"><img src="champion-img/Steinitz.png" alt="world-champion-img" width="250" height="300"><h1>Wilhelm Steinitz</h1><p>#1<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='lasker.php'"><img src="champion-img/Lasker.png" alt="world-champion-img" width="250" height="300"><h1>Emanuel Lasker</h1><p>#2<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='capablanca.php'"><img src="champion-img/Capablanca.png" alt="world-champion-img" width="250" height="300"><h1>Jose Raul Capablanca</h1><p>#3<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='alekhine.php'"><img src="champion-img/Alekhine.png" alt="world-champion-img" width="250" height="300"><h1>Alexander Alekhine</h1><p>#4<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='euwe.php'"><img src="champion-img/Euwe.png" alt="world-champion-img" width="250" height="300"><h1>Max Euwe</h1><p>#5<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='botvinnik.php'"><img src="champion-img/Botvinnik.png" alt="world-champion-img" width="250" height="300"><h1>Mikhail Botvinnik</h1><p>#6<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='smyslov.php'"><img src="champion-img/Smyslov.png" alt="world-champion-img" width="250" height="300"><h1>Vasily Smyslov</h1><p>#7<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='thal.php'"><img src="champion-img/Thal.png" alt="world-champion-img" width="250" height="300"><h1>Michael Tal</h1><p>#8<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='petrosyan.php'"><img src="champion-img/Petrosyan.png" alt="world-champion-img" width="250" height="300"><h1>Tigran Petrosyan</h1><p>#9<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='spassky.php'"><img src="champion-img/Spassky.png" alt="world-champion-img" width="250" height="300"><h1>Boris Spassky</h1><p>#10<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='fisher.php'"><img src="champion-img/Fisher.png" alt="world-champion-img" width="250" height="300"><h1>Robert Fisher</h1><p>#11<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='karpov.php'"><img src="champion-img/Karpov.png" alt="world-champion-img" width="250" height="300"><h1>Anatoly Karpov</h1><p>#12<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='kasparov.php'"><img src="champion-img/Kasparov.png" alt="world-champion-img" width="250" height="300"><h1>Garry Kasparov</h1><p>#13<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='kramnik.php'"><img src="champion-img/Kramnik.png" alt="world-champion-img" width="250" height="300"><h1>Vladimir Kramnik</h1><p>#14<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='anand.php'"><img src="champion-img/Anand.png" alt="world-champion-img" width="250" height="300"><h1>Viswanathan Anand</h1><p>#15<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='carlsen.php'"><img src="champion-img/Carlsen.png" alt="world-champion-img" width="250" height="300"><h1>Magnus Carlsen</h1><p>#16<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='lizhen.php'"><img src="champion-img/Lizhen.png" alt="world-champion-img" width="250" height="300"><h1>Ding Lizhen</h1><p>#17<p>1886-1894</div>
		<div class="section-box" onclick="window.location.href='dommaraju.php'"><img src="champion-img/Dommaraju.png" alt="world-champion-img" width="250" height="300"><h1>Gukesh Dommaraju</h1><p>#18<p>1886-1894</div>
	</section>
</body>
</html>