<?php
include 'connect.php';

//add items
if(isset($_POST['Add'])){

    $item_no = $_POST['item_no'];
    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $item_price = $_POST['item_price'];
    $item_cuisine = $_POST['item_cuisine'];
    $item_type = $_POST['item_type'];
    $file = addslashes(file_get_contents($_FILES["item_image"]["tmp_name"]));

    $query = "INSERT INTO menu VALUES ('$item_no', '$item_name', '$item_description', '$item_price', '$item_cuisine', '$item_type', '$file ')";
    
    if(mysqli_query($conn, $query)){
        echo '<script>alert("Item added successfully")</script>';
        echo '<script>window.location.href = "admin_panel.php";</script>';
        exit();
    } else{
      echo '<script>alert("Error in adding item")</script>';
      echo '<script>window.location.href = "admin_panel.php";</script>';
        exit();
    }
}

//update items
if(isset($_POST['Update'])){

  $item_no = $_POST['item_no'];
  $item_name = $_POST['item_name'];
  $item_description = $_POST['item_description'];
  $item_price = $_POST['item_price'];
  $item_cuisine = $_POST['item_cuisine'];
  $item_type = $_POST['item_type'];
  $file = addslashes(file_get_contents($_FILES["item_image"]["tmp_name"]));

  $query = "UPDATE menu SET item_name = '$item_name', item_description = '$item_description', item_price ='$item_price', item_cuisine= '$item_cuisine', item_type='$item_type', item_image = '$file ' WHERE item_No = '$item_no'";
  
  if ($conn->query($query) === TRUE) {
    echo '<script>alert("Record updated sucessfully")</script>';
    echo '<script>window.location.href = "admin_panel.php";</script>';
    exit();
  } else {
    echo '<script>alert("Error in updating record")</script>' . $conn->error;
    echo '<script>window.location.href = "admin_panel.php";</script>';
    exit();
  }
}

//delete items
if(isset($_POST['Delete'])){

  $item_no = $_POST['item_no'];
    
    $query = "DELETE FROM menu WHERE item_No = '$item_no'";
      if ($conn->query($query) === TRUE) {
          echo '<script>alert("Record deleted sucessfully")</script>';
          echo '<script>window.location.href = "admin_panel.php";</script>';
          exit();
      } else {
          echo '<script>alert("Error in updatdeleting record")</script>' . $conn->error;
          echo '<script>window.location.href = "admin_panel.php";</script>';
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
        <link rel="stylesheet" type="text/css" href="dist/css/menu_data.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <!--header section start-->
            <?php
            include 'admin_header.php';
            ?>
        <!--header section end-->

        <!--add data form section start-->
        <!--add data form section end-->
        <div class="forms-content">
          <h1>Alter Menu Details</h1>
          <div class="row-content">
            <div class="form">
              <form action="menu_data.php" method="post" enctype="multipart/form-data">
               <h3>Add Menu Data:</h3>
                <label>Item No:</label>
                <input type="text" name="item_no" id="item_no" placeholder="item number" class="form-control" required><br>

                <label>Item Name:</label>
                <input type="text" name="item_name" id="item_name" placeholder="item name" class="form-control" required><br>
                

                <label>Item Description:</label>
                <input type="text" name="item_description" id="item_description" placeholder="item description" class="form-control" required><br>

                <label>Item Price:</label>
                <input type="text" name="item_price" id="item_price" placeholder="item price" class="form-control" required><br>

                <label>Item Cuisine:</label>
                <input type="text" name="item_cuisine" id="item_cuisine" placeholder="Cuisine Type" class="form-control" required><br>

                <label>Item Type:</label>
                <input type="text" name="item_type" id="item_type" placeholder="item type (ex: appetizer)" class="form-control" required><br>

                <input type="file" name="item_image" id="item_image"><br><br>
                <input type="submit" value="Add" name="Add" class="button">
              </form>
            </div>


            <div class="form">
              <form action="menu_data.php" method="post" enctype="multipart/form-data">
                <h3>Update Menu Data:</h3>
                <label>Item No:</label>
                <input type="text" name="item_no" id="item_no" placeholder="item number" class="form-control" required><br>

                <label>Item Name:</label>
                <input type="text" name="item_name" id="item_name" placeholder="item name" class="form-control" required><br>
                

                <label>Item Description:</label>
                <input type="text" name="item_description" id="item_description" placeholder="item description" class="form-control" required><br>

                <label>Item Price:</label>
                <input type="text" name="item_price" id="item_price" placeholder="item price" class="form-control" required><br>

                <label>Item Cuisine:</label>
                <input type="text" name="item_cuisine" id="item_cuisine" placeholder="Cuisine Type" class="form-control" required><br>

                <label>Item Type:</label>
                <input type="text" name="item_type" id="item_type" placeholder="item type (ex: appetizer)" class="form-control" required><br>

                <input type="file" name="item_image" id="item_image"><br><br>
                <input type="submit" value="Update" name="Update" class="button">
              </form>
            </div>


            <div class="form">
              <form action="menu_data.php" method="post" enctype="multipart/form-data">
                <h3>Delete Menu Data:</h3>
                <label>Item No:</label>
                <input type="text" name="item_no" id="item_no" placeholder="item number" class="form-control" required><br>

                <input type="submit" value="Delete" name="Delete" class="button">
              </form>
            </div>
          </div>
        </div>

        <!--footer start-->
            <?php
                include 'footer.php';
            ?>
        <!--footerstart-->

    </body>
</html>
