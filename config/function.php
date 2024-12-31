<?php
@session_start(); 
include_once('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';  

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $_SESSION['user_email'] = $email;  
    $mail = new PHPMailer(true); 
    try {
        if (isset($_FILES['file'])) {
            // Get file details
            $file = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_error = $_FILES['file']['error'];
            // Check for file upload errors
            if ($file_error !== UPLOAD_ERR_OK) {
                echo "<script>alert('Error uploading file: " . $file_error . "');</script>";
                exit();
            }
            $upload_dir = 'assests/uploads/';
            $file_path = $upload_dir . basename($file);
        }
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mdtonnutax786@gmail.com';
        $mail->Password = 'ujmjlwibdxspdpsz'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom('mdtonnutax786@gmail.com', 'Demo');
        $mail->addAddress($email, $name); 
        $mail->isHTML(true);
        $mail->Subject = 'Registration Successful';
        $mail->Body    = "Dear $name,<br><br>Thank you for registering with us. Please reserve your seat.<br><br>Best regards,<br>Your Company";
        $mail->send();

        $sql = "INSERT INTO users (Name, Email, Contact, Address, ID_Proff) VALUES ('$name', '$email', '$contact', '$address', '$file_path')";
        if ($conn->query($sql) === TRUE) {
          header("Location: email.php");
          exit();
        } 
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>
