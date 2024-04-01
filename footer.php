<?php

include 'connect.php';

//feedback
if(isset($_POST['login'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $feedback = $_POST['feedback'];


    $query = "INSERT INTO cs_feedback VALUES ('','$name', '$email','$subject','$feedback')";
    
    if(mysqli_query($conn, $query)){
        echo '<script>alert("Feedback recorded")</script>';
        echo '<script>window.location.href="home.php";</script>';
        exit();
    } else{
        echo '<script>alert("Feedback not recorded")</script>';
        echo '<script>window.location.href="home.php";</script>';
        exit();
    }
}
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
        <link rel="stylesheet" type="text/css" href="dist/css/footer.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <!--Footer Section Start-->
        <footer>
            <div class="footer-section">
                <div class="div1">
                    <div class="div1-content">
                        <img src="dist/Images/logo.png" alt="">
                        <div class="icons">
                        <a href="https://web.facebook.com/"> <i class="fa-brands fa-facebook fa-xl" style="color: white;"></i></a>
                            <a href="https://www.instagram.com/"> <i class="fa-brands fa-instagram fa-xl" style="color: white;"></i></a>
                            <a href="https://twitter.com/"> <i class="fa-brands fa-twitter fa-xl" style="color: white;"></i></a>
                            <a href="https://twitter.com/"><i class="fa-brands fa-youtube fa-xl" style="color: white;"></i></a>
                        </div>    
                    </div>
                </div>
                <hr><br>
                <div class="div2">
                    <div class="div2-content">
                        <div class="footer-about">
                            <h1>About us</h1>
                            <h4>At Signature Cuisine, We Believe That Dining Is More Than Just A Meal, 
                                It's An Experience That Engages All The Senses. With A Passion For Culinary Excellence, 
                                Warm Hospitality, And An Inviting Ambiance, We Aim To Create Memorable Moments For Our Guests.</h4>
                        </div>
                        <div class="footer-contact">
                            <h2>Contact info</h2>
                            <p>
                                Call: (+94) (011) 2694887<br><br>
                                Email: signaturecuisine@gmail.com<br><br>
                                Find us: 21, Flower Road, Colombo
                            </p>
                        </div>

                        <div class="text">
                            <form action="footer.php" method="post">
                            <input type="text" name="name" placeholder="Enter Your User Name"  id="name"required>
                                <input type="text" name="email" placeholder="Enter Your Email" id="password" required ><br>
                                <input type="text" name="subject" placeholder="Subject" id="subject" required ><br>
                                <textarea name="feedback" id="feedback" cols="75" rows="4">Message</textarea> <br>
                                <button class="btn" name="login">Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr><br>
                <div class="div4">
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.835609489019!2d79.85459917464802!3d6.910250993089211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25968b83ff76b%3A0x1bda20e6a26a10e2!2s21%20Flower%20Rd%2C%20Colombo%2000700!5e0!3m2!1sen!2slk!4v1690170756571!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <hr><br>
                <div class="div3">
                    <div class="copyright">
                        <p>© Signature Cuisine 2023 . All rights reserved. Design by Nirmada Edisinghe</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer Section End-->

        <!--bootstrap javascript file-->
        <script type="text/javascript" src="dist/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
            <!--jQuery file-->
            <script type="text/javascript" src="dist/js/jquery-3.6.0.min.js"></script>
    </body>
</html>