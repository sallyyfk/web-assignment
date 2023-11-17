<?php
session_start();
?>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sally Fakhreddine CV</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="cvstyle.css">
    </head>

    <body>
        <div class="topnav" style="top: 0; left: 0;">
            <a href="home.php">Home</a>
            <a class="active" href="cv.php">CV</a>
            <a href="gallery.php">Gallery</a>
            <a href="contact-me.php">Contact Me</a>
            <a href="logout.php" class="logout-link" style="float: right;">Logout</a>
            <span class="username" style="float: right; color: black;"><?php echo $_SESSION['username']; ?></span>
          </div>

        <div class="container">
            <div class="left-container">
                <div class="profile">
                    <div class="image">
                        <img src="cvimages/sally.jpg" alt="">
                    </div>
                    <h2>Sally Fakhreddine <br><span>Senior CS Student</span></h2>
                </div>

                <div class="contact-info">
                    <h3 class="title">Contact Information</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <span  class="text">+961 3738449</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            <span  style="font-size: 95%;"class="text">sally.fakhredine@gmail.com</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                            <span class="text"><a style="text-decoration: none; color: white; font-size: 95%;" href="http://linkedin.com/in/sally-fakhreddine-b02507265">http://linkedin.com/in/sally-fakhreddine-b02507265</a></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span class="text">Beirut, Lebanon</span>
                        </li>
                    </ul>
                </div>

                <div class="contact-info education">
                    <h3 class="title">Education</h3>
                    <ul>
                        <li>
                            <h5>2021 - 2024</h5>
                            <h4>BS in Computer Science</h4>
                            <h4 style="font-size: smaller;">Lebanese American University</h4>
                        </li>
                        <li>
                            <h5>2006 - 2021</h5>
                            <h4>Lebanese Baccalaureate in General Sciences</h4>
                            <h4 style="font-size: smaller;">Le Lycee National, Choueifat</h4>
                        </li>
                    </ul>
                </div>


                <div class="contact-info language">
                    <h3 class="title">Languages</h3>
                    <ul>
                        <li>
                            <span class="text">English</span>
                            <span class="percent">
                                <div style="width: 90%;"></div>
                            </span>
                        </li>
                        <li>
                            <span class="text">Arabic</span>
                            <span class="percent">
                                <div style="width: 100%;"></div>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="right-container">
                <div class="about">
                    <h2 class="title2">Profile</h2>
                    <p>Senior Computer Science student at LAU eager to employ and further enhance my
                        programming and problem-solving skills. Always ready and looking forward to learning on
                        my own and making use of any available resources.
                    </p>
                </div>

                <div class="about">
                    <h2 class="title2">Experience</h2>
                    <div class="box">
                        <div class="exp">
                            <h5>June 15 - August 31, 2023</h5>
                            <h5>INTEGRATED DIGITAL SYSTEMS (IDS)</h5>
                        </div>
                        <div class="text">
                            <h4> Full-Stack Developer Intern</h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="exp">
                            <h5>October 7-8, 2022; September 8-9,2023</h5>
                            <h5>Lebanese Collegiate Programming Contest</h5>
                        </div>
                        <div class="text">
                            <h4>LCPC Participant</h4>
                            <p>Ranked 16th and 19th place respectively (out of 28 - 60)</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="exp">
                            <h5>Spring 2022 - Present</h5>
                            <h5>Lebanese American University</h5>
                        </div>
                        <div class="text">
                            <h4>Lab Volunteer</h4>
                            <p>Problem-solving and Object-Oriented Programming tutor (Python, Java)</p>
                        </div>
                    </div>

                </div>

                <div class="about skills">
                    <h2 class="title2">Software Skills</h2>
                    <div class="box">
                        <h4>C++</h4>
                        <div class="percent">
                            <div style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>Java</h4>
                        <div class="percent">
                            <div style="width: 40%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>Python</h4>
                        <div class="percent">
                            <div style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>HTML</h4>
                        <div class="percent">
                            <div style="width: 55%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>CSS</h4>
                        <div class="percent">
                            <div style="width: 70%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>SQL</h4>
                        <div class="percent">
                            <div style="width: 65%;"></div>
                        </div>
                    </div>
            
                </div>


                <div class="about soft">
                    <h2 class="title2">Soft Skills</h2>
                    <ul>
                        <li>Problem Solving</li>
                        <li>Competitive Programming</li>
                        <li>Teamwork</li>
                        <li>Time Management</li>
                    </ul>
                </div>

            </div>
        </div>
    </body>
</html>