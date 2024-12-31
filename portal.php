<?php include('includes/header.php') ?>
<?php include('includes/model.php') ?>



<?php
// print_r($_SESSION);

// Include the database connection
include('config/config.php');

// Fetch all students from the database$
$email =$_SESSION['user_email'];
$Log_userId = "SELECT * FROM users where Email = '$email' ";
$result = $conn->query($Log_userId);

// $sql = "SELECT * FROM users where ID = '$LogID' ";

// $result = $conn->query($sql);

// Add Student Logic

// Delete Student Logic
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_sql = "DELETE FROM students WHERE id = $id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Student deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}

?>

    
    <!-- Custom CSS for additional styling -->
    <style>
        .sidebar {
            background-color: #343a40;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            font-size: 18px;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #575757;
            color: #fff;
        }
        .sidebar .active {
            background-color: #007bff;
            color: white;
        }
        .main-content {
            margin-left: 250px;
        }
        .jumbotron {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .table td a {
            margin-right: 10px;
        }
        .card {
            margin-top: 20px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .card-body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center text-white">Dashboard</h3>
        <a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="portal.php"><i class="fas fa-user"></i> Account</a>
        <a href="reserve.php"><i class="fas fa-calendar-check"></i> Reserve Set</a>
    </div>

    <!-- Main Content -->
    <div class="main-content p-4">
        <h2 class="text-center mb-4"> Now Book Your Seats </h2>
        <!-- Table of Students -->
        <div class="jumbotron">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                       
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Payment Status </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                           $name= $row['Name'];
                           $email=  $row['Email'];
                          $contact = $row['Contact'];
                            $address = $row['Address'];
                            $userId = $row['ID'];
                         }
                    } 
                    ?>
                            <tr>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $contact; ?></td>
                                    <td><?php echo $address; ?></td>
                                     <td>Pending</td>
                                    <td>
                                        <button data-bs-toggle='modal' id="editbtn" data-id="<?php echo $userId; ?>"  data='$row' data-bs-target='#EditModel' class='btn btn-warning btn-sm' ><i class='fas fa-edit'></i></button>
                                        <button class='btn btn-danger btn-sm'><i class='fas fa-trash'  id="In-Progres"></i> </button>
                                    </td>
                                   
                                </tr>
                </tbody>
            </table>
        </div>
        <script>

$(document).ready(function() {
    // When the Edit button is clicked
    $(".editbtn").click(function() {
        var userId = $(this).data('id');

        $("#EditID").val(userId);
    });
});

$(document).ready(function() {
    // When the Edit button is clicked
    $("#In-Progres").click(function() {
        alert("Delete Function are In-Progress");

     
    });

    
});



            </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

   
