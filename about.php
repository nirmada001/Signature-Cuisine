<?php
    include 'connect.php'
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
        <link rel="stylesheet" type="text/css" href="dist/css/about.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <!--header section start-->
            <?php
                include 'header.php'
            ?>
        <!--header section end-->

        <!--Intro section start-->
        <section class="about-section">
            <div class="about">
                <div class="about-content">
                    <div class="image1">
                         <img src="dist/Images/about-1.jpg" alt="" class="about1">
                    </div>
                    <div class="image2">
                        <img src="dist/Images/about-2.jpg" alt="" class="about2">
                    </div>
                    <div class="about-text">
                        <h1>Signature Cuisine</h1>
                        <h3>''Savor the Moments, Delight in the Flavors!''</h3>
                        <p>At Signature Cuisine, we believe that dining is more than just a meal, 
                            it's an experience that engages all the senses. With a passion for culinary excellence, 
                            warm hospitality, and an inviting ambiance, we aim to create memorable moments for our guests. 
                            From our carefully crafted menu showcasing a fusion of flavors to our attentive service, every 
                            detail is designed to delight and inspire. Join us on a culinary journey that celebrates the art of 
                            food and the joy of dining.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--Intro section end-->

        <!--vision section start-->
        <section class = "vision">
                    <h1>Our Vision and Mission</h1>
                    <div class="vision-images">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="dist/Images/service-1.jpg" alt="">
                                        <h2>Vision</h2>
                                        <p class="card-text">To be the premier destination for discerning diners
                                             seeking exceptional culinary experiences, renowned for our innovative
                                              approach, warm hospitality, and commitment to quality.</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <img src="dist/Images/service-2.jpg" alt="">
                                        <h2>Mission</h2>
                                        <p class="card-text">Our mission is to create unforgettable dining experiences by combining 
                                            culinary artistry, quality ingredients, and personalized service. We strive to continuously 
                                            exceed our guests' expectations through creativity, attention to detail, and a genuine passion
                                             for the culinary arts.</p>
                                    </div>
                                </div>
                    </div>
                </section>

        <!--chef section start-->
        <section class="chef-section">
                <div class="chef">
                    <h1>Our Chef</h1> <br>
                    <h3>~ Culinary Wizards Crafting Gastronomic Magic! ~</h3>
                    <h6>Unleashing culinary artistry with every dish, our talented chefs bring flavors to life. 
                        Prepare to be dazzled by their skillful craftsmanship and passion for creating unforgettable 
                        dining experiences.</h6>

                    <div class="chef-content">
                        <div class="chef-card">
                            <img src="dist/Images/c-1.jpg" alt=""><br><br>
                            <p>Chef Isabella Morales</p>
                        </div>

                        <div class="chef-card">
                            <img src="dist/Images/c-2.jpg" alt=""><br><br>
                            <p>Chef Xavier Rossi</p>
                        </div>

                        <div class="chef-card">
                            <img src="dist/Images/c-3.jpg" alt=""><br><br>
                            <p>Chef Gabriella Nguyen</p>
                        </div>

                        <div class="chef-card">        
                            <img src="dist/Images/c-4.jpg" alt=""><br><br>
                            <p>Chef Marcus Sullivan</p>    
                        </div>
                    </div>
                </div>
            </section>
            <!--chef section end-->

            <!--testimonial section start-->
            <section class = "testimonial">
                    <h1>What Our Visitiors Say</h1>
                    <div class="testimonial-images">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>The best restaurant</h4><br><br>
                                        <p class="card-text">I had an amazing dining experience at Signature Cuisine. The food was outstanding,
                                     with each dish bursting with flavors and beautifully presented. The service was attentive 
                                     and friendly, making us feel welcome throughout the meal. The ambiance was cozy and inviting,
                                      creating the perfect setting for a memorable evening. I highly recommend Signature Cuisine 
                                      to anyone looking for a top-notch dining experience.</p><br>
                                          <div class="card-img">
                                            <img src="dist/Images/t-2.jpg" alt="">
                                            <p>- Sarah -</p>
                                          </div>  
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4>The best restaurant</h4><br><br>
                                        <p class="card-text">I can't say enough good things about Signature Cuisine. The atmosphere was inviting, with a warm and trendy decor.
                                        The menu offered a great variety of options, and the flavors were simply outstanding. The staff was knowledgeable 
                                        and provided excellent recommendations, ensuring that our dining experience was nothing short of perfection. 
                                        From start to finish, it was a memorable evening filled with culinary delights.</p><br>
                                          <div class="card-img">
                                            <img src="dist/Images/t-1.jpg" alt="">
                                            <p>- Emily -</p>
                                          </div>  
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4>The best restaurant</h4><br><br>
                                        <p class="card-text">I recently visited Signature Cuisine and was blown away by the exceptional service and delicious 
                                            food. The staff went above and beyond to accommodate our dietary preferences, and the chef prepared
                                            a customized dish that exceeded our expectations. The attention to detail and the quality of 
                                            ingredients truly showcased the restaurant's commitment to culinary excellence. It was a delightful
                                            experience that I can't wait to repeat. </p><br>
                                          <div class="card-img">
                                            <img src="dist/Images/t-3.jpg" alt="">
                                            <p>- David -</p>
                                          </div>  
                                    </div>
                                </div>
                    </div>
                </section>
            <!--testimonial section end-->

        <!--footer section start-->
            <?php
                include 'footer.php'
            ?>
        <!--footer section end-->

        <!--bootstrap javascript file-->
        <script type="text/javascript" src="dist/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
            <!--jQuery file-->
            <script type="text/javascript" src="dist/js/jquery-3.6.0.min.js"></script>

    </body>
</html>