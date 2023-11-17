<?php
session_start();
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gstyle.css">
</head>

<body>
    <div class="topnav">
        <a href="home.php">Home</a>
        <a href="cv.php">CV</a>
        <a class="active" href="gallery.php">Gallery</a>
        <a href="contact-me.php">Contact Me</a>
        <a href="logout.php" class="logout-link" style="float: right;">Logout</a>
        <span class="username" style="float: right; color: black;"><?php echo $_SESSION['username']; ?></span>
    </div>

    <h1 style="text-align: center;">Image Gallery</h1>

    <div class="gallery">
        <?php
        $galleryData = json_decode(file_get_contents('gallery.json'), true);

        foreach ($galleryData as $imageName) {
            echo '<div class="gallery-item">';
            echo '  <div class="frame">';
            echo '      <a href="gallery-images/' . $imageName . '" target="_self">';
            echo '          <img src="gallery-images/' . $imageName . '" alt="' . $imageName . '" class="my-img">';
            echo '      </a>';
            echo '  </div>';
            echo '</div>';
        }
        ?>
    </div>

</body>

</html>
