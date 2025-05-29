
<?php 
$servername = "localhost";
$username= "root";
$password="";
$dbname= "myproject";

$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
die("connection Faild". $conn->connect_error);
};

// Check if required fields are set
if (isset($_POST['Name'], $_POST['Lname'], $_POST['Email'], $_POST['Password'])) {
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $lname = mysqli_real_escape_string($conn, $_POST['Lname']); // this is Contact
    $password = mysqli_real_escape_string($conn, $_POST['Password']);

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $checkEmail);
    if (mysqli_num_rows($result) > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Email already registered!']);
        exit();
    } else {
        // Insert new user
        $insert = "INSERT INTO users (Name, Email, Contact, Password) 
                   VALUES ('$name', '$email', '$lname', '$password')";
        $stmtInsert = mysqli_query($conn, $insert);

        if ($stmtInsert) {
            echo json_encode(['status' => 'success', 'message' => 'Register success!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error: ' . mysqli_error($conn)]);
        }
    }
    mysqli_close($conn);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Missing required fields.']);
}
?>