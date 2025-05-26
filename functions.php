<?php// Must be enabled for sessions
require_once __DIR__ ."/config/config.php";
require_once __DIR__ ."/includes/model.php";
require_once __DIR__ ."/includes/header.php";
require_once __DIR__ ."/auth/login.php";
// require_once __DIR__ ."/auth/register.php";
include "auth/register.php";

if (isset($_POST['Submit'])) {
    $name = trim($_POST['name']);
    $email = strtolower(trim($_POST['email']));
    $contact = trim($_POST['contact']);
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
     
    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $checkEmail);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['registerMessage'] = "Email already registered!";
    } else {
        // Insert new user
        $insert = "INSERT INTO users (Name, Email, Contact, Password) 
                   VALUES ('$name','$email','$contact','$hashedPassword')";
        $stmtInsert = mysqli_query($conn, $insert);

        if ($stmtInsert) {
            $_SESSION['registerMessage'] = "Register Success!";
        } else {
            $_SESSION['registerMessage'] = "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}


if (isset($_POST['Login'])) {
    // Get and sanitize input
    $lemail = trim($_POST['Lemail']);
    $lpassword = $_POST['Lpassword'];

    // Escape input to prevent SQL injection (basic protection)
    $lemail = mysqli_real_escape_string($conn, $lemail);

    // Run SQL query
    $query = "SELECT * FROM users WHERE Email = '$lemail'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify password (assuming it's hashed)
        if (password_verify($lpassword, $user['Password'])) {
            $_SESSION['useEmail'] = $user['Email'];
            header('Location: auth/event.php');
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that email.";
    }

    mysqli_close($conn);


}
?>

