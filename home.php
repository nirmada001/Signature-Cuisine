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
        <link rel = "stylesheet" type="text/css" href = "dist/css/homePage.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <div class="home">
            <!--header section start-->
                    <?php
                    include 'header.php';
                    ?>
            <!--header section end-->
            <!--slider section start-->
                    <div class="carsoule" data-bs-interval="100">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item" id="item">
                                    <img src="dist/Images/slideshow-8.jpg" class="d-block w-100 h-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block caption">
                                        <div class="content">
                                            <img src="dist/Images/crown-symbol.png" alt="image">
                                            <h1>Signature Cuisine</h1>
                                            <p>Try out your favourites at one place</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item active" id="item">
                                    <img src="dist/Images/slideshow-9.jpg" class="d-block w-100 h-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block caption">
                                        <div class="content">
                                                <img src="dist/Images/crown-symbol.png" alt="image">
                                            <h1>Signature Cuisine</h1>
                                            <p>Try out your favourites at one place</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" id="item">
                                    <img src="dist/Images/slideshow-11.jpg" class="d-block w-100 h-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block caption">
                                        <div class="content">
                                            <img src="dist/Images/crown-symbol.png" alt="image">
                                            <h1>Signature Cuisine</h1>
                                            <p>Try out your favourites at one place</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--slider section end-->
            
            <div class="full-image">
                <!--Intro section start-->
                <section class="intro-section">
                    <div class="intro">
                        <div class="intro-content">
                            <div class="image1">
                                <img src="dist/Images/intro1.jpg" alt="" class="intro1">
                            </div>
                            <div class="image2">
                                <img src="dist/Images/intro2.jpg" alt="" class="intro2">
                            </div>
                            <div class="intro-text">
                                <h1>Signature Cuisine</h1>
                                <h3>''Savor the Moments, Delight in the Flavors!''</h3>
                                <p>Welcome to Signature Cuisine, where culinary excellence meets an unforgettable dining experience.
                                    Step into our world of delectable flavors and impeccable service, where every bite tells a story.
                                    From the moment you enter, you'll be embraced by a captivating ambiance that sets the stage for a
                                    gastronomic journey like no other. Indulge your senses and savor the finest ingredients meticulously 
                                    crafted into mouthwatering dishes. Discover a place where passion and creativity converge, leaving you
                                        craving for more. Welcome to a culinary haven that will leave an indelible mark on your palate.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Intro section end-->

                <!--menu section start-->
                <section class="menu-section">
                    <div class="menus">
                        <h1>Our Menu</h1>
                        <h3>~ Unleash Your Palate's Potential! ~</h3>
                        <div class="menu-content">
                            <a href="menu_display.php">
                            <div class="menucard">
                                <div class="special">
                                    <h1>Special</h1>
                                </div>
                            </div>
                            </a>
                            
                            <a href="menu_display.php">
                            <div class="menucard">
                                <div class="italian">
                                    <h1>Italian</h1>
                                </div>
                            </div>
                            </a>

                            <a href="menu_display.php">
                            <div class="menucard">
                                <div class="mexican">
                                    <h1>Mexican</h1>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="menu-content">
                            <a href="menu_display.php">
                            <div class="menucard">
                                <div class="asian">
                                    <h1>Asian</h1>
                                </div>
                            </div>
                            </a>

                            <a href="menu_display.php">
                            <div class="menucard">
                                <div class="deserts">
                                    <h1>Deserts</h1>
                                </div>
                            </div>
                            </a>

                            <a href="menu_display.php">
                            <div class="menucard">
                                <div class="drinks">
                                    <h1>Drinks</h1>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </section>
                <!--menu section end--> 

                <!--services section start-->
                <section class = "services">
                    <h1>Our services</h1>
                    <div class="services-images">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="dist/Images/service-1.jpg" alt="">
                                        <h2>Free Wi-Fi</h2>
                                        <h4>Stay Connected While You Savor</h4>
                                        <p class="card-text">Enjoy complimentary high-speed Wi-Fi throughout our restaurant,
                                             making it easy to share your dining experience with friends or catch up on work 
                                             while indulging in our delectable dishes.</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <img src="dist/Images/service-2.jpg" alt="">
                                        <h2>Dine-In</h2>
                                        <h4>Savor Culinary Delights in Charming Ambiance</h4>
                                        <p class="card-text">Step into our inviting restaurant, where every detail is designed to
                                             create a warm and welcoming atmosphere. Immerse yourself in a culinary journey of flavors,
                                              as our attentive staff ensures a memorable dining experience.</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <img src="dist/Images/service-3.jpg" alt="">
                                        <h2>Takeaway</h2>
                                        <h4>Savor the Taste at Home </h4>
                                        <p class="card-text"> Can't get enough of our scrumptious dishes? Take the flavors of Signature Cuisine
                                             home with you! Our convenient takeaway service ensures you can enjoy our delicious creations wherever you go.</p>
                                    </div>
                                </div>
                    </div>
                </section>
            </div>

            <!--Gallery section start-->
            <section class = "gallery">
                <h1>Our Gallery</h1>
                <div class="gallery-images">
                            <div class="card">
                                <div class="card-body">
                                    <img src="dist/Images/g-1.jpg" alt="">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <img src="dist/Images/g-3.jpg" alt="">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <img src="dist/Images/g-5.jpg" alt="">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <img src="dist/Images/g-7.jpg" alt="">
                                </div>
                            </div>
                </div>
                <div class="gallery-images">
                            <div class="card">
                                <div class="card-body">
                                    <img src="dist/Images/g-2.jpg" alt="">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <img src="dist/Images/g-4.jpg" alt="">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <img src="dist/Images/g-6.jpg" alt="">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <img src="dist/Images/g-8.jpg" alt="">
                                </div>
                            </div>
                </div>
            </section>

            <div class="popupimg">
                    <span>&times;</span>
                    <img src="dist/Images/g-8.jpg" width="500px" height="500px">
            </div>
            <!--Gallery section end-->

            <!--footer section start-->
                <?php
                    include 'footer.php';
                ?>
            <!--footer section end-->
        </div>
        
            <!--javascript file-->
            <script type="text/javascript" src="dist/js/home.js?v=<?php echo time(); ?>"></script>

            <!--bootstrap javascript file-->
            <script type="text/javascript" src="dist/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
            <!--jQuery file-->
            <script type="text/javascript" src="dist/js/jquery-3.6.0.min.js"></script>

    </body>
</html>