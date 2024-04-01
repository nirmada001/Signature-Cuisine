<?php
 include 'connect.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Resturant website</title>
        <!--font awsome icons-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="dist/bootstrap-5.0.1-dist/css/bootstrap.min.css"/>
        <!--css file-->
        <link rel="stylesheet" type="text/css" href="dist/css/header.css?v=<?php echo time(); ?>">

    </head>
    <body>
            <!--header section start-->
            <header class="header">
                <a href="#" class="logo"><img src="dist/Images/logo.png" ></a>

                <nav class="navbar" id="navbar">
                    <a href="home.php" class="active ">Home</a>
                    <a href="about.php">About</a>
                    <a href="menu_display.php">Menus</a>
                    <a href="events.php">Private Events</a>
                    <a href="reservations.php" class="button" id="button">Reservations</a>
                </nav>

                <div class="icons">
                    <i class="fas fa-bars" id="menu"></i>
                    <a href="loginpage.php"><i class="fas fa-user btnlog" ></i></a>
                    <i class="fas fa-search" ></i>
                    <a href="mycart.php"><i class="fas fa-shopping-cart"></i></a>
                    
                </div>
            </header>
            <!--header section end-->

        
            <!--javascript file-->
            <script language="javascript" type="text/javascript" src="dist/js/header.js?v=<?php echo time(); ?>"></script>

             <!--bootstrap javascript file-->
             <script type="text/javascript" src="dist/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
            <!--jQuery file-->
            <script type="text/javascript" src="dist/js/jquery-3.6.0.min.js"></script>
        </div>
    </body>
</html>