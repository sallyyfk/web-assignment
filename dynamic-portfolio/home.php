<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="topnav">
    <a class="active" href="home.php">Home</a>
    <a href="cv.php">CV</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact-me.php">Contact Me</a>
    <a href="logout.php" class="logout-link" style="float: right;">Logout</a>
    <span class="username" style="float: right; color: black;"><?php echo $_SESSION['username']; ?></span>
  </div>

  <div class="welcome-container">
    <h1>Welcome, <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>!</h1>
  </div>

</body>

</html>