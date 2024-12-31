<?php include('includes/header.php');?>

   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .contact-us-section {
            padding: 60px 0;
        }

        .contact-title {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            color: #343a40;
            margin-bottom: 40px;
        }

        .contact-info {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-info p {
            font-size: 18px;
            color: #555;
        }

        .contact-form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form input,
        .contact-form textarea {
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            padding: 12px;
            width: 100%;
        }

        .contact-form button {
            background-color: #007bff;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        .map-container {
            width: 100%;
            margin-top: 40px;
            height: 350px;
            border: none;
            border-radius: 8px;
        }

        .social-icons {
            text-align: center;
            margin-top: 40px;
        }

        .social-icons i {
            font-size: 36px;
            margin: 0 15px;
            color: #007bff;
            transition: color 0.3s;
        }

        .social-icons i:hover {
            color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-form {
                padding: 30px;
            }
        }
    </style>
</head>
<body>

    <!-- Contact Us Section -->
    <div class="container contact-us-section">
        <h2 class="contact-title">Contact Us</h2>
        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-6 col-md-6 col-sm-12 contact-info">
                <h4>Get In Touch</h4>
                <p>We’d love to hear from you! Whether you have a question, suggestion, or just want to say hello, feel free to drop us a message.</p>

                <p><strong>Email:</strong> mdtonnutax786@gmail.com</p>
                <p><strong>Phone:</strong> 7494012082</p>
                <p><strong>Address:</strong> Kompally Hyderabad Serenity. Aparna</p>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-form">
                    <h4>Send Us a Message</h4>
                    <form>
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Your Message" rows="5" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Map Embed -->
        <div class="row">
            <div class="col-12">
            <iframe  class="map-container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30434.31875084259!2d78.46334826137632!3d17.54138180610658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb855e9adf4dcf%3A0x6cd4e902af254f87!2sKompally%2C%20Hyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1734782534200!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
       

        <!-- Social Media Links -->
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

<?php include('includes/footer.php') ?>