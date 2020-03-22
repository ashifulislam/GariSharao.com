<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Taxi</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('customer/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/main.css')}}">
</head>
<body>
<header id="header">
    <div class="header-top">
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="menu-has-children"><a href="">Blog</a>
                        <ul>
                            <li><a href="blog-home.html">Blog Home</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li class="menu-has-children"><a href="">Level 2</a>
                                <ul>
                                    <li><a href="#">Item One</a></li>
                                    <li><a href="#">Item Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="elements.html">Elements</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>

</header><!-- #header -->

<!-- start banner Area -->

<!-- End home-about Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-6 col-md-6 ">
                    <h6 class="text-white ">Need a ride? just call</h6>
                    <h1 class="text-uppercase">
                        911 999 911
                    </h1>
                    <p class="pt-10 pb-10 text-white">
                        Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">Call for taxi</a>
                </div>
                <div class="col-lg-4  col-md-6 header-right">
                    <h4 class="pb-30">Book Your Texi Online!</h4>
                    <form class="form">
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="name" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
                            <input class="form-control txt-field" type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
                            <input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select">
                                <select>
                                    <option value="" disabled selected hidden>From Destination</option>
                                    <option value="1">Destination One</option>
                                    <option value="2">Destination Two</option>
                                    <option value="3">Destination Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <select>
                                    <option value="" disabled selected hidden>To Destination</option>
                                    <option value="1">Destination One</option>
                                    <option value="2">Destination Two</option>
                                    <option value="3">Destination Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group dates-wrap">
                                <input id="datepicker2" class="dates form-control"  placeholder="Date & time" type="text">
                                <div class="input-group-prepend">
                                    <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <button class="btn btn-default btn-lg btn-block text-center text-uppercase">Make reservation</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        @yield('content')
    </section>


<!-- Start services Area -->
<!-- End latest-blog Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Features</h6>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Resources</h6>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                            <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <p class="mt-80 mx-auto footer-text col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
    <img class="footer-bottom" src="{{asset('customer/img/footer-bottom.png')}}" alt="">
</footer>
<!-- End footer Area -->

<script src="{{asset('customer/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('customer/js/vendor/bootstrap.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('customer/js/easing.min.js')}}"></script>
<script src="{{asset('customer/js/hoverIntent.js')}}"></script>
<script src="{{asset('customer/js/superfish.min.js')}}"></script>
<script src="{{asset('customer/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('customer/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('customer/js/jquery-ui.js')}}"></script>
<script src="{{asset('customer/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('customer/js/mail-script.js')}}"></script>
<script src="{{asset('customer/js/main.js')}}"></script>
</body>
</html>
