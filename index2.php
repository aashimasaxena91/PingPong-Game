<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf8">
    <title>PINGPONG TEST</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
</head>
<body>
	<style>
        canvas{
            /*border: 3px solid;
            border-color: #065446;*/
            display: block;
            margin: 0 auto;
        }
    </style>



    <div class="center">
        <div class="content">
            <div class="header">
                <h2>Ping Pong!</h2>
            </div>


            <span><p class="final-score"></p></span>



            <div class="line"></div>
            <a href="index.php" class="close-btn">Get me home!</a>
            <a href="index2.php" class="restart-btn">Play More!</a>
        </div>
    </div>


    <div class="center-f">
        <div class="content-f">
            <div class="header-f">
                <h2>Ping Pong!</h2>
            </div>


            <span><p class="final-score-f"></p></span>



            <div class="line"></div>
            <a href="index.php" class="close-btn">Get me home!</a>
            <a href="index2.php" class="restart-btn">Play More!</a>
        </div>
    </div>


<canvas id="gameCanvas" width="1000" height="655"></canvas>

<script src="script2.js">


</script>
</body>
</html>
