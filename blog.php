<?php include('includes/header.php');?>
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .blog-title {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            color: #343a40;
            margin-bottom: 40px;
        }

        .blog-post {
            margin-bottom: 30px;
        }

        .blog-post img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }

        .blog-post-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 15px;
            color: #343a40;
        }

        .blog-post-description {
            color: #555;
            font-size: 16px;
            margin-top: 10px;
        }

        .blog-post-readmore {
            text-decoration: none;
            font-weight: bold;
            color: #007bff;
            margin-top: 15px;
        }

        .blog-post-readmore:hover {
            color: #0056b3;
        }

        .sidebar {
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 30px;
            height:500px;   
            color:black;
            font-weight:bold;
        }

        .sidebar h4 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #007bff;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            color: #0056b3;
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
            .blog-post img {
                height: 200px;
            }

            .sidebar {
                margin-top: 30px;
            }
        }
    </style>
</head>
<body>

    <!-- Blog Container -->
    <div class="container pt-3 py-5">
        <h2 class="blog-title">Welcome to Our Blog</h2>

        <div class="row">
            <!-- Main Blog Content -->
            <div class="col-lg-8 col-md-8 col-sm-12">
                
                <!-- Blog Post 1 -->
                <div class="blog-post">
                    <img src="assests/img/singer.jpg" alt="Blog Image 1">
                    <div class="blog-post-title">Understanding the Basics of Web Development</div>
                    <p class="blog-post-description">In this post, we'll explore the fundamentals of web development and discuss the most important technologies you should learn...</p>
                    <a href="#" class="blog-post-readmore">Read More</a>
                </div>

                <!-- Blog Post 2 -->
                <div class="blog-post">
                    <img src="assests/img/pv.jpg" alt="Blog Image 2">
                    <div class="blog-post-title">How to Become a Successful Programmer</div>
                    <p class="blog-post-description">Becoming a successful programmer involves more than just coding. It requires a mindset of continuous learning and improvement...</p>
                    <a href="#" class="blog-post-readmore">Read More</a>
                </div>

                <!-- Blog Post 3 -->
                <div class="blog-post">
                    <img src="assests/img/hero.jpg" alt="Blog Image 3">
                    <div class="blog-post-title">The Future of Artificial Intelligence</div>
                    <p class="blog-post-description">Artificial Intelligence (AI) is a rapidly growing field that will likely shape many aspects of our daily lives in the future...</p>
                    <a href="#" class="blog-post-readmore">Read More</a>
                </div>

                <!-- Pagination (Optional) -->
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar Content -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sidebar">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Programming</a></li>
                        <li><a href="#">Artificial Intelligence</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Tech Trends</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <!-- <div class="footer">
        <p>&copy; 2024 Your Blog Name. All Rights Reserved.</p>
    </div> -->

    <!-- Bootstrap JS and dependencies -->



<?php include('includes/footer.php') ?>