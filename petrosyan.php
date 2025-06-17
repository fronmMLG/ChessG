<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ChessG</title>
      <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="petrosyan.css">
  </head>
  <body>
  <div id="top"></div>
<div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
	<div class="logout-button"><a href="index.php">Home</a></div>
	<br><span class="username" onclick="window.location.href='profile.php'"><?php echo htmlspecialchars($user_data['user_name']); ?></span><br>

     <div class="body-main">
     <div class="container">
     
      <div class="buttonContainer">
        <div>
        <select id="level" style="display: none;">
          <option value="8">Level 8</option>
        </select>
      </div>
      <div>
        <button id="newGame">New Game</button>
      </div>
      <div>
        <button id="switchSides">Switch Sides</button>
      </div>
     </div>

    <div class="chessBoard">        
      <!-- Add the pawn div element -->
      <div class="square white">
        <div class="piece rook" color="black"  >
            <img src="Black-Rook.png" alt="Rook" >
          </div>
      </div>
      <div class="square black">
        <div class="piece knight" color="black" >
            <img src="Black-Knight.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece bishop" color="black" >
            <img src="Black-Bishop.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece queen" color="black" >
            <img src="Black-Queen.png" alt="Queen" >
          </div>
      </div>
      <div class="square white">
        <div class="piece king" color="black" >
            <img src="Black-King.png" alt="King" >
          </div>
      </div>
      <div class="square black">
        <div class="piece bishop" color="black" >
            <img src="Black-Bishop.png" alt="Bishop" >
          </div>
      </div>
      <div class="square white">
        <div class="piece knight" color="black">
            <img src="Black-Knight.png" alt="Knight" >
          </div>
      </div>
      <div class="square black">
        <div class="coordinate rank whiteText">8</div>

        <div class="piece rook" color="black" >
            <img src="Black-Rook.png" alt="Rook" >
          </div>
      </div>
     <!-- ------------------------------------------------------------------------- -->

      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black" >
            <img src="Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black" >
            <img src="Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black" >
            <img src="Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black"  >
            <img src="Black-Pawn.png" alt="pawn">
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="coordinate rank blackText">7</div>

        <div class="piece pawn" color="black"  >
            <img src="Black-Pawn.png" alt="pawn" >
          </div>

      </div>
    <!-- ------------------------------------------------------------------------- -->
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black">
        <div class="coordinate rank whiteText">6</div>

      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white">
        <div class="coordinate rank blackText">5</div>

      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black">
        <div class="coordinate rank whiteText">4</div>

      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white">
        <div class="coordinate rank blackText">3</div>
      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square white">
        <div class="piece pawn" color="white" >
            <img src="white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white"  >
            <img src="white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white">
            <img src="white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white" >
            <img src="white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white" >
            <img src="white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white" >
            <img src="white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white" >
            <img src="white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="coordinate rank whiteText">2</div>

        <div class="piece pawn" color="white" >
            <img src="white-pawn.png" alt="pawn" >
          </div>
      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square black">
        <div class="coordinate whiteText">a</div>

        <div class="piece rook" color="white">
            <img src="White-Rook.png" alt="Rook" >
           </div>
      </div>
      <div class="square white"> 
        <div class="coordinate blackText">b</div>

        <div class="piece knight" color="white">
            <img src="White-Knight.png" alt="Knight" >
           </div>
    </div>
      <div class="square black">
        <div class="coordinate whiteText">c</div>

        <div class="piece bishop" color="white">
            <img src="White-Bishop.png" alt="Bishop">
           </div>
      </div>
      <div class="square white">
        <div class="coordinate blackText">d</div>

        <div class="piece queen" color="white" >
            <img src="White-Queen.png" alt="Queen" >
           </div>
      </div>
      <div class="square black">
        <div class="coordinate whiteText">e</div>

        <div class="piece king" color="white">
            <img src="White-King.png" alt="King">
        </div>
      </div>
      <div class="square white">
        <div class="coordinate blackText">f</div>
        <div class="piece bishop" color="white" >
            <img src="White-Bishop.png" alt="Bishop" >
           </div>
      </div>
      <div class="square black">
        <div class="coordinate whiteText">g</div>

        <div class="piece knight" color="white" >
            <img src="White-Knight.png" alt="Knight">
           </div>
      </div>
      <div class="square white">
        <div class="coordinate rank blackText">1</div>
        <div class="coordinate blackText">h</div>     
        <div class="piece rook" color="white" >
            <img src="White-Rook.png" alt="Rook" >
           </div>
      </div>
      <div id="alert">
        Draw 
       </div>
    </div>

  </div>
  
</div>
<div class="fen-background">
<label class="fen">FEN:
  <div id="consoleOutput"></div>
</label>
</div>

<div id="gamePlayerInfo">
    <div class="player"><span id="player2">Tigran Petrosian (2680)</span></div>
    <div id="moveNavigation">
      <div id="fastBackward" class="navigation">
        <i class="fa fa-fast-backward"><img src="previous2.png" alt="previous" width="100" height="100"></i>
      </div>
      <div id="stepBackward" class="navigation">
        <i class="fa fa-step-backward"><img src="previous.png" alt="previous" width="100" height="100"></i>
      </div>
      <div id="stepForward" class="navigation">
        <i class="fa fa-step-forward"><img src="next.png" alt="next" width="100" height="100"></i>
      </div>
      <div id="fastForward" class="navigation">
        <i class="fa fa-fast-forward"><img src="next2.png" alt="next2" width="100" height="100"></i>
      </div>
    </div>
    <div id="pgnContainer"></div>

    <div class="player">

      <span id="player1"><?php echo htmlspecialchars($user_data['user_name']); ?></span>

    </div>
   </div>

<div class="card">
  <div class="content">
    <p class="heading"><img src="champion-img/Petrosyan.png" alt="world-champion-img" width="250" height="300"></p>
    <p class="para">
    <div style="margin-bottom:20px; text-align:center">
    <a style="font-weight: bold;">Tigran Petrosian</a></div>
    <br><div style="margin-bottom: 1px; font-size: 17px; text-align:center;">
<a style="font-weight: bold;">Federation</a> <a>Armenia</a>
</div>
<div style="text-align:center;">
      <br style="margin-bottom: 1px; font-size:17px;">
      <a style="font-weight: bold;">Years of life</a> <a>age: 55</a>
</div>
      <div style="margin-top: 34px;">
      <br>Tigran Petrosian is the ninth World Chess Champion. He held the title from 1963 to 1969, became the Champion of the Soviet Union four times (in 1959, 1961, 1969 and 1975) and played for the USSR team at the Olympiads ten times (from 1958 to 1978). He was called "Iron Tigran" for his unassailable tenacity in defense. In 1962, he did not suffer a single defeat in 63 official games. In the game, he paid special attention to safety and prevention, waiting for a chance to strike in response to the opponent's mistake. Petrosian was known for his iron logic and keen tactical vision, which allowed him to create solid and harmonious positions on the board, rich in combinational possibilities. It was in such positions that he used his signature positional exchange sacrifices. Here is a classic example of a double exchange sacrifice:
      <div>
  </div>
</div>



<script src="steinitz.js"></script>


  </body>
</html>