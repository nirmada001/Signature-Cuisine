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
        <link rel="stylesheet" type="text/css" href="dist/css/contactus.css?v=<?php echo time(); ?>">

    </head>
    <body>

        <!--header section start-->
            <?php
                include 'header.php';
            ?>
        <!--header section end-->
                <video autoplay muted loop id="myVideo">
                    <source src="dist/Images/contact us.mp4" type="video/mp4">
                </video>
            
                <div class="contact-text">
                    <h1>Contact Us</h1>
                </div>
            <div class="feedback-content">
                <div class="text">
                <form action="header.php" method="post">
                            
                            <input type="text" name="name" placeholder="Enter Your User Name" class="form-control"  required/> <br>
                        
                            <input type="password" name="email" placeholder="Enter Your Password" class="form-control" required /><br>
                            <textarea name="feedback" id="feedback" cols="55" rows="10">Your feedback</textarea> <br>
                            <button class="btn btn-primary" name="login">LOGIN</button>
                        </form>
                </div>
            </div>
        <!--footer section start-->
            <?php
                include 'footer.php';
            ?>
        <!--footer section end-->
            <!--javascript file-->
            <script language="javascript" type="text/javascript" src="dist/js/header.js?v=<?php echo time(); ?>"></script>

             <!--bootstrap javascript file-->
             <script type="text/javascript" src="dist/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
            <!--jQuery file-->
            <script type="text/javascript" src="dist/js/jquery-3.6.0.min.js"></script>
        </div>
    </body>
</html>