<?php include('includes/header.php');?>
<?php include('includes/model.php'); ?>

    <div class="row">
        <div class="col-12">
            <div class="Img-Section position-relative">
                <video class="img-fluid w-100" autoplay loop muted>
                    <source src="assests/img/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Text and Button Overlay -->
                 <section class="Img-Section ">
                    <div class="overlay-content">
                        <h2>Don't Miss Out on Our Event!</h2>
                        <p>Get your tickets now and be part of the action.</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary">Book Now</a>
                    </div>
                </section>
            </div>
        </div>
    </div>


<!-- Countdown Section -->
 <div class="jumbotron p-2">
    <div class="container p-3 border">
        <section class="countDown">
            <div class="row justify-content-center">
                <!-- Countdown Title -->
                <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                    <div class="countdown-box text-center p-4">
                        <div class="countdown-text">
                            <p class="font-weight-bold" style="font-size: 1.2rem; color: #007bff;">Concert Date</p>
                            <h3 class="font-weight-bold" style="color: #343a40;">Count Every Second Until the Event</h3>
                        </div>
                    </div>
                </div>

                <!-- Countdown Timer -->
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="countdown-box text-center p-4">
                        <div class="row justify-content-center">
                            <!-- Days -->
                            <div class="col-md-3 col-lg-3 col-12">
                                <div class="countdown-item">
                                    <div class="countdown-label">Days</div>
                                    <div class="countdown-number" id="days">0</div>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="col-md-3 col-lg-3 col-12">
                                <div class="countdown-item">
                                    <div class="countdown-label">Hours</div>
                                    <div class="countdown-number" id="hours">0</div>
                                </div>
                            </div>

                            <!-- Minutes -->
                            <div class="col-md-3 col-lg-3 col-12">
                                <div class="countdown-item">
                                    <div class="countdown-label">Minutes</div>
                                    <div class="countdown-number" id="minutes">0</div>
                                </div>
                            </div>

                            <!-- Seconds -->
                            <div class="col-md-3 col-lg-3 col-12">
                                <div class="countdown-item">
                                    <div class="countdown-label">Seconds</div>
                                    <div class="countdown-number" id="seconds">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- About Us Section -->
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
            <div class="Img">
                <img src="assests/img/singer.jpg" class="about-Img" alt="About Us Image">
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="text-section">
                <h2>About the Music Event</h2>
                <p>
                    The <strong>[Yearl Concert]</strong> is not just a concert; it’s an unforgettable celebration of music, culture, and creativity. Whether you're a die-hard fan or new to the scene, this event brings together a vibrant mix of performances, workshops, and live experiences that will leave you inspired and energized. From rising stars to legendary artists, the stage is set for an exhilarating experience like no other.
                </p>
                <p><i>
                    Join us for a weekend where the power of music unites us all. Discover new artists, connect with fellow music lovers, and be a part of something truly extraordinary. Here’s what you can look forward to: </i>
                </p>
                <ul>
                    <li><strong>Live Performances:</strong> Experience unforgettable sets from top musicians across multiple genres.</li>
                    <li><strong>Workshops & Masterclasses:</strong> Learn from the industry’s finest and unlock the secrets behind great music production, performance, and more.</li>
                    <li><strong>Exclusive Networking:</strong> Connect with artists, influencers, and fellow music lovers in an environment that fosters collaboration.</li>
                    <li><strong>Immersive Experiences:</strong> Get ready for interactive installations and a festival atmosphere that will make this event truly one-of-a-kind.</li>
                    
                </ul>
                <p>
                   <i> This is your chance to be part of something bigger. Whether you're here to dance, learn, or simply enjoy the music, there’s something for everyone at <strong>[Event Name]</strong>. Don’t miss out on the most exciting music event of the year! </i>
                </p>
            </div>
        </div>
    </div>
</div>

<!--Testimonial 1-->
<div class="jumbotron" style="background-color: #f8f9fa; padding: 30px 0;">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold" style="color: #343a40;">Meet the Stars of the Show</h2>
            <p class="text-muted p-2">Get ready for an unforgettable musical experience! These are the talented voices who will light up the stage, each bringing their unique style and energy to the concert. Explore the profiles of our incredible performers, and get ready to be amazed by their performances!"</p>
        </div>
        <div class="row">
            <!-- Speaker Card 1 -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="card shadow-lg border-0 rounded" style="width: 100%; height: 100%;">
                    <img src="assests/img/arjit.jpg" class="card-img-top rounded" alt="Speaker Image" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-size: 1.2rem; color: #495057;">Arjit Kumar</h5>
                        <p class="card-text text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="https://en.wikipedia.org/wiki/Arijit_Singh" target="_blank" class="btn btn-primary btn-block mt-2">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- Speaker Card 2 -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="card shadow-lg border-0 rounded" style="width: 100%; height: 100%;">
                    <img src="assests/img/lata.jpeg" class="card-img-top rounded" alt="Speaker Image" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-size: 1.2rem; color: #495057;">Udit Narayan</h5>
                        <p class="card-text text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="https://www.imdb.com/name/nm0621257/?ref_=ls_t_7"  target="_blank" class="btn btn-primary btn-block mt-2">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- Speaker Card 3 -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="card shadow-lg border-0 rounded" style="width: 100%; height: 100%;">
                    <img src="assests/img/kumar.jpeg" class="card-img-top rounded" alt="Speaker Image" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-size: 1.2rem; color: #495057;">K.K Dash</h5>
                        <p class="card-text text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="https://en.wikipedia.org/wiki/KK_(singer)"  target="_blank" class="btn btn-primary btn-block mt-2">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- Speaker Card 4 -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="card shadow-lg border-0 rounded" style="width: 100%; height: 100%;">
                    <img src="assests/img/bolly.jpeg" class="card-img-top rounded" alt="Speaker Image" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-size: 1.2rem; color: #495057;">Demo</h5>
                        <p class="card-text text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="https://en.wikipedia.org/wiki/Shreya_Ghoshal" target="_blank" class="btn btn-primary btn-block mt-2">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container p-3">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="text-center">
            <h1 class="text-center">Our Schedule</h1>
            <p class="text-center"> Do not miss anything topic about the events</p>
            </div>
        </div>
    </div>
</div>

<div class="container pb-3">
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
                <p><i class="fa register fa-clock"></i> 08:00 AM - 10:00 AM</p>
                <p><i class="fa fa-map-marker register"></i> Kompally Hyderabad - Serenity</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
              
                <p class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" class="btn ">Register Now </p>
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
                <p><i class="fa register fa-clock"></i> 08:00 AM - 10:00 AM</p>
                <p><i class="fa register fa-map-marker"></i> Kompally Hyderabad - Serenity</p>
            </div>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
              
                <p class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" class="btn ">Register Now </p>
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
                <p><i class="fa register fa-clock"></i> 08:00 AM - 10:00 AM</p>
                <p><i class="fa register fa-map-marker"></i> Kompally Hyderabad - Serenity</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
              
                <p class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" class="btn ">Register Now </p>
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
                <p><i class="fa register fa-clock"></i> 08:00 AM - 10:00 AM</p>
                <p><i class="fa fa-map-marker register"></i> Kompally Hyderabad - Serenity</p>
            </div>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
            <div class="maindiv">
              
                <p class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" class="btn ">Register Now </p>
                <p><i class="fa fa-date register"></i> March /12/2025 Night</p>
            </div>
        </div>


    </div>
</div>

<?php include('includes/footer.php') ?>
