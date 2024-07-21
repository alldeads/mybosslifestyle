<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>B.O.S.S</title>
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

<body data-bs-spy="scroll" data-bs-target=".navbar-nav" data-bs-offset="75" class="offset-nav">
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
    <!-- header -->
    <header class="site-header" id="header">
        <nav class="navbar navbar-expand-lg transparent-bg static-nav">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="images/logo.png" alt="logo" class="logo-default">
                    <img src="images/logo.png" alt="logo" class="logo-scrolled">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item position-relative">
                            <a class="nav-link active pagescroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#business">Business Presentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#rewards">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#aboutus">About Us</a>
                        </li>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>

            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span> <span></span> <span></span>
            </a>
        </nav>
        <!-- side menu -->
        <div class="side-menu opacity-0">
            <div class="overlay"></div>
            <div class="inner-wrapper">
                <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item position-relative">
                            <a class="nav-link active pagescroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#business">Business Presentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#rewards">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#aboutus">About Us</a>
                        </li>

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endguest

                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
        <div id="close_side_menu" class="tooltip"></div>
        <!-- End side menu -->
    </header>
    <!-- header -->
    <!--Main Slider-->
    <section id="home">
        <h2 class="d-none">heading</h2>
        <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_one_page" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-01" data-transition="fade" data-slotamount="default"
                        data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000"
                        data-fsmasterspeed="1500" class="banner-overlay">
                        <!-- MAIN IMAGE -->
                        <div class="overlay overlay-dark opacity-6"></div>
                        <img src="images/slider3.png" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme font-bold z-index-1 font-light2 text-capitalize whitecolor"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-140','-140']"
                            data-fontsize="['48','48','46','45']" data-whitespace="nowrap" data-responsive_offset="on"
                            data-width="['none','none','none','none']" data-type="text"
                            data-textalign="['center','center','center','center']" data-transform_idle="o:1;"
                            data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000"
                            data-splitin="none" data-splitout="none"><span class="primary">B</span>uilding
                        </div>
                        <div class="tp-caption tp-resizeme font-bold z-index-2 text-capitalize whitecolor"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-70','-70']"
                            data-fontsize="['48','48','46','45']" data-whitespace="nowrap" data-responsive_offset="on"
                            data-width="['none','none','none','none']" data-type="text"
                            data-textalign="['center','center','center','center']" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200"
                            data-splitin="none" data-splitout="none"><span class="primary">O</span>pportunity
                        </div>
                        <div class="tp-caption tp-resizeme font-bold z-index-3 font-xlight whitecolor text-capitalize"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['40','40','0','0']"
                            data-fontsize="['48','48','46','45']" data-whitespace="nowrap" data-responsive_offset="on"
                            data-width="['none','none','none','none']" data-type="text"
                            data-textalign="['center','center','center','center']" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="1000"
                            data-splitin="none" data-splitout="none"><span class="primary">S</span>olution <span class="primary">S</span>pecialist
                        </div>
                        <div class="tp-caption" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['120','120','100','100']"
                            data-textalign="['center','center','center','center']" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                            data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;"}]'>
                            <a href="#aboutus"  class="button btn-primary font-13">Get Started</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Main Slider ends -->

    <!--Some Feature -->
    <section id="business" class="single-feature padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown text-center text-md-start">
                    <h3 class="heading darkcolor font-light heading_space mt-md-0 mt-3">
                        Business Presentation<span class="divider-left"></span>
                    </h3>
                </div>

                <div class="col-12 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <iframe src="https://1drv.ms/p/c/747b7c1b18875b83/IQMxnomM59V_RoK4-pDhP_p_ATGqrKlFeQrgABSTWXO6-Hk" width="100%"
                        height="450" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--Some Feature -->
    <section id="products" class="single-feature padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown text-center text-md-start">
                    <h3 class="heading darkcolor font-light heading_space mt-md-0 mt-3">
                        Products<span class="divider-left"></span>
                    </h3>
                </div>

                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
                        <div class="shopping-box top20">
                            <div class="image" data-sale="30">
                                <img src="{{ $product->image }}" alt="shop">
                                {{-- <div class="overlay center-block">
                                    <a class="opens" href="#" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div> --}}
                            </div>
                            <div class="shop-content text-center">
                                <h4 class="darkcolor mb-2"><a href="#">{{ $product->name }}</a></h4>
                                <h4 class="price-product">₱{{ number_format($product->price, 2, '.', ',') }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="rewards" class="single-feature padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown text-center text-md-start">
                    <h3 class="heading darkcolor font-light heading_space mt-md-0 mt-3">
                        <span>Rewards<span class="divider-left"></span>
                    </h3>
                </div>

                @foreach ($rewards as $reward)
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
                        <div class="shopping-box top20">
                            <div class="image">
                                <img src="{{ $reward->image }}" alt="shop">
                                {{-- <div class="overlay center-block">
                                    <a class="opens" href="shop-cart.html" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div> --}}
                            </div>
                            <div class="shop-content text-center">
                                <h4 class="darkcolor"><a href="shop-detail.html">{{ $reward->name }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Some Feature ends-->
    <section id="aboutus" class="single-feature padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-7 col-sm-7 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title mb-4">
                        <h2 class="darkcolor font-normal bottom30"><span class="defaultcolor">Mission</span></h2>
                    </div>
                    <p class="bottom35">To use our God given gift and wisdom that through this platform we can help as many people as we can. We aim to improve
                    people’s lives by offering them potential solutions to their problem with the help of our carefully selected products
                    and unique compensation program. </p>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                    <div class="image"><img alt="SEO" src="images/aboutus.png"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-7 col-sm-7 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title mb-4">
                        <h2 class="darkcolor font-normal bottom30"><span class="defaultcolor">Vision</span></h2>
                    </div>
                    <p class="bottom35">To become one of the most inspiring community helping people to become the best version of themselves.</p>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                    <div class="image"><img alt="SEO" src="images/aboutus.png"></div>
                </div>
            </div>
        </div>
    </section>
    <!--video part section-->
    {{-- <section class="bglight">
        <h2 class="d-none">heading</h2>
        <div class="container-fluid bg-white">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 p-0 col-video">
                    <div class="row mx-0">
                        <div class="col-md-10 offset-md-1 offset-sm-0 col-sm-12">
                            <div class="video-content-setting center-block text-center text-sm-start">
                                <h2 class="darkcolor font-normal text-capitalize mb-3">a creative design agency in east
                                    london.</h2>
                                <p class="darkcolor">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed
                                    suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a data-fancybox="video" href="https://www.youtube.com/watch?v=7e90gBu4pas"
                        class="video-play-button position-absolute">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 p-0 col-video video-bg">
                    <div class="image split-blog-scale transition-3">
                        <img alt="stats" src="images/bg-video-section.jpg" class="video-img-setting ">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--video part section end-->
    <!-- Contact US ends -->
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
    <!--Tooltip js-->
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
