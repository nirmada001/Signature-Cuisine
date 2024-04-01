<?php
    include 'connect.php';

if (isset($_POST['ausername']) && isset($_POST['apassword'])) {
    $username = $_POST['ausername'];
    $password = $_POST['apassword'];

    // Check if the entered username and password match the hardcoded values
    if ($username === 'admin' && $password === 'admin') {
        // Authentication successful, redirect to the admin dashboard or any other page
        echo '<script>alert("Login sucessfull");</script>';
        echo '<script>window.location.href = "admin_panel.php";</script>';
        exit();
    } else {
        // Incorrect username or password
        echo '<script>alert("Enter correct username or password");</script>';
        echo '<script>window.location.href = "admin_login.php";</script>';
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
        <link rel="stylesheet" type="text/css" href="dist/css/admin_login.css?v=<?php echo time(); ?>">
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
        

            <!--Login form start-->
            <div class="loginpopup">
                <div class="loginpopup-content">
                    <div class="login">
                        <div class="login-content">
                            <h1>Admin Login</h1>
                            <form action="admin_login.php" method="post">
                            
                                <input type="text" name="ausername" placeholder="Enter Your User Name" class="form-control"  required/><br>
                            
                                <input type="password" name="apassword" placeholder="Enter Your Password" class="form-control" required /><br>
                                
                                <button class="btn btn-primary" name="addlogin">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Login form end-->

        <!--footer start-->
            <?php
                include 'footer.php';
            ?>
        <!--footerstart-->

    </body>
</html>