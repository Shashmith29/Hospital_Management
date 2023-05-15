<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <?php echo '<link href="style4.css" rel="stylesheet">'; ?>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">
        <nav class="navbar">
            <!-- LOGO -->
            <div class="logo">
                <img src="images/Green & Blue Medical Center Logo.png" id="logo" alt="">
            </div>

            <!-- NAVIGATION MENU -->
            <ul class="nav-links">



                <!-- NAVIGATION MENUS -->
                <div class="menu">

                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About US</a></li>

                    <li class="services">
                        <a href="services.php">Services</a>
                    </li>

                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </div>
            </ul>
        </nav>
    </div>
    <div class="mainservices">
        <a href="appointment.php"> <img src="images/services.png" style="width:100%"></a>
    </div>
    <div class="slowFade">
        <div class="slide">
            <img src="images/services1.png" alt="img" />
        </div>
        <a href="appointment.php">
            <div class="slide">
                <img src="images/services2.png" alt="img" />
            </div>
        </a>
        <div class="slide">
            <img src="images/services3.png" alt="img" />
        </div>
        <div class="slide">
            <img src="images/services4.png" alt=" img" />
        </div>
    </div>


</body>

</html>