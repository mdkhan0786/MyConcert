<?php include('includes/header.php');?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .events-title {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            color: #343a40;
            margin-bottom: 40px;
        }

        .event-box {
            margin-bottom: 30px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .event-box img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .event-box .event-info {
            padding: 20px;
        }

        .event-box .event-info h4 {
            font-size: 24px;
            font-weight: bold;
            color: #343a40;
        }

        .event-box .event-info p {
            color: #555;
            font-size: 16px;
            margin-top: 10px;
        }

        .event-box .event-info .event-date,
        .event-box .event-info .event-location {
            color: #007bff;
            font-size: 14px;
            font-weight: bold;
            margin-top: 15px;
        }

        .event-box .event-info .event-link {
            display: inline-block;
            margin-top: 20px;
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
        }

        .event-box .event-info .event-link:hover {
            color: #0056b3;
        }

        .event-box .event-info .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .event-box .event-info .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 60px;
            padding: 20px;
            background-color: #343a40;
            color: white;
        }

        .footer p {
            margin-bottom: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .event-box img {
                height: 200px;
            }
        }
    </style>
</head>
<body>

    <!-- Events Container -->
    <div class="container py-5">
        <h2 class="events-title">Upcoming Events</h2>

        <div class="row">
            <!-- Event 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="event-box">
                    <img src="assests/img/kumar.jpeg" alt="Event 1 Image">
                    <div class="event-info">
                        <h4>Music Concert 2024</h4>
                        <p>A spectacular live music event featuring top artists from around the world.</p>
                        <p class="event-date"><i class="fa fa-calendar"></i> January 25, 2024</p>
                        <p class="event-location"><i class="fa fa-map-marker-alt"></i> Sydney Opera House, Australia</p>
                        <a href="#" class="event-link">Get Tickets</a>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="event-box">
                    <img src="assests/img/lata.jpeg" alt="Event 2 Image">
                    <div class="event-info">
                        <h4>Art Exhibition</h4>
                        <p>An exclusive exhibition of modern art by international artists.</p>
                        <p class="event-date"><i class="fa fa-calendar"></i> February 14, 2024</p>
                        <p class="event-location"><i class="fa fa-map-marker-alt"></i> The Louvre, Paris, France</p>
                        <a href="#" class="event-link">Explore Exhibits</a>
                    </div>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="event-box">
                    <img src="assests/img/bolly.jpeg" alt="Event 3 Image">
                    <div class="event-info">
                        <h4>Tech Conference 2024</h4>
                        <p>Join leading innovators in technology for a groundbreaking conference.</p>
                        <p class="event-date"><i class="fa fa-calendar"></i> March 10, 2024</p>
                        <p class="event-location"><i class="fa fa-map-marker-alt"></i> Silicon Valley, California</p>
                        <a href="#" class="event-link">Register Now</a>
                    </div>
                </div>
            </div>

            <!-- Event 4 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="event-box">
                    <img src="assests/img/arjit.jpg" alt="Event 4 Image">
                    <div class="event-info">
                        <h4>Cooking Masterclass</h4>
                        <p>Learn from professional chefs in this interactive cooking class.</p>
                        <p class="event-date"><i class="fa fa-calendar"></i> April 5, 2024</p>
                        <p class="event-location"><i class="fa fa-map-marker-alt"></i> Culinary School, New York, USA</p>
                        <a href="#" class="event-link">Join the Class</a>
                    </div>
                </div>
            </div>

            <!-- Event 5 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="event-box">
                    <img src="assests/img/pv.jpg" alt="Event 5 Image">
                    <div class="event-info">
                        <h4>Dance Performance</h4>
                        <p>Experience an incredible live dance performance showcasing diverse styles.</p>
                        <p class="event-date"><i class="fa fa-calendar"></i> May 20, 2024</p>
                        <p class="event-location"><i class="fa fa-map-marker-alt"></i> Royal Theatre, London, UK</p>
                        <a href="#" class="event-link">Get Your Tickets</a>
                    </div>
                </div>
            </div>

            <!-- Event 6 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="event-box">
                    <img src="assests/img/singer.jpg" alt="Event 6 Image">
                    <div class="event-info">
                        <h4>Film Festival</h4>
                        <p>Enjoy the best short films and feature films at this renowned festival.</p>
                        <p class="event-date"><i class="fa fa-calendar"></i> June 15, 2024</p>
                        <p class="event-location"><i class="fa fa-map-marker-alt"></i> Venice, Italy</p>
                        <a href="#" class="event-link">See Films</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php') ?>