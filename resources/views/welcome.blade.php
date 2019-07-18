<!DOCTYPE html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Beauty by Mawia</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/flaticon.css">


  </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
<!-- Header Area wrapper Starts -->
<header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="#header-wrap">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Why Us?
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">
                  Gallery
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact-map">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="page-scroll" href="#header-wrap">Home</a>
          </li>
          <li>
            <a class="page-scroll" href="#services">Why Us?</a>
          </li>
          <li>
            <a class="page-scroll" href="#gallery">Gallery</a>
          </li>
          <li>
            <a class="page-scroll" href="#pricing">Services</a>
          </li>
          <li>
            <a class="page-scroll" href="#contact-map">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      <!-- Main Carousel Section Start -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/slider/12.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow" data-wow-delay=".6s">For sensitive super-sensitive skin, we use your own beauty products.</p>
              <h1 class="wow fadeInDown heading" data-wow-delay=".4s">Pocket Friendly | Bring-you-own-Kit</h1>
              <a href="#pricing" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Book</a>
              <a href="#services" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Services</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/14.jpg" alt="Second slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow" data-wow-delay=".6s">Top of the range beauty products with a touch of class.</p>
              <h1 class="wow bounceIn heading" data-wow-delay=".7s">Beauty | Glamour </h1>
              <a href="#services" class="fadeInUp wow btn btn-border btn-lg" data-wow-delay=".8s">Learn More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/15.jpg" alt="Third slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow" data-wow-delay=".6s">On-site makeup services for any kind of setting.</p>
              <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Weddings Makeup | Everyday Makeup |  Makeup Consulting </h1>
              <a href="#gallery" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Explore</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Main Carousel Section End -->

    </header>
    <!-- Header Area wrapper End -->
     <!-- Services Section Start -->
    <section id="services" class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Why You Choose Mawia?</h1>
              
            </div>
          </div>
        </div>
        <div class="row services-wrapper">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">We're Passionate</a></h3>
                <p>We are passionate about beauty, glamour, makeup and everything in between.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lni-plug"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">We Offer Trials</a></h3>
                <p>You could be having your big day just around the corner, Mawia offers makeup tryouts.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-gallery"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Fresh Ideas</a></h3>
                <p>Our team keeps updated on the latest trends and techniques in the makeup industry.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lni-hand"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Experience</a></h3>
                <p>We've got 3+ years doing makeup.</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="1s">
              <div class="icon">
                <i class="lni-users"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Great Recommendations</a></h3>
                <p>The feedback so far has been amazing to say the least.</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-headphone"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Support and Feedback</a></h3>
                <p>Need help? Mawia's gotchu. ;)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->
    <!-- Gallary Section Start -->
    <section id="gallery" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Gallery</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">What We Have Previously Done</p>
            </div>
          </div> 
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/img-1.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/img-1.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/img-2.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/img-2.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/img-3.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/img-3.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/img-4.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/img-4.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/img-5.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/img-5.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/img-6.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/img-6.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallary Section End -->
    <!-- Ticket Pricing Area Start -->
    <section id="pricing" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Services</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon">
                <i class="flaticon-facial-treatment"></i>
              </div>
              <div class="colmun-title">
                <h5>Mrembo</h5>
              </div>
              <div class="price">
                <h2>Kes. 200 - 500</h2>
                <p>Portrait</p>
                <p>Facial</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-close"></i><span class="text">Moisturization</span></li>
                  <li><i class="lni-close"></i><span class="text">Filling brows</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Foundation</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Adding Eyeshadows</span></li>
                  <li><i class="lni-close"></i><span class="text">Adding Eye liners</span></li>
                  <li><i class="lni-close"></i><span class="text">Applying Blush</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Highlighters</span></li>
                  <li><i class="lni-close"></i><span class="text">Applying Contours</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Mascara</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Book Us</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInUp" data-wow-delay="0.3s">
              <div class="icon">
                <i class="flaticon-cosmetics"></i>
              </div>
              <div class="colmun-title">
                <h5>Sassy Diva</h5>
              </div>
              <div class="price">
                <h2>Kes. 450 - 1,250</h2>
                <p>Makeup for Dates &amp; Weddings</p>
                <p>Photoshoot Makeup</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Moisturization</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Filling brows</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Foundation</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Adding Eyeshadows</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Adding Eye liners</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Applying Blush</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Highlighters</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Applying Contours</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Mascara</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Book Us</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInRight" data-wow-delay="0.4s">
              <div class="icon">
                <i class="flaticon-curl"></i>
              </div>
              <div class="colmun-title">
                <h5>Makeup FAQs</h5><br>
              </div>
              <div class="price">
                <h2>Kes 0.00</h2>
                <p>Questions and Advice</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-close"></i><span class="text">Moisturization</span></li>
                  <li><i class="lni-close"></i><span class="text">Filling brows</span></li>
                  <li><i class="lni-close"></i><span class="text">Foundation</span></li>
                  <li><i class="lni-close"></i><span class="text">Adding Eyeshadows</span></li>
                  <li><i class="lni-close"></i><span class="text">Adding Eye liners</span></li>
                  <li><i class="lni-close"></i><span class="text">Applying Blush</span></li>
                  <li><i class="lni-close"></i><span class="text">Highlighters</span></li>
                  <li><i class="lni-close"></i><span class="text">Applying Contours</span></li>
                  <li><i class="lni-close"></i><span class="text">Mascara</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Book Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ticket Pricing Area End -->
    <!-- Contact Us Section -->
    <section id="contact-map" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Into our Dm's</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Would you like to say something, comment or complaint? Feel free to do so below.</p>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
              <div class="form-wrapper">
                <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator" action="sendmail.blade.php">
                  <div class="row">
                    <div class="col-md-6 form-line">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your Name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6 form-line">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="number" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number" required data-error="">
                    </div> 
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="tel" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="4" id="message" name="message" placeholder="What would you like to tell us?" required data-error="Write your message"></textarea>
                      </div>
                      <div class="form-submit">
                        <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us Section End -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info">
              <p>Designed by <a href="https://www.simplatechconsulting.co.ke" rel="nofollow">Simplatech Consulting</a> &copy; <script>document.write(new Date().getFullYear());</script></p>
              
            </div>      
          </div>
        </div>
      </div>
    </div>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>
    <!-- <script>  
      function ValidateEmail(email) 
          {
          if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
            {
              return (true)
            }
              alert("You have entered an invalid email address!")
              return (false)
          }
    </script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
      
  </body>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5d3082bf9b94cd38bbe80c1d/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</html>
