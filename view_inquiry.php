<?php
    include 'connect.php';

    $sql = "SELECT * FROM sc_inquiry";
    $all_product = $conn->query($sql);
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
        <link rel="stylesheet" type="text/css" href="dist/css/veiw_feedback.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <!--header section start-->
            <?php
            include 'admin_header.php';
            ?>
        <!--header section end-->
        <div class="tabel-content">
            <h1>View Customer Inquiry</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Inquiry Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">No of people</th>
                    <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_array($all_product)){
                    ?>
                        <tr>
                        <td><?php echo $row['inq_id']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['people']; ?> People</td>
                        <td><?php echo $row['description']; ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                                        
                </tbody>
            
            </table>
        </div>
        <!--footer start-->
            <?php
                include 'footer.php';
            ?>
        <!--footerstart-->

    </body>
</html>