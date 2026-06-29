<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SUNNY POINT - Landing Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<style>
    .cards-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
    }

    .room-card {
        background-color: #f8f9fa;
        /* Light background color */
        border: 1px solid #ddd;
        /* Light border */
        border-radius: 8px;
        /* Rounded corners */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
        margin: 10px;
        width: calc(40% - 20px);
        /* Smaller card size for three cards per row */
        text-align: center;
        transition: transform 0.2s;
        /* Animation on hover */
    }

    .room-card:hover {
        transform: scale(1.05);
        /* Slight zoom effect */
    }

    .room-image {
        width: 100%;
        /* Full width of the card */
        border-top-left-radius: 8px;
        /* Rounded corners */
        border-top-right-radius: 8px;
        /* Rounded corners */
        height: 150px;
        /* Fixed height for uniformity */
        object-fit: cover;
        /* Crop images nicely */
    }

    .room-info {
        padding: 15px;
    }

    .room-info h3 {
        margin: 10px 0;
        font-size: 1.2rem;
        /* Slightly smaller font size */
    }

    .room-info p {
        margin: 5px 0;
        font-size: 0.9rem;
        /* Slightly smaller font size */
    }

    .book-button {
        background-color: #25316D;
        /* Yellow color */
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 12px;
        /* Smaller padding */
        cursor: pointer;
        transition: background-color 0.3s;
        /* Animation on hover */
    }

    .book-button:hover {
        background-color: #198754;
        /* Darker shade on hover */
    }
</style>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <img src="img/logo.jpg" alt="SUNNY POINT Logo" class="img-fluid" style="max-height: 55px;">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="facility.php" class="nav-item nav-link">Facilities</a>
                    <a href="rooms.php" class="nav-item nav-link">Rooms</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="../Authentication/Login.php" class="dropdown-item">Login</a>
                            <a href="../Authentication/Signup.php" class="dropdown-item">Signup</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Book Now<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->



        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel3.webp" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Discover Comfort and Elegance</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Immerse yourself in a luxurious experience with our top-tier room services, modern facilities, and personalized event management. Make every stay unforgettable.</p>
                                    <a href="room-booking-calendar.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel4.jfif" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Elevate Your Stay with Unmatched Comfort</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Experience the pinnacle of hospitality with our luxurious rooms and amenities. From relaxing stays to elegant event spaces, we ensure your visit is exceptional. Reserve your place in comfort today.</p>
                                    <a href="room-booking-calendar.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Cards for Rooms -->
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Rooms</h1>
        <div class="cards-container">
            <!-- Cafe/Restaurant -->
            <div class="room-card" data-category="cafe">
                <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img1.jpg" alt="Cafe/Restaurant" class="room-image">
                <div class="room-info">
                    <h3>Standard Room</h3>
                    <p>Enjoy a wide variety of cuisines and refreshments in our cozy cafe.</p>
                    <button class="book-button" onclick="viewImages('cafe')">Book now</button>
                </div>
            </div>

            <!-- Function Hall -->
            <div class="room-card" data-category="function-hall">
                <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img2.jpg" alt="Function Hall" class="room-image">
                <div class="room-info">
                    <h3>Executive Room</h3>
                    <p>Perfect for events and gatherings with modern amenities.</p>
                    <button class="book-button" onclick="viewImages('function-hall')">Book now</button>
                </div>
            </div>

            <!-- Datu Hall -->
            <div class="room-card" data-category="Family Deluxe Room">
                <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img3.jpg" alt="Datu Hall" class="room-image">
                <div class="room-info">
                    <h3>Datu Hall</h3>
                    <p>A spacious hall ideal for larger events and conferences.</p>
                    <button class="book-button" onclick="viewImages('datu-hall')">Book now</button>
                </div>
            </div>

            <!-- David Hall -->
            <div class="room-card" data-category="david-hall">
                <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img4.jpg" alt="David Hall" class="room-image">
                <div class="room-info">
                    <h3>Suite Room</h3>
                    <p>An elegant space designed for intimate gatherings and celebrations.</p>
                    <button class="book-button" onclick="viewImages('david-hall')">Book now</button>
                </div>
            </div>
        </div>
        <!-- Room End -->




        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">About Us</h1>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/about.webp">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/about1.jpg" style="width: 85%; margin-top: 5%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/about3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/carousel4.jfif" style="height: 85%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Experience Luxury and Comfort at Our Hotel</h1>
                        <p class="mb-4">Indulge in a premium stay with our exceptional room services, facilities, and event management. We ensure every moment of your stay is memorable.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Luxurious rooms with world-class amenities</p>
                        <p><i class="fa fa-check text-primary me-3"></i>State-of-the-art facilities for relaxation and recreation</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Professional event management for all occasions</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Contact Inquiries</h1>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <span>Ma-a Road, Davao City</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-envelope-open text-primary"></i>
                                    </div>
                                    <span>sunnypointdavao@gmail.com</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wowa-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text-primary"></i>
                                    </div>
                                    <span>+63 997 140 6900</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.272505562828!2d125.57881044977741!3d7.094379142955759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d26f2c502c3%3A0x7636c58221db4c57!2sSunny%20Point%20Hotel!5e0!3m2!1sen!2sph!4v1728625192570!5m2!1sen!2sph"
                            width="600"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">For any inquiries or to book room, please fill out the contact form below. Our team will get back to you as soon as possible. Thank you for reaching out to us.</p>
                            <form action="func-inquiry.php" method="post" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ma-a Road, Davao City</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+63 997 140 6900</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>sunnypointdavao@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://x.com/sunnypointhotel"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://web.facebook.com/sunnypointhotel/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/explore/locations/235291308/sunny-point-hotel-davao/?locale=bz-hans&hl=am-et"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Subscribe to our newspaper.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; All Rights Reserved, <a class="border-bottom" href="">SUNNY POINT - Hotel Apartele</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmLogout() {
                Swal.fire({
                    title: 'Are you sure you want to logout?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../Authentication/logout-user.php';
                    }
                });
            }
        </script>

        <script>
            $(document).ready(function() {
                $(".testimonial-carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            });
        </script>
</body>

</html>