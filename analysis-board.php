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

    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="analysis-board.css"/>
  </head>
  <body>
  <div id="top"></div>
  <div class="chessg"> <img src="logo.svg" alt="ChessG Logo" width="100" height="100"> </div>
	<br><span class="username" onclick="window.location.href='profile.php'"><?php echo htmlspecialchars($user_data['user_name']); ?></span><br>
  <div class="logout-button"><a href="index.php">Home</a></div>
  <div class="chessgif"> <img src="chessgif.gif" alt="background-gif"> </div>
  <div class="body-board">
      <div class="container">
        <div class="chessBoard">
          <!-- Add the pawn div element -->
          <div class="square white">
            <div class="piece rook" color="black">
              <img src="Black-Rook.png" alt="Rook" />
            </div>
          </div>
          <div class="square black">
            <div class="piece knight" color="black">
              <img src="Black-Knight.png" alt="pawn" />
            </div>
          </div>
          <div class="square white">
            <div class="piece bishop" color="black">
              <img src="Black-Bishop.png" alt="pawn" />
            </div>
          </div>
          <div class="square black">
            <div class="piece queen" color="black">
              <img src="Black-Queen.png" alt="Queen" />
            </div>
          </div>
          <div class="square white">
            <div class="piece king" color="black">
              <img src="Black-King.png" alt="King" />
            </div>
          </div>
          <div class="square black">
            <div class="piece bishop" color="black">
              <img src="Black-Bishop.png" alt="Bishop" />
            </div>
          </div>
          <div class="square white">
            <div class="piece knight" color="black">
              <img src="Black-Knight.png" alt="Knight" />
            </div>
          </div>
          <div class="square black">
            <div class="coordinate rank whiteText">8</div>

            <div class="piece rook" color="black">
              <img src="Black-Rook.png" alt="Rook" />
            </div>
          </div>
          <!-- ------------------------------------------------------------------------- -->

          <div class="square black">
            <div class="piece pawn" color="black">
              <img src="Black-Pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square white">
            <div class="piece pawn" color="black">
              <img src="Black-Pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square black">
            <div class="piece pawn" color="black">
              <img src="Black-Pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square white">
            <div class="piece pawn" color="black">
              <img src="Black-Pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square black">
            <div class="piece pawn" color="black">
              <img src="Black-Pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square white">
            <div class="piece pawn" color="black">
              <img src="Black-Pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square black">
            <div class="piece pawn" color="black">
              <img src="Black-Pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square white">
            <div class="coordinate rank blackText">7</div>

            <div class="piece pawn" color="black">
              <img src="Black-Pawn.png" alt="pawn" />
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
            <div class="piece pawn" color="white">
              <img src="white-pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square black">
            <div class="piece pawn" color="white">
              <img src="white-pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square white">
            <div class="piece pawn" color="white">
              <img src="white-pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square black">
            <div class="piece pawn" color="white">
              <img src="white-pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square white">
            <div class="piece pawn" color="white">
              <img src="white-pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square black">
            <div class="piece pawn" color="white">
              <img src="white-pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square white">
            <div class="piece pawn" color="white">
              <img src="white-pawn.png" alt="pawn" />
            </div>
          </div>
          <div class="square black">
            <div class="coordinate rank whiteText">2</div>

            <div class="piece pawn" color="white">
              <img src="white-pawn.png" alt="pawn" />
            </div>
          </div>
          <!-- ------------------------------------------------------------------------- -->

          <div class="square black">
            <div class="coordinate whiteText">a</div>

            <div class="piece rook" color="white">
              <img src="White-Rook.png" alt="Rook" />
            </div>
          </div>
          <div class="square white">
            <div class="coordinate blackText">b</div>

            <div class="piece knight" color="white">
              <img src="White-Knight.png" alt="Knight" />
            </div>
          </div>
          <div class="square black">
            <div class="coordinate whiteText">c</div>

            <div class="piece bishop" color="white">
              <img src="White-Bishop.png" alt="Bishop" />
            </div>
          </div>
          <div class="square white">
            <div class="coordinate blackText">d</div>

            <div class="piece queen" color="white">
              <img src="White-Queen.png" alt="Queen" />
            </div>
          </div>
          <div class="square black">
            <div class="coordinate whiteText">e</div>

            <div class="piece king" color="white">
              <img src="White-King.png" alt="King" />
            </div>
          </div>
          <div class="square white">
            <div class="coordinate blackText">f</div>
            <div class="piece bishop" color="white">
              <img src="White-Bishop.png" alt="Bishop" />
            </div>
          </div>
          <div class="square black">
            <div class="coordinate whiteText">g</div>

            <div class="piece knight" color="white">
              <img src="White-Knight.png" alt="Knight" />
            </div>
          </div>
          <div class="square white">
            <div class="coordinate rank blackText">1</div>
            <div class="coordinate blackText">h</div>
            <div class="piece rook" color="white">
              <img src="White-Rook.png" alt="Rook" />
            </div>
          </div>
        </div>
        <div id="evalBar">
          <div class="blackBar" style="height: 47.97596267877326%"></div>
          <div class="zero"></div>
          <div class="evalNum" >1.5</div>
        </div>
      </div>
      <table id="topLines">
        <thead>
          <tr>
            <th id="eval"></th>
            <th id="evalText"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="eval1"></td>
            <td id="line1"></td>
          </tr>
          <tr>
            <td id="eval2"></td>
            <td id="line2"></td>
          </tr>
          <tr>
            <td id="eval3"></td>
            <td id="line3"></td>
          </tr>
        </tbody>
      </table>
    <div id="alert"></div>
</div>
    <script src="analysis-board.js"></script>
  </body>
</html>