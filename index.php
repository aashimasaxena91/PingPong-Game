<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf8">
    <title>PINGPONG TEST</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
</head>
<body>
     <div class="heading">
        <h1>PING PONG</h1>
    </div>

    <?php  if (isset($_SESSION['username'])) : ?>
    <p style="margin-top: -130px; color:red; padding-left: 600px; font-size: 40px;">Welcome</span> <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p>  </p>
    <?php endif ?>

    <div class="btn-wrapper">

        <a href="index2.php" class="start" >Single Player</a>
        <a href="index3.php">Multi player</a>
        <a href="instructions.php">Instructions</a>
        <a href="index.php?logout='1'" style="margin-bottom: 100px;">Exit The Game!</a>
    </div>


</body>
</html>
