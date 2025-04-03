<?php
session_start();

include("connection.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- navbar section   -->

   
    <header class="navbar-section">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-scissors"></i> Elite Barber</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center mt-4">
        <h1 class="display-4">Precision Cuts, Timeless Style</h1>
    </div>
</header>

    <div class="name">
    <center>Logged in!</center>
</div>


    <!-- hero section  -->

    <!-- hero section  -->

    <section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12 text-content">
                <h1>Sharp Cuts, Fresh Looks</h1>
                <p>Experience precision haircuts, classic shaves, and premium grooming services tailored just for you.</p>
                <button class="btn"><a href="#services">Book an Appointment</a></button>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <img src="https://plus.unsplash.com/premium_photo-1677444398670-4f5aaaef65eb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YmFyYmVyc2hvcHxlbnwwfHwwfHx8MA%3D%3D" alt="Barber Shop" class="img-fluid">
            </div>
        </div>
    </div>
</section>


    <!-- services section  -->
    <section class="services-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 services">
                <div class="row row1">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YmFyYmVyc2hvcHxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Haircut">
                            <div class="card-body">
                                <h4 class="card-title">Haircuts</h4>
                                <p class="card-text">Precision cuts for men and kids, from classic styles to modern trends.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1596728325488-58c87691e9af?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGJhcmJlcnNob3B8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Shaving">
                            <div class="card-body">
                                <h4 class="card-title">Shaving & Beard Grooming</h4>
                                <p class="card-text">Traditional hot towel shaves, beard trims, and styling for a sharp look.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1661270415179-f7bcff006edb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDB8fGJhcmJlcnNob3B8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Styling">
                            <div class="card-body">
                                <h4 class="card-title">Styling</h4>
                                <p class="card-text">Expert styling with premium hair products for a fresh and polished finish.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="https://plus.unsplash.com/premium_photo-1661645788141-8196a45fb483?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Njh8fGJhcmJlcnNob3B8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Scalp Treatment">
                            <div class="card-body">
                                <h4 class="card-title">Scalp Treatments</h4>
                                <p class="card-text">Relaxing scalp massages and treatments to promote healthy hair growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                <h3>Our Services</h3>
                <h1>Premium Barber Services for a Fresh New Look</h1>
                <p>Experience top-notch grooming with skilled barbers, quality products, and a relaxing atmosphere.</p>
                <button class="btn">Book an Appointment</button>
            </div>
        </div>
    </div>
</section>


    <!-- about section  -->
    <section class="about-section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="https://images.unsplash.com/photo-1596513057998-040d410e4623?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODV8fGJhcmJlcnNob3B8ZW58MHx8MHx8fDA%3D" alt="Barber Shop" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                <h3>About Us</h3>
                <h1>Crafting Timeless Looks with Precision & Style</h1>
                <p>At Elite Barber, we take pride in providing premium grooming services. From classic haircuts to modern styles, our skilled barbers ensure every cut is precise, stylish, and tailored to you.</p>
                <p>We believe a great haircut is more than just a look—it's an experience. Sit back, relax, and enjoy the best grooming services in town.</p>
                <button class="btn">Learn More</button>
            </div>
        </div>
    </div>
</section>


    <!-- project section  -->

 <!-- Gallery Section -->

<section class="project-section" id="gallery">
    <div class="container">
        <div class="row text">
            <div class="col-lg-6 col-md-12">
                <h3>Our Work</h3>
                <h1>Fresh Cuts & Styles</h1>
                <hr>
            </div>
            <div class="col-lg-6 col-md-12">
                <p>Check out some of our finest cuts, beard trims, and styles. We take pride in every look we create!</p>
            </div>
        </div>
        <div class="row project">

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1593702282967-96c9f195befa?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODd8fGJhcmJlcnNob3B8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Haircut">
                    <div class="card-body">
                        <div class="text">
                            <h4 class="card-title">Classic Cut</h4>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1589985502143-057e63eef1c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTJ8fGJhcmJlcnNob3B8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Beard Trim">
                    <div class="card-body">
                        <div class="text">
                            <h4 class="card-title">Beard Trim</h4>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1635273051839-003bf06a8751?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTAwfHxiYXJiZXJzaG9wfGVufDB8fDB8fHww" class="card-img-top" alt="Fade Cut">
                    <div class="card-body">
                        <div class="text">
                            <h4 class="card-title">Skin Fade</h4>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1593702295094-aea22597af65?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTA3fHxiYXJiZXJzaG9wfGVufDB8fDB8fHww" class="card-img-top" alt="Styled Look">
                    <div class="card-body">
                        <div class="text">
                            <h4 class="card-title">Styled Look</h4>
                           
                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- contact section  -->

    <section class="contact-section" id="contact">
    <div class="container text-center">
        <h1>Contact Us</h1>
        <p>Visit us or get in touch for bookings & inquiries.</p>

        <form action="contact.php" method="POST" class="php-email-form">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            <textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </div>
</section>

<style>
    .contact-section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        text-align: center;
        background-color: #f4e1d2; /* Soft warm tone */
        padding: 40px 20px;
    }
    .info p {
        font-size: 18px;
        margin: 10px 0;
    }
    .form-control {
        width: 100%;
        max-width: 400px;
        margin: 10px auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button {
        background-color: #d35400;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>


    <!-- footer section  -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="logo"></i>  Elite Barber</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="d-flex">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">projects</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p>&copy; Elite Barber</p>
                </div>

                <div class="col-lg-1 col-md-12 col-sm-12">
                    <!-- back to top  -->

                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                            class="bi bi-arrow-up-short"></i></a>
                </div>

            </div>

        </div>

    </footer>

       



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>