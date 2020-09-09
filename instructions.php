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
    <title>Instructions</title>
    <link rel="stylesheet" type="text/css" href="instructstyle.css">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Black+Ops+One&display=swap" rel="stylesheet">
</head>
<body>
  <div class="head">
    <h1>INSTRUCTIONS</h1>
    <h2>For The Game</h2>
  </div>

  <div class="objective">
    <h4>The main objective of the game is to score 3 points before the opponent and points are scored or counted when the opponent fails to return the ball according to the game rules. The player has to hit the ping pong ball with paddle so that it bounces back towards the opponent. If the player misses to hit the ball, the opponent is awarded a point. The one who recieves 3 points first, is declared as the winner.</h4>
  </div>

  <div class="rules">
    <div class="single">
      <h3>Single player Mode</h3>
      <p>The player has to move the mouse to control the left side player's paddle</p>
    </div>
    <div class="multi">
      <h3>Multiplayer Mode</h3>
      <p>Players toggles their respective paddles using the keyboard.</p>
      <p>Player 1 uses <strong>'W'</strong> key to move the left paddle UP</p>
      <p>Player 1 uses <strong>'S'</strong> key to move the left paddle DOWN</p>
      <p>Player 2 uses <strong>'ARROW UP'</strong> key to move the right paddle UP</p>
      <p>Player 2 uses <strong>'ARROW DOWN'</strong> key to move the right paddle DOWN</p>
    </div>
  </div>
    <a href="index.php" class="goback">Go to main menu</a>
</body>
