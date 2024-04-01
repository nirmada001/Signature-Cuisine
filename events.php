<?php
include 'connect.php';

 //register
 if(isset($_POST['inquire'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['select'];
    $description = $_POST['feedback'];


    $query = "INSERT INTO sc_inquiry VALUES ('','$fname', '$lname','$email','$phone','$date', '$time', '$people', '$description ')";
    
    if(mysqli_query($conn, $query)){
        echo '<script>alert("Inquire recorded")</script>';
        echo '<script>window.location.href = "events.php";</script>';
        exit();
    } else{
        echo '<script>alert("Inquirey not recorded")</script>';
        echo '<script>window.location.href = "home.php";</script>';
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
        <link rel = "stylesheet" type="text/css" href = "dist/css/events.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <!--header section start-->
            <?php
                include 'header.php';
            ?>
        <!--header section end-->
        <section class="event-image">
            <div class="image">
                <img src="dist/Images/events_img.png" alt="">
                <div class="image-content">
                    <h1>"Elevate Your Occasions, Unforgettable Events Await"</h1>
                </div>
            </div>

            <div class="page-content">
                <div class="text">
                    <h1>Hey Party People!!</h1>
                    <p>Create memorable moments at Signature Cuisine. Our exceptional event spaces, 
                        personalized service, and culinary expertise combine to bring your vision to life. <br>
                        Whether it's an intimate gathering or a grand celebration, our dedicated event coordinators 
                        will work closely with you to craft a bespoke experience that exceeds your expectations. <br>
                        Indulge in our tantalizing menus, crafted with the finest ingredients, and let our talented 
                        team ensure every detail is flawless.<br> Elevate your events with the perfect blend of sophistication, 
                        ambiance, and impeccable hospitality at Signature Cuisine.</p>

                        <button class="inqbtn">Inquire Now</button>
                </div>
            </div>
        </section>

        <div class="inquirepopup">
            <i class="fa-sharp fa-solid fa-square-xmark fa-2xl popupclose" style="color: #0d0d0d;"></i>
            <div class="inquirepopup-content">
                <div class="inquire">
                    <div class="inquire-content">
                        <h1>Contact us about your event</h1>
                        <form action="events.php" method="post">
                            <label class="fname">First Name:</label><br>
                            <input type="text" name="fname" placeholder="First Name" required> <br>
                            <label class="lname">Last Name:</label><br>
                            <input type="text" name="lname" placeholder="Last Name" required> <br>
                            <label class="email">Email:</label><br>
                            <input type="text" name="email" placeholder="Email" required> <br>
                            <label class="phone">Contact No:</label><br>
                            <input type="text" name="phone" placeholder="Phone Number" required> <br>
                            <label class="date">Date:</label><br>
                            <input type="date" name="date" placeholder="Event date" required><br>
                            <label class="time">Time:</label><br>
                            <input type="time" name="time" placeholder="Time" required><br>
                            <label class="people">Number of People</label>
                            <select name="select" id="#">
                                                <option value="1">10 Person</option>
                                                <option value="2">20 People</option>
                                                <option value="3">30 People</option>
                                                <option value="4">40 People</option>
                                                <option value="5">50 People</option>
                                                </select> <br>
                            <label class="time">What is your event?</label><br>
                            <textarea name="feedback" id="feedback" cols="43" rows="4">Inquire</textarea> <br><br>
                                <button class="btn" name="inquire">Inquire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--footer section start-->
            <?php
                include 'footer.php';
            ?>
        <!--footer section end-->


        <!--javascript file-->
        <script type="text/javascript" src="dist/js/events.js?v=<?php echo time(); ?>"></script>
    </body>
</html>