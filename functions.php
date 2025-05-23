<?php
 // Must be enabled for sessions
include "config/config.php"; // Ensure this file defines $conn

if (isset($_POST['Submit'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $contact  = $_POST['contact'];
    $password = $_POST['password'];

    // $_SESSION['useEmail'] = $name;

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $checkEmail);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['registerMessage'] = "Email already registered!";
    } else {
        // Insert new user
        $insert = "INSERT INTO users (Name, Email, Contact, Password) 
                   VALUES ('$name','$email','$contact','$password')";
        $stmtInsert = mysqli_query($conn, $insert);

        if ($stmtInsert) {
            $_SESSION['registerMessage'] = "Register Success!";
        } else {
            $_SESSION['registerMessage'] = "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}

//Login here 

if (isset($_POST['Login'])) {
    $lemail    = $_POST['Lemail'];
    $lpassword = $_POST['Lpassword'];

    $_SESSION['useEmail'] = $email;

    // Check if email already exists
    $login = "SELECT * FROM users WHERE Email = '$lemail' and Password = '$lpassword'";
    $result = mysqli_query($conn, $checkEmail);

    if (mysqli_num_rows($result) > 0) {
        header('Location /Event.php')
        exit();
        
    } else {
       echo "eroor";
       
    }

    mysqli_close($conn);
}
?>

