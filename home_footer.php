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
        exit();
        echo '<script>window.location.href="home.php";</script>';
    } else{
        echo '<script>alert("Feedback not recorded")</script>';
        exit();
        echo '<script>window.location.href="home.php";</script>';
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
            <div class="col">
                <h2>Signature Cuisine</h2>
                <address>
                    13550 W Maple Rd,<br>
                    Omaha,<br>
                    New Hampshire<br>
                    (402) 963-9110
                </address>
            </div>
            <br>
            <div class="col">
                <h2>Quick Links<br><br></h2>
                <a href="https://web.facebook.com/"> <i class="fa-brands fa-facebook fa-xl" style="color: white;"></i></a>
                <a href="https://www.instagram.com/"> <i class="fa-brands fa-instagram fa-xl" style="color: white;"></i></a>
                <a href="https://twitter.com/"> <i class="fa-brands fa-twitter fa-xl" style="color: white;"></i></a>
            </div>
            <br>
            <div class="col">
               <h2>Our Branches</h2> <br>
                Colombo<br>
                Kandy<br>
                Kurunegala<br>
                Galle
            </div>

            <div class="text">
                <h2>Contact Us</h2>
                <form action="home_footer.php" method="post">
                   <input type="text" name="name" placeholder="Enter Your User Name"  id="name"required>
                    <input type="text" name="email" placeholder="Enter Your Email" id="password" required ><br>
                    <input type="text" name="subject" placeholder="Subject" id="subject" required ><br>
                    <textarea name="feedback" id="feedback" cols="43" rows="4">Message</textarea> <br>
                    <button class="btn btn-primary" name="login">Message</button>
                </form>
            </div>
        </footer>
        <!--Footer Section End-->

        <!--bootstrap javascript file-->
        <script type="text/javascript" src="dist/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
            <!--jQuery file-->
            <script type="text/javascript" src="dist/js/jquery-3.6.0.min.js"></script>
    </body>
</html>