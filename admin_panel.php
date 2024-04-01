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
        <link rel="stylesheet" type="text/css" href="dist/css/admin_panel.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <!--header section start-->
            <?php
            include 'admin_header.php';
            ?>
        <!--header section end-->

        <!--admin panel start-->
            <section class="admin_panel">
                <h1>Admin Panel</h1>
                <div class="panel_content">
                    <div class="card" style="width: 18rem;">
                        <img src="dist/Images/image.png" alt=""><br><br>
                        <div class="card-body">
                            <h3>Alter menu items</h3>
                            <a href="menu_data.php" class="btn btn-primary">Alter Menu</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="dist/Images/image.png" alt=""><br><br>
                        <div class="card-body">
                            <h3>Check Feedback</h3>
                            <a href="veiw_feedback.php" class="btn btn-primary">View</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="dist/Images/image.png" alt=""><br><br>
                        <div class="card-body">
                            <h3>View Reservations</h3>
                            <a href="view_reservation.php" class="btn btn-primary">View</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="dist/Images/image.png" alt=""><br><br>
                        <div class="card-body">
                            <h3>View Inquiry</h3>
                            <a href="view_inquiry.php" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
             </section>
        <!--admin panel end-->

        <!--footer start-->
            <?php
                include 'footer.php';
            ?>
        <!--footerstart-->

    </body>
</html>