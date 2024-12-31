<?php include('includes/header.php');?>

    
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
        <a href="dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="portal.php"><i class="fas fa-user"></i> Account</a>
        <a href="reserve.php"><i class="fas fa-calendar-check"></i> Reserve Set</a>
    </div>

    <!-- Main Content -->
    <div class="main-content p-4">
        <h2 class="text-center mb-4"> Now Book Your Seat </h2>
        
   
    
   
<div class="container  pt-4 pb-3">
    <div class="row d-flex align-items-center justify-content-between border">
        <!-- Image Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv box text-center">
                <img src="assests/img/lata.jpeg" alt="Arjit" class=" rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
        </div>

        <!-- Title and Artist Info Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
                <h4 class="font-weight-bold">Watch the Live Performance</h4>
                <p><i class="fa register fa-user"></i>  Udit Narayan / Bollywood</p>
                
            </div>
        </div>

        <!-- Time and Location Info Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
                <p><i class="fa register fa-inr"></i> 300 INR </p>
                <p><i class="fa fa-map-marker register"></i> Kompally Hyderabad - Serenity</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
              
                <p class="btn btn-primary"   onclick="openPhonePe()"  class="btn ">Pay Now</p>
                <p><i class="fa  register fa-date"></i> Feb/12/2025 Night</p>
            </div>
        </div>


    </div>
</div>


<div class="container pb-3">
    <div class="row d-flex align-items-center justify-content-between border">
        <!-- Image Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv box text-center">
                <img src="assests/img/arjit.jpg" alt="Arjit" class=" rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
        </div>

        <!-- Title and Artist Info Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
                <h4 class="font-weight-bold">Watch the Live Performance</h4>
                <p><i class="fa register fa-user"></i> Arjit Singh / Bollywood</p>
            </div>
        </div>

        <!-- Time and Location Info Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
                <p><i class="fa register fa-inr"></i> 700 INR </p>
                <p><i class="fa register fa-map-marker"></i> Kompally Hyderabad - Serenity</p>
            </div>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
              
                <p class="btn btn-primary"  onclick="openPhonePe()" class="btn ">Pay Now </p>
                <p><i class="fa register fa-date"></i> Feb/12/2025 Night</p>
            </div>
        </div>


    </div>
</div>


<div class="container pb-3">
    <div class="row d-flex align-items-center justify-content-between border">
        <!-- Image Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv box text-center">
                <img src="assests/img/bolly.jpeg" alt="Arjit" class=" rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
        </div>

        <!-- Title and Artist Info Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
                <h4 class="font-weight-bold">Watch the Live Performance</h4>
                <p><i class="fa register fa-user"></i> Demo / Bollywood</p>
            </div>
        </div>

        <!-- Time and Location Info Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
                <p><i class="fa register fa-inr"></i> 500 INR </p>
                <p><i class="fa register fa-map-marker"></i> Kompally Hyderabad - Serenity</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
              
                <p class="btn btn-primary"  onclick="openPhonePe()" class="btn ">Pay Now </p>
                <p><i class="fa register fa-date"></i> Jan/12/2025 Night</p>
            </div>
        </div>


    </div>
</div>

<div class="container pb-3">
    <div class="row d-flex align-items-center justify-content-between border">
        <!-- Image Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv box text-center">
                <img src="assests/img/kumar.jpeg" alt="Arjit" class=" rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
        </div>

        <!-- Title and Artist Info Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
                <h4 class="font-weight-bold">Watch the Live Performance</h4>
                <p><i class="fa register fa-user"></i> K K dash / Bollywood</p>
            </div>
        </div>

        <!-- Time and Location Info Section -->
        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
                <p><i class="fa register fa-inr"></i> 400 INR </p>
                <p><i class="fa fa-map-marker register"></i> Kompally Hyderabad - Serenity</p>
            </div>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
              
                <p class="btn btn-primary"  onclick="openPhonePe()"  id="paymentButton" class="btn "> Pay Now </p>
                <p><i class="fa fa-date register"></i> March /12/2025 Night</p>
            </div>
        </div>


    </div>
</div>


<script>
    function openPhonePe() {
        window.location = "phonepe://";
        setTimeout(function() {
            window.location = "https://www.phonepe.com";  
        }, 1000);  
    }
</script>

       
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>






</body>
</html>

   
