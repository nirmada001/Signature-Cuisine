<?php
include 'connect.php';

include 'menu-query.php';

$query="SELECT cart.item_No, cart.Item_name, cart.Item_price, menu.Item_image FROM cart INNER JOIN menu ON cart.item_No = menu.item_No";
$mycart = $conn->query($query);

if(isset($_POST['remove'])){

    $item_no = $_POST['item_no'];
    

    $remove = "DELETE FROM cart WHERE item_No = '$item_no'";
    
    if ($conn->query($remove) === TRUE) {
        echo '<script>alert("Record deleted sucessfully")</script>';
    } else {
        echo '<script>alert("Error in updatdeleting record")</script>' . $conn->error;
    }
}

 $total = "SELECT SUM(Item_price) FROM cart;";
 $carttotal = $conn->query($total);

?>

<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Resturant website</title>
        <!--font awsome icons-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!--css file-->
        <link rel="stylesheet" type="text/css" href="dist/css/mycart.css?v=<?php echo time(); ?>">
        <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="dist/bootstrap-5.0.1-dist/css/bootstrap.min.css"/>
 
    </head>
    <body>
        <!--header section start-->
        <?php
                include 'header.php';
                ?>
        <!--header section end-->
        <section class="mycart">
            <div class="cart-heading"><h1>My Cart</h1></div>
            <div class="cart-content">
                    <div class="cartitems">
                            <?php
                                while($row = mysqli_fetch_array($mycart)){
                            ?>
                                <form action="mycart.php" method="post" enctype="multipart/form-data">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="<?php echo 'data:image/;base64, '.base64_encode($row['Item_image']).'';?>" alt="Card image cap">
                                        <div class="card-body">
                                            <p><?php echo $row['item_No']; ?></p>
                                            <input type="hidden" name="item_no" id="item_no" value="<?php echo $row['item_No']; ?>">
                                            <p><?php echo $row['Item_name']; ?></p>
                                            <p>Rs.<?php echo $row['Item_price']; ?></p>

                                            <button type="submit" name="remove" class="btn btn-primary">Remove</button>
                                            
                                        </div>
                                    </div>
                                </form>
                            <?php
                                 }
                            ?>
                    </div>
            </div>
            <a type="submit" name="Back" class="btn btn-primary" href="home.php">Back</a>
        </section>

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

