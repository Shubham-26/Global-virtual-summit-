<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Virtual Summit</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about.php">About</a></li>
                                <li><a href="./events.php">Events</a></li>
                                <li class="active"><a href="./sponsorship.php">Sponsorship</a></li>
                                 <?php
                                 session_start();
                                 error_reporting(0);
                                 if (!isset($_SESSION['id']))
                                {?>
                                <li><a href="blog.php">Blog</a></li>
                                <?php }
                                else{?>
                                <li><a href="blog_loginUser.php">Blog</a></li>
                                <?php }
                                ?>
                                
                                <li><a href="./contact.php">Contact Us</a></li>
                                
                                <?php
                                 session_start();
                                 error_reporting(0);
                                 if (!isset($_SESSION['id']))
                                {?>
                                <li><a href="login.php">Login</a></li>
                                <?php }
                                else{?>
                                <li><a href="logout.php">logout</a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sponsorship</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>Sponsorship</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Counter Section Begin -->
    <section class="counterhead">
        <div class="container">
    <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Call for Sponsorship</span>
                        <h2>sponsorship</h2>
                    </div>
                </div>
            </div>
        </section>
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <h3>TITLE<br>SPONSOR</h3>
                                <h2 class="counter_num">50000</h2>
                                <p>Entire Summit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <h3>CO<br>SPONSOR</h3>
                                <h2 class="counter_num">25000</h2>
                                <p>Two Events</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <h3>ASSOCIATE<br>SPONSOR</h3>
                                <h2 class="counter_num">15000</h2>
                                <p>Single Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <h3>MEDIA<br>SPONSOR</h3>
                                <h2 class="counter_num">10000</h2>
                                <p>Event</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->


    <!-- Services Section Begin -->
    <section class="services-page spad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="sponstitle">
                        <h4>TITLE SPONSOR</h4>
                        <p>Rs. 50,000/-</p>
                        <p>Entire Summit</p>
                    </div>
                    <div class="sponsdata">
                        <ul class="just">
                            <li>Display of the product and Mention as Title Sponsor in all publicity e-material.</li>
                            <li>The Audio Visual of the Company can be played daily once during the event.</li>
                            <li>10 e- passes released for attending the virtual summit.</li>
                            <li>Mention by Masters of Ceremony during the event as Title Sponsor.</li>
                            <li>Mention / presence on social media.</li>
                            <li>Post event a 2 page e-newsletters will be circulated to all the participants Company representative to be judge/special guest for two of the events as mutually agreed. </li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="sponstitle">
                        <h4>CO SPONSOR</h4>
                        <p>Rs. 25,000/-</p>
                        <p>Two Events</p>
                    </div>
                    <div class="sponsdata">
                        <ul class="just">
                            <li>Display of the product and mention as Co-Sponsor in all publicity e-material.</li>
                            <li>The Audio Visual of the Company can be played alternate days during the event.</li>
                            <li>5 e- passes released for attending the virtual summit.</li>
                            <li>Mention by Masters of Ceremony during the event as Co-Sponsor.</li>
                            <li>Mention / presence on social media.</li>
                            <li>Post event a 1 page e-newsletters will be circulated to all the participants Company representative to be judge/special guest for one of the events as mutually agreed.</li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="sponstitle">
                        <h4>ASSOCIATE SPONSOR</h4>
                        <p>Rs. 15,000/-</p>
                        <p>Single Summit</p>
                    </div>
                    <div class="sponsdata">
                        <ul class="just">
                            <li>Mention as Co-Sponsor in all publicity e-material.</li>
                            <li>The Audio Visual of the Company can be played once during the entire event.</li>
                            <li>2 e- passes released  for attending the virtual summit.</li>
                            <li>Mention by Masters of Ceremony during the event as Associate Sponsor.</li>
                            <li>Mention / presence on social media.</li>
                            <li>Post event a half page e-newsletters will be circulated to all the participants.</li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="sponstitle">
                        <h4>MEDIA SPONSOR</h4>
                        <p>Rs. 10,000/-</p>
                        <p>Event</p>
                    </div>
                    <div class="sponsdata">
                        <br>
                        <ul class="just">
                            <li>Mention as Partner in all publicity e-material.</li>
                            <li>2 e- passes released  for attending the virtual summit.</li>
                            <li>Mention by Masters of Ceremony during the event as Partner.</li>
                            <li>Mention / presence on social media.</li>
                            <li>Post event e-newsletters with a mention of the Partners name will be circulated to all the participants. </li>
                        </ul>
                        <br>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto sp__callto">
        <div class="container">
            <div class="callto__services spad set-bg" data-setbg="img/calltos-bg.jpg">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="callto__text">
                            <h2>Contact Us For Sponsorship</h2>
                            <p></p>
                            <a href="contact.php">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Logo Begin -->
    <div class="logo spad">
        <div class="container">
            <div class="logo__carousel owl-carousel">
                <a href="#" class="logo__item"><img src="img/logo/logo-1.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-2.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-3.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-4.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-5.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-6.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Logo End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>Industry - Academia Confluence</h5>
                            <p>Industry 4.0 Implications on Education 4.0 for Higher Education Institutions.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Navigate</h5>
                            <ul>
                                <li><a href="about.php">About</a></li>
                                <li><a href="events.php">Events</a></li>
                                <li><a href="sponsorship.php">Sponsorship</a></li>
                                <li><a href="#">Gallary</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Blog</h5>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Send Us an E-Mail</h5>
                            <p>Contact us for any query.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>