<?php
 include 'connect.php';
 include 'loginform.php';
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
        <link rel="stylesheet" type="text/css" href="dist/css/loginpage.css?v=<?php echo time(); ?>">
    </head>
    <body>
            <!--header section start-->
                <?php
                include 'header.php';
                ?>
            <!--header section end-->
          <!--Login form start-->
          <div class="loginpopup">
                <div class="loginpopup-content">
                    <div class="login">
                        <div class="login-content">
                            <h1>User Login</h1>
                            <form action="loginpage.php" method="post" id="loginform">
                            
                                <input type="text" name="lusername" placeholder="Enter Your User Name" class="form-control"  required/><br>
                            
                                <input type="password" name="lpassword" placeholder="Enter Your Password" class="form-control" required /><br>
                                
                                <button class="btn btn-primary" name="userlogin">LOGIN</button>
                                
                                <p class="login-register-text">Don't Have an Account?<a href="registerpage.php"> Register Here</a>.</p>	
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Login form end-->

            <!--footer section start-->
            <?php
                    include 'footer.php';
                ?>
            <!--footer section end-->
    </body>
</html>