<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Contact Info</title>
</head>

<body>
    <div class="topnav">
        <a href="home.php">Home</a>
        <a href="cv.php">CV</a>
        <a href="gallery.php">Gallery</a>
        <a class="active" href="contact-me.php">Contact Me</a>
        <a href="logout.php" class="logout-link" style="float: right;">Logout</a>
        <span class="username" style="float: right; color: black;"><?php echo $_SESSION['username']; ?></span>
    </div>

    <div class="container">
        <h1>Contact Info</h1>
        <div class="contact-item">
            <strong>Name:</strong> Sally Fakhreddine
        </div>
        <div class="contact-item">
            <strong>Email:</strong> sally.fakhredine@gmail.com
        </div>
        <div class="contact-item">
            <strong>Phone:</strong> +961 3738449
        </div>
        <div class="contact-item">
            <strong>Address:</strong> Beirut, Lebanon
        </div>
    </div>
</body>

</html>