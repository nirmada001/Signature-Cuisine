<?php
 include 'connect.php';
 include 'registration.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Resturant website</title>
        <!--font awsome icons-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="dist/bootstrap-5.0.1-dist/css/bootstrap.min.css"/>
        <!--css file-->
        <link rel="stylesheet" type="text/css" href="dist/css/register.css?v=<?php echo time(); ?>">

    </head>
    <body>
            <!--header section start-->
            <?php
                include 'header.php';
                ?>
            <!--header section end-->

            <!--registration form start-->
            <div class="registerpopup">
                <div class="registerpopup-content">
                    <div class="register">
                        <div class="register-content">
                            <h1>Register Here</h1>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="regform">
                                <div class="input-control">
                                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control"  id="fname"/>
                                    <span class="error"><?php echo $fnameErr;?></span>
                                </div>

                                <div class="input-control">
                                    <input type="text" name="email" placeholder="Enter Your Email Name" class="form-control"  id="email"/>
                                    <span class="error"><?php echo $emailErr;?></span>
                                </div>

                                <div class="input-control ">
                                    <input type="text" name="username" placeholder="Enter Your User Name" class="form-control"  id="username"/>
                                    <span class="error"><?php echo $usernameErr;?></span>
                                </div>

                                <div class="input-control">
                                    <input type="password" name="password" placeholder="Enter Your Password" class="form-control" id="rpassword" />
                                    <span class="error"><?php echo $passwordErr;?></span>
                                </div>

                                <button class="btn btn-primary" name="register" type="submit">Sign Up</button>	
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Register form end-->

            <!--footer section start-->
            <?php
                    include 'footer.php';
                ?>
            <!--footer section end-->
    </body>
</html>