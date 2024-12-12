<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BOSS | Dashboard</title>
    <link href="images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/tooltipster.min.css">
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <link rel="stylesheet" href="css/revolution/navigation.css">
    <link rel="stylesheet" href="css/revolution/settings.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--PreLoader-->
    <div class="loader slow-load">
        <div class="loader-inner">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
    <!-- header -->
    <header class="site-header" id="header">
        <nav class="navbar navbar-expand-lg transparent-bg darkcolor static-nav">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="logo" class="logo-default">
                    <img src="images/logo.png" alt="logo" class="logo-scrolled">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="\">Business Presentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="\">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="\">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="\">About Us</a>
                        </li>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- header -->
    <!--Main Slider-->
    <section id="main-banner-area" class="position-relative">
        <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-light"
            data-alias="classic4export">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_main" class="rev_slider fullwidthabanner" data-version="5.4.1">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-index="rs-01" data-transition="fade" data-slotamount="default"
                        data-easein="Power100.easeInOut" data-easeout="Power100.easeInOut" data-masterspeed="2000"
                        data-fsmasterspeed="1500" data-param1="01">
                        <!-- MAIN IMAGE -->
                        {{-- <img src="images/slider-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina> --}}
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-130','-130','-110','-80']" data-width="none" data-height="none"
                            data-type="text" data-textAlign="['center','center','center','center']"
                            data-responsive_offset="on" data-start="1000"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-capitalize font-xlight text-center" style="color: #218C23;">Building</h1>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-70','-70','-50','-20']" data-width="none" data-height="none"
                            data-type="text" data-textAlign="['center','center','center','center']"
                            data-responsive_offset="on" data-start="1000"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-bold text-center">Opportunity</h1>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-10','-10','10','40']" data-width="none" data-height="none" data-type="text"
                            data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                            data-start="1500"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-capitalize font-xlight text-center" style="color: #218C23;">Solution Specialist</h1>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['40','40','60','90']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text"
                            data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                            data-start="2000"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h4 class="font-light text-center" style="color: #218C23;">USE | SHARE | EARN</h4>
                        </div>
                    </li>
                    <!-- SLIDE 2 -->
                    <li data-index="rs-02" data-transition="fade" data-slotamount="default"
                        data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000"
                        data-fsmasterspeed="1500" data-param1="02">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-130','-130','-110','-80']" data-width="none" data-height="none"
                            data-type="text" data-textAlign="['center','center','center','center']"
                            data-responsive_offset="on" data-start="1000"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-xlight text-center">Let's Create</h1>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-70','-70','-50','-20']" data-width="none" data-height="none"
                            data-type="text" data-textAlign="['center','center','center','center']"
                            data-responsive_offset="on" data-start="1000"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-bold text-center">Deep Creativity</h1>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-10','-10','10','40']" data-width="none" data-height="none" data-type="text"
                            data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                            data-start="1500"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-xlight text-center">In Market</h1>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['40','40','60','90']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text"
                            data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                            data-start="2000"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h4 class="text-dark font-light text-center">Responsive and Retina Ready for All Devices
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="social-icons-simple revicon">
            <li class="d-table"><a href="javascript:void(0)" class="hover-light"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="d-table"><a href="javascript:void(0)" class="hover-light"><i class="fab fa-twitter"></i> </a>
            </li>
            <li class="d-table"><a href="javascript:void(0)" class="hover-light"><i class="fab fa-linkedin-in"></i> </a>
            </li>
            <li class="d-table"><a href="javascript:void(0)" class="hover-light"><i class="fab fa-instagram"></i> </a>
            </li>
        </ul>
    </section>
    <!--Main Slider ends -->
    <!--Some Services-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="services-slider" class="owl-carousel services-slider-light">
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-laptop"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">SHARE</a></h4>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-credit-card"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">EARN</a></h4>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-clipboard"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">USE</a></h4>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Some Services ends-->
    <!--Some Feature -->
    <section id="our-feature" class="single-feature padding_bottom padding_top_half mt-n4">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-7 col-sm-7 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title mb-4">
                        <h2 class="darkcolor font-normal bottom30">Lets take your <span
                                class="defaultcolor">Business</span> to Next Level</h2>
                    </div>
                    <p class="bottom35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu,
                        lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti.
                        Duis suscipit ultrices maximus. </p>
                    <a href="#our-team" class="button btnsecondary gradient-btn pagescroll mb-sm-0 mb-4">Learn More</a>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                    <div class="image"><img alt="SEO" src="images/awesome-feature.png"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Some Feature ends-->
    <!-- Contact US -->
    <section id="stayconnect" class="bglight position-relative">
        <div class="container">
            <div class="contactus-wrapp">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="heading-title wow fadeInUp text-center text-md-start" data-wow-delay="300ms">
                            <h3 class="darkcolor bottom20">Stay Connected</h3>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-12 col-sm-12" id="result"></div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="userName" class="d-none"></label>
                                        <input class="form-control" type="text" placeholder="Name" required
                                            id="userName" name="userName">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="companyName" class="d-none"></label>
                                        <input class="form-control" type="tel" placeholder="Company" id="companyName"
                                            name="companyName">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="d-none"></label>
                                        <input class="form-control" type="email" placeholder="Email" required id="email"

                                     name="email">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <button type="submit" class="button gradient-btn w-100"
                                        id="submit_btn">subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact US ends -->
    <!--Site Footer Here-->
    <footer id="site-footer" class="bg-light-dark padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <a href="index.html" class="footer_logo bottom25"><img src="images/logo-transparent.png"
                                alt="MegaOne"></a>
                        <p class="whitecolor bottom25">Keep away from people who try to belittle your ambitions Small
                            people always do that but the really great Friendly.</p>
                        <div class="d-table w-100 address-item whitecolor bottom25">
                            <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                            <p class="d-table-cell align-middle bottom0">
                                +01 - 123 - 4567 <a class="d-block" href="mailto:web@support.com">web@support.com</a>
                            </p>
                        </div>
                        <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a>
                            </li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a>
                            </li>
                            <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <h3 class="whitecolor bottom25">Latest News</h3>
                        <ul class="latest_news whitecolor">
                            <li> <a href="#.">Aenean tristique justo et... </a> <span class="date defaultcolor">15 March
                                    2019</span> </li>
                            <li> <a href="#.">Phasellus dapibus dictum augue... </a> <span class="date defaultcolor">15
                                    March 2019</span> </li>
                            <li> <a href="#.">Mauris blandit vitae. Praesent non... </a> <span
                                    class="date defaultcolor">15 March 2019</span> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20 ps-0 ps-lg-5">
                        <h3 class="whitecolor bottom25">Our Services</h3>
                        <ul class="links">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="blog-1.html">Latest News</a></li>
                            <li><a href="pricing.html">Business Planning</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="faq.html">Faq's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <h3 class="whitecolor bottom25">Business hours</h3>
                        <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week
                        </p>
                        <ul class="hours_links whitecolor">
                            <li><span>Monday-Saturday:</span> <span>8.00-18.00</span></li>
                            <li><span>Friday:</span> <span>09:00-21:00</span></li>
                            <li><span>Sunday:</span> <span>09:00-20:00</span></li>
                            <li><span>Calendar Events:</span> <span>24-Hour Shift</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer ends-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap Core-->
    <script src="js/propper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--to view items on reach-->
    <script src="js/jquery.appear.js"></script>
    <!--Owl Slider-->
    <script src="js/owl.carousel.min.js"></script>
    <!--number counters-->
    <script src="js/jquery-countTo.js"></script>
    <!--Parallax Background-->
    <script src="js/parallaxie.js"></script>
    <!--Cubefolio Gallery-->
    <script src="js/jquery.cubeportfolio.min.js"></script>
    <!--Fancybox js-->
    <script src="js/jquery.fancybox.min.js"></script>
    <!--tooltip js-->
    <script src="js/tooltipster.min.js"></script>
    <!--wow js-->
    <script src="js/wow.js"></script>
    <!--Revolution SLider-->
    <script src="js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.video.min.js"></script>
    <!--custom functions and script-->
    <script src="js/functions.js"></script>
</body>

</html>
