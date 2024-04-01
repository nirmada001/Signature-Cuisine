<?php
include 'connect.php';

include 'menu-query.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Resturant website</title>
        <!--font awsome icons-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!--css file-->
        <link rel="stylesheet" type="text/css" href="dist/css/menu_display.css?v=<?php echo time(); ?>">
        <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="dist/bootstrap-5.0.1-dist/css/bootstrap.min.css"/>
 
    </head>
    <body>
            <!--header section start-->
                    <?php
                    include 'header.php';
                    ?>
            <!--header section end-->
                <!--Menu section start-->
                <video autoplay muted loop id="myVideo">
                    <source src="dist/Images/menu3.mp4" type="video/mp4">
                </video>
                <div class="overlay">
                    <div class="inner">
                            <div class="menu-heading">
                                    <h1>Signature Cuisine Menu</h1> <br>
                                    <h3>~ Unleash Your Palate's Potential! ~</h3>
                            </div>
                    </div>
                </div>
                    
                    <!--special menu section start-->
                    <section class="special-section">
                        <div class="special-heading">
                                <h1>Our Special Dishes</h1> <br><br>
                                <div class="special-content">
                                    <div class="special">
                                        <?php
                                            while($row = mysqli_fetch_array($special_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">

                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        
                                    </div>
                                </div>
                        </div>
                    </section>
                    <!--special menu section end-->

                    <!--Italian menu section start-->
                    <section class="italian-menu">
                        <div class="menu-heading">
                                <h1>Italian Cuisine</h1> <br><br>
                                <div class="menu-content">
                                    <div class="italian-appetizer">
                                        <h2>Appetizers:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($all_product)){
                                        ?>
                                        <form action="" method="POST">
                                              <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">

                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        
                                    </div>

                                    <div class="italian-pasta">
                                        <h2>Pasta:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($pasta_product)){
                                        ?>
                                        
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">

                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="italian-maincourse">
                                        <h2>Main Course:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($mc_product)){
                                        ?>

                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p> Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">

                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="italian-desert">
                                        <h2>Deserts:</h2><br>
                                        
                                        <?php
                                            while($row = mysqli_fetch_array($id_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">

                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </section>
                    <!--Italian menu section end-->

                    <!--Mexican menu section start-->
                    <section class="mexican-menu">
                        <div class="menu-heading">
                                <h1>Mexican Cuisine</h1> <br><br>
                                <div class="menu-content">
                                    <div class="mexican-appetizer">
                                        <h2>Appetizers:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($ma_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p> <?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">

                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        
                                    </div>

                                    <div class="mexican-taco">
                                        <h2>Tacos:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($taco_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">
                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="mexican-maincourse">
                                        <h2>Main Course:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($mex_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">
                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="mexican-desert">
                                        <h2>Deserts:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($mdes_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">
                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </section>
                    <!--Mexican menu section end-->

                    <!--Asian menu section start-->
                    <section class="asian-menu">
                        <div class="menu-heading">
                                <h1>Asian Cuisine</h1> <br><br>
                                <div class="menu-content">
                                    <div class="asian-appetizer">
                                        <h2>Appetizers:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($asAp_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">
                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        
                                    </div>

                                    <div class="asian-noodle">
                                        <h2>Noodles:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($noodle_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">
                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="asian-maincourse">
                                        <h2>Main Course:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($asMc_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">
                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="asian-desert">
                                        <h2>Deserts:</h2><br>
                                        <?php
                                            while($row = mysqli_fetch_array($ades_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">
                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </section>
                    <!--Asian menu section end-->

                    <!--Drinks menu section start-->
                    <section class="drinks-section">
                        <div class="drink-heading">
                                <h1>Drinks</h1> <br><br>
                                <div class="drink-content">
                                    <div class="drinks">
                                        <?php
                                            while($row = mysqli_fetch_array($drink_product)){
                                        ?>
                                        <form action="" method="POST">
                                            <div class="menu-card">
                                                <div class="image">
                                                    <img src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="image" height="100" width="100">'
                                                </div>
                                                    <p><?php echo $row['Item_name']; ?></p>
                                                    <p>Rs.<?php echo $row['Item_price']; ?></p>
                                                    <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                                    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['Item_name']; ?>">
                                                    <input type="hidden" name="item_price" id="item_price" value="<?php echo $row['Item_price']; ?>">

                                                    <button type="submit" name="addcrt">Add to cart</button>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        
                                    </div>
                                </div>
                        </div>
                    </section>
                    <!--Drinks menu section end-->

                <!--Menu section end-->
            <!--footer section start-->
            <?php
                    include 'footer.php';
                ?>
            <!--footer section end-->

            <!--javascript file-->
            <script type="text/javascript" src="dist/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="dist/js/jquery-3.6.0.min.js"></script>
    </body>
</html>

