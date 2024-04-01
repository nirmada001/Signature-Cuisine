<?php
include 'connect.php';

//reservation data
if(isset($_POST['reserve'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $rdate = $_POST['date'];
    $rtime = $_POST['time'];
    $people = $_POST['select'];
    

    $query = "INSERT INTO sc_reservations VALUES ('','$name', '$email', '$phone', '$rdate', '$rtime', '$people')";
    
    if(mysqli_query($conn, $query)){
        echo '<script>alert("Reservation sucessfull")</script>';
        echo '<script>window.location.href = "reservations.php";</script>';
        exit();
    } else{
        echo '<script>alert("Reservation unsucessfull")</script>';
        echo '<script>window.location.href = "reservations.php";</script>';
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
        <!--Owl carasoule css file-->
        

        <!--css file-->
        <link rel = "stylesheet" type="text/css" href = "dist/css/reservations.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <!--header section start-->
                <?php
                    include 'header.php';
                ?>
            <!--header section end-->

            <!--Reservation Section Start-->
            <section class="reservation-section">
                    <div class="reservation-form">
                        <h1>Book your table <br>now</h1>
                        <form action="reservations.php" method="post" enctype="multipart/form-data" id="form">
                            <label class="name">Name:<input type="text" name="name" id="name" placeholder="Name" class="form-control" required></label>
                            <br>
                            
                            <label class="email">Email:<input type="text" name="email" id="email" placeholder="Email" class="form-control" required></label>
                            <br>

                            <label class="phone">Phone No:<input type="text" name="phone" id="phone" placeholder="Contact number" class="form-control" required></label>
                            <br>

                            <label class="date">Date:<input type="date" name="date" id="date" placeholder="Date" class="form-control" required></label>
                            
                            <label class="time">Time:<input type="time" name="time" id="time" placeholder="Time" class="form-control" required></label>
                            <br>
                            <label class="people">Number of People: <select name="select" id="#">
                                                <option value="1">1 Person</option>
                                                <option value="2">2 People</option>
                                                <option value="3">3 People</option>
                                                <option value="4">4 People</option>
                                                <option value="5">5 People</option>
                                                </select></label>
                             <br>
                            <input type="submit" value="Reserve" name="reserve" class="button">
                        </form>
                    </div>
                </div>
            </section>
           <!--Reservation Section End--> 

            <!--footer section start-->
            <?php
                    include 'footer.php';
                ?>
            <!--footer section end-->
    </body>
</html>