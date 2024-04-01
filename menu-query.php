<?php
//Italian cuisine start
$sql = "SELECT * FROM menu WHERE Item_cuisine = 'Italian Cuisine' AND Item_type = 'Appetizers'";
$all_product = $conn->query($sql);

$pasta = "SELECT * FROM menu WHERE Item_cuisine = 'Italian Cuisine' AND Item_type = 'Pasta'";
$pasta_product = $conn->query($pasta);

$mc = "SELECT * FROM menu WHERE Item_cuisine = 'Italian Cuisine' AND Item_type = 'Main Course'";
$mc_product = $conn->query($mc);

$id = "SELECT * FROM menu WHERE Item_cuisine = 'Italian Cuisine' AND Item_type = 'Desert'";
$id_product = $conn->query($id);
//Italian cuisine end

//mexican cuisine start
$mexApp = "SELECT * FROM menu WHERE Item_cuisine = 'Mexican Cuisine' AND Item_type = 'Appetizers'";
$ma_product = $conn->query($mexApp);

$taco = "SELECT * FROM menu WHERE Item_cuisine = 'Mexican Cuisine' AND Item_type = 'Tacos'";
$taco_product = $conn->query($taco);

$mexMc = "SELECT * FROM menu WHERE Item_cuisine = 'Mexican Cuisine' AND Item_type = 'Main Course'";
$mex_product = $conn->query($mexMc);

$mexDes = "SELECT * FROM menu WHERE Item_cuisine = 'Mexican Cuisine' AND Item_type = 'Desert'";
$mdes_product = $conn->query($mexDes);
//Italian cuisine end

//Asian cuisine start
$asApp = "SELECT * FROM menu WHERE Item_cuisine = 'Asian Cuisine' AND Item_type = 'Appetizers'";
$asAp_product = $conn->query($asApp);

$noodle = "SELECT * FROM menu WHERE Item_cuisine = 'Asian Cuisine' AND Item_type = 'Noodle'";
$noodle_product = $conn->query($noodle);

$asMc = "SELECT * FROM menu WHERE Item_cuisine = 'Asian Cuisine' AND Item_type = 'Main Course'";
$asMc_product = $conn->query($asMc);

$asDes = "SELECT * FROM menu WHERE Item_cuisine = 'Asian Cuisine' AND Item_type = 'Desert'";
$ades_product = $conn->query($asDes);
//Italian cuisine end

//Drinks start
$drinks = "SELECT * FROM menu WHERE Item_type = 'Drinks'";
$drink_product = $conn->query($drinks);
//Drinks end

//special start
$special = "SELECT * FROM menu WHERE Item_type = 'special'";
$special_product = $conn->query($special);
//special end

//add to cart
if(isset($_POST['addcrt'])){

    $item_no = $_POST['item_no'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

    $query = "INSERT INTO cart VALUES ('$item_no', '$item_name','$item_price')";
    
    if(mysqli_query($conn, $query)){
        echo '<script>alert("Item added to cart")</script>';
    }
}
?>
