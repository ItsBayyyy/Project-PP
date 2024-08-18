<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Discover Indonesia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{URL('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{URL('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{URL('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{URL('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-5 text-secondary m-0">Discover Indonesia</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#tour" class="nav-item nav-link">Tour</a>
                        <a href="#product" class="nav-item nav-link">Product</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <button class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    @php
    $username = Cookie::get('username');
    $loginStatus = Cookie::get('login_status');
@endphp

<a href="{{ $loginStatus && $username ? '/logout' : '/login' }}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
    {{ $loginStatus && $username ? 'Logout' : 'Get Started' }}
</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Carousel Start -->
        <div class="carousel-header" id="home">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{URL('assets/img/hutan_leuser.jpg')}}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Explore Indonesia's Rich Heritage</h4>
<h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Discover Indonesia</h1>
<p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Experience the unparalleled beauty and diverse culture of Indonesia. From the intricate patterns of Batik to the vibrant rhythms of Tari Kecak, and the melodious sounds of Angklung, immerse yourself in the heart of a nation rich in tradition and heritage.</p>
                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL('assets/img/nusa_penida.jpg')}}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Explore Indonesia's Rich Heritage</h4>
<h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Discover Indonesia</h1>
<p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Experience the unparalleled beauty and diverse culture of Indonesia. From the intricate patterns of Batik to the vibrant rhythms of Tari Kecak, and the melodious sounds of Angklung, immerse yourself in the heart of a nation rich in tradition and heritage.</p>

                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Counter Facts Start -->
<div class="container-fluid counter-facts py-5 bg-gray-100">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Cultural Heritage Sites</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">20</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Annual Festivals</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">50</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Traditional Dances</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">100</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Global Recognition</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">15</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Facts End -->


        <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5" id="tour">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Explore Indonesia</h5>
                    </div>
                    <h1 class="display-5 mb-4">Top Destinations and Attractions</h1>
                    <p class="mb-0">Discover the breathtaking landscapes, vibrant cultures, and rich history of Indonesia. From stunning beaches to majestic mountains, explore the best places to visit in this tropical paradise.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="{{URL('assets/img/borobudur.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Candi Borobudur</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Candi Borobudur</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="{{URL('assets/img/raja_ampat.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Raja Ampat</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Raja Ampat</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img aspect-w-4 aspect-h-3">
                                    <img src="{{URL('assets/img/bromo.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Gunung Bromo</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Gunung Bromo</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- Services End -->

<!-- Training Start -->
<div class="container-fluid training overflow-hidden bg-light py-5" id="product">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">INDONESIAN EXPORT PRODUCTS</h5>
            </div>
            <h1 class="display-5 mb-4">Explore Indonesia's Renowned Export Products</h1>
            <p class="mb-0">Discover the rich heritage and exceptional quality of Indonesia's most prized exports. Each product tells a unique story of tradition, craftsmanship, and global appreciation.</p>
        </div>
        <div class="row g-4">
        @foreach ($products as $product)
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="{{ asset('storage/products/' . $product->image) }}" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">$Rp {{ number_format($product->price, 2, ',', '.') }}</a>
                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">
                        <a href="#"><h4 class="text-white">{{ $product->title }}</h4></a>
                        <p class="text-white-50">{!! strip_tags($product->description) !!}</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 text-center">
                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">View More</a>
            </div>
        </div>
    </div>
</div>
<!-- Training End -->

  <!-- Contact Us Start -->
<div class="container-fluid contact-us py-5" id="contact">
    <div class="container py-5">
        <div class="section-title text-center mb-5">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">GET IN TOUCH</h5>
            </div>
            <h1 class="display-5 mb-4">Contact Us</h1>
            <p class="mb-0">If you have any questions or need further information, feel free to reach out to us. We are here to help!</p>
        </div>
        <div class="row justify-content-center">
            <!-- Contact Form -->
            <div class="col-md-8 col-lg-6">
                <h4 class="text-secondary mb-4 text-center">Send Us a Message</h4>
                <form action="{{ route('contact.send') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                <label for="email">Your Email</label>
            </div>
        </div>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" name="message" id="message" placeholder="Your Message" rows="5" required></textarea>
        <label for="message">Your Message</label>
    </div>
    <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
</form>

            </div>
        </div>
    </div>
</div>
<!-- Contact Us End -->


<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Contact Us</h4>
                    <a href=""><i class="fa fa-map-marker-alt me-2"></i> Jl. Raya Jakarta, Jakarta, Indonesia</a>
                    <a href=""><i class="fas fa-envelope me-2"></i> info@indonesiashop.com</a>
                    <a href=""><i class="fas fa-phone me-2"></i> +62 812 3456 7890</a>
                    <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +62 812 3456 7890</a>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-secondary me-2"></i>
                        <a class="btn mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Opening Hours</h4>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Monday - Friday:</h6>
                        <p class="text-white mb-0">09.00 AM to 07.00 PM</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Saturday:</h6>
                        <p class="text-white mb-0">10.00 AM to 05.00 PM</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Holiday:</h6>
                        <p class="text-white mb-0">Sundays are our holiday</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Our Products</h4>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Coffee</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Tea</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Spices</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Handicrafts</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-secondary mb-4">Newsletter</h4>
                    <p class="text-white mb-3">Stay updated with the latest news and special offers on Indonesian products. Sign up now to receive updates directly to your email.</p>
                    <div class="position-relative mx-auto rounded-pill">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

        <!-- Back to Top -->
        <a href="#home" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{URL('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{URL('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{URL('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{URL('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    

    <!-- Template Javascript -->
    <script src="{{URL('assets/js/main.js')}}"></script>
    </body>

</html>