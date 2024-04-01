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
        <!--css file-->
        <link rel="stylesheet" type="text/css" href="dist/css/admin_header.css?v=<?php echo time(); ?>">

    </head>
    <body>
            <!--header section start-->
            <header class="header">
                <a href="#" class="logo"><img src="dist/Images/crown-symbol.png" ></a>

                <nav class="navbar">
                    <a href="home.php" class="active ">Home</a>
                    <a href="admin_panel.php">Admin Panel</a>
                </nav>

                <div class="icons">
                    <i class="fas fa-bars" id="menu"></i>
                    <i class="fas fa-user btnlog" ></i>
                    <i class="fas fa-search" ></i>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    
                </div>
            </header>
            <!--header section end-->
        
    </body>
</html>