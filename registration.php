<?php
 include 'connect.php';

$fname = $email = $username = $upassword = '';
$fnameErr = $emailErr = $usernameErr = $passwordErr = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['name'])) {
        $fnameErr = "Name is required";
    } else {
        $fname = test_input($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $emailErr = "Please enter a valid email";
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST['username'])) {
        $usernameErr = "Please enter a valid username";
    } else {
        $username = test_input($_POST['username']);

        // Check if the username already exists in the database
        $query = "SELECT * FROM sc_users WHERE username = '$username'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $usernameErr = "Username already exists";
        }
    }

    if (empty($_POST['password'])) {
        $passwordErr = "Please enter a valid Password";
    } else {
        $upassword = test_input($_POST['password']);
        // Hash the password using bcrypt
        $upassword = password_hash($upassword, PASSWORD_BCRYPT);
    }

    // Check if all error messages are empty, indicating valid data
    if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($telnoErr) && empty($usernameErr) && empty($passwordErr)) {
        $query = "INSERT INTO sc_users VALUES ('$fname', '$email', '$username', '$upassword')";

        if ($conn->query($query) === TRUE) {
            echo '<script>alert("Registration Successfull")</script>';
            // Redirect to the home page
            echo '<script>window.location.href = "home.php";</script>';
            exit(); // Make sure to exit the script after the redirect
        } else {
            echo '<script>alert("Registration unsuccessfull: ' . $conn->error . '")</script>';
        }
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>