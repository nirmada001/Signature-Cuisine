<?php
 include 'connect.php';
//login
if(isset($_POST['userlogin'])){

    $username = $_POST['lusername'];
    $lpassword = $_POST['lpassword'];

    // sql query
    $stmt = $conn->prepare("SELECT * FROM sc_users WHERE username = ?");
    $stmt->bind_param("s", $username);

     // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
 
    if ($result->num_rows === 1) {
      // Fetch the user data
      $user = $result->fetch_assoc();
      
      // Verify the entered password with the hashed password in the database
      if (password_verify($lpassword, $user['upassword'])) {
          echo '<script>alert("Login Successful")</script>';
          echo '<script>window.location.href = "home.php";</script>';
          exit();
      } else {
          // Incorrect password
          echo '<script>alert("Login unsuccessful..Please enter correct username and password")</script>';
          echo '<script>window.location.href = "loginpage.php";</script>';
          exit();
      }
  } else {
     // User not found
     echo '<script>alert("Login unsuccessful..Please enter correct username and password")</script>';
     echo '<script>window.location.href = "loginpage.php";</script>';
     exit();
 }

 // Close the statement and database connection
 $stmt->close();
 $conn->close();
}
?>