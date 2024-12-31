<?php include('includes/header.php');?>


    <!-- Custom CSS for styling -->
    <style>
       

        .about-title {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .about-paragraph {
            font-size: 18px;
            text-align: center;
            color: #555;
            margin-bottom: 40px;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
        }

        .card-text {
            font-size: 16px;
            color: #555;
        }

        .card-deck .card {
            transition: transform 0.3s ease;
        }

        .card-deck .card:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .card-deck {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>

    <!-- About Section -->
    <div class="container pt-3 about-section">
        <div class="row">
            <!-- Title -->
            <div class="col-12">
                <h2 class="about-title">About Our Event</h2>
            </div>
        </div>

        <div class="row">
            <!-- Paragraph -->
            <div class="col-12">
                <p class="about-paragraph">
                    Join us for an unforgettable experience at our upcoming event. Whether you're a music lover, a
                    foodie, or just someone who loves to have a good time, there's something for everyone. Get ready for
                    world-class performances, incredible food, and a vibrant atmosphere.
                </p>
            </div>
        </div>

        <!-- Image Cards Section -->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img src="assests/img/arjit.jpg" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Live Music</h5>
                        <p class="card-text">Experience electrifying live music performances by renowned artists.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img src="assests/img/lata.jpeg" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Food & Drink</h5>
                        <p class="card-text">Indulge in delicious food and beverages from local vendors and chefs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img src="assests/img/dum.jpg" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Fun Activities</h5>
                        <p class="card-text">Enjoy fun and interactive activities suitable for all ages.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>