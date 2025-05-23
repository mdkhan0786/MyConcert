<?php include('model.php'); 

?>
<!DOCTYPE html>
<html lang="zxx">
<header>

    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Concert </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link rel="stylesheet" src="/assests/css/style.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 <!-- <script src="assests/js/main.js"> </script> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style>
  .navbar {
    background-color: black; /* Set navbar background to black */
}

.navbar-nav .nav-link {
    color: white; /* Set nav link text color to white */
    font-weight: bold;
    padding: 10px 15px;
}

/* Hover effect for nav links */
.navbar-nav .nav-link:hover {
    color: white; /* Ensure the text stays white on hover */
    text-decoration: underline; /* Underline text on hover */
    text-decoration-color: red; /* Set underline color to red */
}

/* Book Button Styling */
.btn-primary {
    background-color: red; /* Set button background to red */
    border-color: red; /* Set border color to red */
    color: white; /* Button text color */
}

.nav-item:hover {
    /* Darker red on hover */
    border-color: #d32f2f;
    color: white; /* Ensure button text color stays white */
}

.btn-primary {
    display: inline-block;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 40px;
    color: #ffffff;
    text-align: center;
    border-radius: 50px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b)), -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b));
    background-image: -o-linear-gradient(left, #ee8425 0%, #f9488b 100%), -o-linear-gradient(left, #ee8425 0%, #f9488b 100%);
    background-image: linear-gradient(to right, #ee8425 0%, #f9488b 100%), linear-gradient(to right, #ee8425 0%, #f9488b 100%);
}


.btn{
  display: inline-block;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 20px;
  
    color: #ffffff;
    text-align: center;
    border-radius: 20px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b)), -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b));
    background-image: -o-linear-gradient(left, #ee8425 0%, #f9488b 100%), -o-linear-gradient(left, #ee8425 0%, #f9488b 100%);
    background-image: linear-gradient(to right, #ee8425 0%, #f9488b 100%), linear-gradient(to right, #ee8425 0%, #f9488b 100%)
}

.register{
  display: inline-block;
    font-size: 9px;
    font-weight:bold ;
    padding: 5px 10px;
    color: #ffffff;
    text-align: center;
    border-radius: 10px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b)), -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b));
    background-image: -o-linear-gradient(left, #ee8425 0%, #f9488b 100%), -o-linear-gradient(left, #ee8425 0%, #f9488b 100%);
    background-image: linear-gradient(to right, #ee8425 0%, #f9488b 100%), linear-gradient(to right, #ee8425 0%, #f9488b 100%);

}


.Img-Section{
  display: inline-block;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 40px;
    color: #ffffff;
    text-align: center;
    
    background-image: -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b)), -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b));
    background-image: -o-linear-gradient(left, #ee8425 0%, #f9488b 100%), -o-linear-gradient(left, #ee8425 0%, #f9488b 100%);
    background-image: linear-gradient(to right, #ee8425 0%, #f9488b 100%), linear-gradient(to right, #ee8425 0%, #f9488b 100%);


}


.countdown-item {
  display: inline-block;
    font-size : 25px;
    font-weight : 600;
    padding : 12px 40px;
    text-align: center;
    border-radius: 50px;
    font-weight:bold;
    box-sizing: border-box;
}

.about-Img{
    width: 100%;
    height: 500px;
}
//*********shedual section */
.copyright{
    text-align: center;
}



 </style>


</head>

<body>
<nav class="navbar sticky-top navbar-expand-lg bg-light p-3">
    <div class="container d-flex justify-content-between w-100">
      <!-- Logo on the left -->
      <a class="navbar-brand" href="#"><i class="fa register fa-music"> </i> MyEvent </a>

      <!-- Toggler button for mobile view -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar links in the center -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item font-weight-bold text-dark">
            <a class="nav-link text-dark" href="../index.php">Home</a>
        </li>
    
    </ul>
</div>

<!-- Book button on the right -->
<a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary ml-3" href="#">Book Now</a>

    </div>
  </nav>

