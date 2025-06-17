<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="styles.css">
	<title>ChessG</title>
</head>
<body>
	<div id="top"></div>
<div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
	<div class="logout-button"><a href="logout.php">Logout</a></div>
	<br><span class="username" onclick="window.location.href='profile.php'"><?php echo htmlspecialchars($user_data['user_name']); ?></span><br>
<section class="section-main">
		<div class="section-box" onclick="window.location.href='play-with-computer.php'"><h1>PLAY WITH THE COMPUTER</h1></div>
		<div class="section-box" onclick="window.location.href='world-champions.php'"><h1>PLAY WITH WORLD CHAMPIONS</h1></div>
		<div class="section-box" onclick="window.location.href='analysis-board.php'"><h1>CHESS ANALYSIS</h1></div>
</section>

<div class="chessBoard-body">
<div class="chessBoard">
	      <!--8th rank-->
	<div class="square white"><div class="piece rook" color="black"><img src="Black-Rook.png" alt="Rook"></div></div>
	<div class="square black"><div class="piece knight" color="black"><img src="Black-Knight.png" alt="Knight"></div></div>
	<div class="square white"><div class="piece bishop" color="black"><img src="Black-Bishop.png" alt="Bishop"></div></div>
	<div class="square black"><div class="piece queen" color="black"><img src="Black-Queen.png" alt="Queen"></div></div>
	<div class="square white"><div class="piece king" color="black"><img src="Black-King.png" alt="King"></div></div>
	<div class="square black"><div class="piece bishop" color="black"><img src="Black-Bishop.png" alt="Bishop"></div></div>
	<div class="square white"><div class="piece knight" color="black"><img src="Black-Knight.png" alt="Knight"></div></div>
	<div class="square black"><div class="coordinate rank whiteText">8</div><div class="piece rook" color="black"><img src="Black-Rook.png" alt="Rook"></div></div>
         <!--7th rank-->
	<div class="square black"><div class="piece pawn" color="black"><img src="Black-Pawn.png" alt="Pawn"></div></div>
	<div class="square white"><div class="piece pawn" color="black"><img src="Black-Pawn.png" alt="Pawn"></div></div>
	<div class="square black"><div class="piece pawn" color="black"><img src="Black-Pawn.png" alt="Pawn"></div></div>
	<div class="square white"><div class="piece pawn" color="black"><img src="Black-Pawn.png" alt="Pawn"></div></div>
	<div class="square black"><div class="piece pawn" color="black"><img src="Black-Pawn.png" alt="Pawn"></div></div>
	<div class="square white"><div class="piece pawn" color="black"><img src="Black-Pawn.png" alt="Pawn"></div></div>
	<div class="square black"><div class="piece pawn" color="black"><img src="Black-Pawn.png" alt="Pawn"></div></div>
	<div class="square white"><div class="coordinate rank blackText">7</div><div class="piece pawn" color="black"><img src="Black-Pawn.png" alt="Pawn"></div></div>
	<!--6th rank-->
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"><div class="coordinate rank whiteText">6</div></div>
	<!--5th rank-->
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"><div class="coordinate rank blackText">5</div></div>
	<!--4th rank-->
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"><div class="coordinate rank whiteText">4</div></div>
    <!--3th rank-->
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"></div>
	<div class="square black"></div>
	<div class="square white"><div class="coordinate rank blackText">3</div></div>
	 <!--2th rank-->
	 <div class="square white"><div class="piece pawn" color="white"><img src="White-Pawn.png" alt="Pawn"></div></div>
	<div class="square black"><div class="piece pawn" color="white"><img src="White-Pawn.png" alt="Pawn"></div></div>
	<div class="square white"><div class="piece pawn" color="white"><img src="White-Pawn.png" alt="Pawn"></div></div>
	<div class="square black"><div class="piece pawn" color="white"><img src="White-Pawn.png" alt="Pawn"></div></div>
	<div class="square white"><div class="piece pawn" color="white"><img src="White-Pawn.png" alt="Pawn"></div></div>
	<div class="square black"><div class="piece pawn" color="white"><img src="White-Pawn.png" alt="Pawn"></div></div>
	<div class="square white"><div class="piece pawn" color="white"><img src="White-Pawn.png" alt="Pawn"></div></div>
	<div class="square black"><div class="coordinate rank whiteText">2</div><div class="piece pawn" color="white"><img src="White-Pawn.png" alt="Pawn"></div></div>
	<!--1th rank-->
	<div class="square black"><div class="coordinate whiteText">a</div><div class="piece rook" color="white"><img src="White-Rook.png" alt="Rook"></div></div>
	<div class="square white"><div class="coordinate blackText">b</div><div class="piece knight" color="white"><img src="White-Knight.png" alt="Knight"></div></div>
	<div class="square black"><div class="coordinate whiteText">c</div><div class="piece bishop" color="white"><img src="White-Bishop.png" alt="Bishop"></div></div>
	<div class="square white"><div class="coordinate blackText">d</div><div class="piece queen" color="white"><img src="White-Queen.png" alt="Queen"></div></div>
	<div class="square black"><div class="coordinate whiteText">e</div><div class="piece king" color="white"><img src="White-King.png" alt="King"></div></div>
	<div class="square white"><div class="coordinate blackText">f</div><div class="piece bishop" color="white"><img src="White-Bishop.png" alt="Bishop"></div></div>
	<div class="square black"><div class="coordinate whiteText">g</div><div class="piece knight" color="white"><img src="White-Knight.png" alt="Knight"></div></div>
	<div class="square white"><div class="coordinate rank blackText">1</div><div class="coordinate blackText">h</div><div class="piece rook" color="white"><img src="White-Rook.png" alt="Rook"></div></div>
</div>
<table class="rating-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Fed</th>
            <th>Rating</th>
            <th>B-Year</th>
            <th>Avg12M</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/1503014'"style="cursor:pointer;">Carlsen, Magnus</td>
            <td>NOR</td>
            <td>2833</td>
            <td>1990</td>
            <td>2842 (1)</td>
        </tr>
        <tr>
            <td>2</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/2020009'"style="cursor:pointer;">Caruana, Fabiano</td>
            <td>USA</td>
            <td>2803</td>
            <td>1992</td>
            <td>2780 (4)</td>
        </tr>
        <tr>
            <td>3</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/2016192'"style="cursor:pointer;">Nakamura, Hikaru</td>
            <td>USA</td>
            <td>2802</td>
            <td>1987</td>
            <td>2779 (5)</td>
        </tr>
        <tr>
            <td>4</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/35009192'"style="cursor:pointer;">Erigaisi Arjun</td>
            <td>IND</td>
            <td>2801</td>
            <td>2003</td>
            <td>2710 (30)</td>
        </tr>
        <tr>
            <td>5</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/46616543'"style="cursor:pointer;">Gukesh D</td>
            <td>IND</td>
            <td>2777</td>
            <td>2006</td>
            <td>2737 (16)</td>
        </tr>
        <tr>
            <td>6</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/14204118'"style="cursor:pointer;">Abdusattorov, Nodirbek</td>
            <td>UZB</td>
            <td>2766</td>
            <td>2004</td>
            <td>2726 (22)</td>
        </tr>
        <tr>
            <td>7</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/12573981'"style="cursor:pointer;">Firouzja, Alireza</td>
            <td>FRA</td>
            <td>2760</td>
            <td>2003</td>
            <td>2778 (6)</td>
        </tr>
        <tr>
            <td>8</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/8603405'"style="cursor:pointer;">Wei, Yi</td>
            <td>CHN</td>
            <td>2755</td>
            <td>1999</td>
            <td>2726 (23)</td>
        </tr>
        <tr>
            <td>9</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/4168119'"style="cursor:pointer;">Nepomniachtchi, Ian</td>
            <td>RUS</td>
            <td>2754</td>
            <td>1990</td>
            <td>2781 (3)</td>
        </tr>
        <tr>
            <td>10</td>
            <td onclick="window.location.href='https://ratings.fide.com/profile/5000017'" style="cursor:pointer;">Anand, Viswanathan</td>
            <td>IND</td>
            <td>2750</td>
            <td>1969</td>
            <td>2753 (9)</td>
        </tr>
    </tbody>
</table>
<div class="button-reting" onclick="window.location.href='fide-calculator.php'"><h1>FIDE RATING CALCULATORS</h1></div>
<div class="header">
<div class="header-text">
	<a>ChessG<a>
	<a>Contacts<a>
	<a>Mobile application<a>
	<a>User Agreement<a>
	<a>Confidentiality<a>
	<a>Ads<a>
</div>
<div class="header-text2">
	<a>Twitch<a>
	<a>YouTube<a>
	<a>Discord<a>
	<a>GitHub<a>
	<a>Instagram<a>
</div>
</div>
</body>
</html>