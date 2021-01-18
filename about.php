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
                                <li class="active"><a href="./about.php">About</a></li>
                                <li><a href="./events.php">Events</a></li>
                                <li><a href="./sponsorship.php">Sponsorship</a></li>
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
                        <h2>About us</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Global Virtual Summit</span>
                            <h2>Objective</h2>
                        </div>
                        <div class="about__text__desc just">
                            <p>The incessant need of workforce competency across Engineering,Business, Design and Management verticals, along with the critical thinking and problem solving traits to be acquired in the era of Industry 4.0 was a trigger to mobilize the initiative in the form of a summit. The initiative will constitute of expert talk series, panel discussions and deliberations, idea and paper presentations, hackathons, case-studies and simulations,that will give the researchers, industry personnel, academicians and others, actionable insights into becoming an integral part of the work force 4.0, a response to the needs of Industry 4.0. The to-do list during the seven day itinerary will open up multiple avenues to establish a symbiotic relationship between the two segments to synergize on industry-academia 4.0 initiatives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Services Section Begin -->
    <section class="services spad set-bg" data-setbg="img/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="services__title">
                        <div class="section-title">
                            <span></span>
                            <h2>Events</h2>
                        </div>
                        <a href="events.php" class="primary-btn">Know more</a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="event_iied.php">
                                <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-1.png" alt="">
                                </div>
                                <h4>I I E D</h4>
                                <p>INNOVATION, INCUBATION & ENTREPRENEURSHIP DEVELOPMENT</p>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="event_iagc.php">
                                <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-4.png" alt="">
                                </div>
                                <h4>I A G C</h4>
                                <p>INDUSTRY-ACADEMIA GLOBAL COLLABORATION</p>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="event_p2p.php">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-2.png" alt="">
                                </div>
                                <h4>P 2 P</h4>
                                <p>TECHNOLOGY TRANSFER PROJECTS</p>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="event_rep.php">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-3.png" alt="">
                                </div>
                                <h4>R E P</h4>
                                <p>RESEARCH AND EDUCATION PROGRAMS</p>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Testimonial Section Begin 
    <section class="testimonial spad set-bg" data-setbg="img/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Loved By Clients</span>
                        <h2>What clients say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-3.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     Testimonial Section End -->

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
                        <a href="sponsorship.php">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <h3>TITLE<br>SPONSOR</h3>
                                <h2 class="counter_num">50000</h2>
                                <p>Entire Summit</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="sponsorship.php">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <h3>CO<br>SPONSOR</h3>
                                <h2 class="counter_num">25000</h2>
                                <p>Two Events</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="sponsorship.php">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <h3>ASSOCIATE<br>SPONSOR</h3>
                                <h2 class="counter_num">15000</h2>
                                <p>Single Event</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="sponsorship.php">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <h3>MEDIA<br>SPONSOR</h3>
                                <h2 class="counter_num">10000</h2>
                                <p>Event</p>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->


    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Host Institute</span>
                        <h2>S I O M</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="blog__item">
                        <h4>Sinhgad Institute of Management</h4>
                        <p class="just">Sinhgad Institute of Management (SIOM™),Pune is a constituent of  Sinhgad Technical Education Society (STES)  and was established by Prof. M. N. Navale in 1996. This is the first self financed institution imparting PG courses in Management and Computer Application in western India accredited by NAAC in 2018, NBA New Delhi in 2013 and  2008. SIOM-MCA is the first MCA Institute in India to have successfully educated more than 15,000 students over the years and well-placed in some of the most renowned companies across the globe. Highly qualified, experienced and dedicated.</p>
                        <a href="http://sinhgad.edu/sinhgadmanagementinstitutes/" target="_blank">Visit Host Website <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="img/callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>Why be a part of<br>Global Virtual Summit 2020</h2><br>
                        <p>Ensure improvised visibility and productive collaborations to enable seamless transformations and innovation by skilling and reskilling of workforce .</p>
<p>Gain insights and create the skills and the competency frameworks 4.0, the models for assessment, sustenance and also for wellness (an essential component of Education 4.0) for Industry and Education 4.0 to be mutually reliant.</p>
                        <a href="contact.php">Be a Part</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
                <div class="col-lg-12">
                    <div class="services__title">
                        <div class="section-title">
                            <span></span>
                            <h2>The COLLABORATORS</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="services__item">
                                <a href="http://dbmg.org">
                                    <div class="services__item__icon">
                                    <img src="img/icons/si-1.png" alt="">
                                </div>
                                <h4>DIVERSE MULTIDISCIPLINARY BRAIN GROUP</h4></a>
                                <p class="just">The Diverse Multidisciplinary Brain Group is a team of erudite academicians,researchers, scientists and industry professionals with a vision to align to Industry 4.0/Industrial Internet of Things and act as creators and implementors of 21st century pedagogical,research and innovative methods and practices. Amidst them is a group who are proponents of machine vision those who practice, teach and conduct researches using IoT,Big Data, Cloud Computing in segments encompassing Additive Manufacturing to Autonomous Robots. The Group will initiate and synergize the symbiotic relationship between Industry and Academia for building 4.0 resources .</p><br>
                            <div class="col-lg-6">
                                <a href="http://dbmg.org" class="primary-btn" target="_blank">Visit DBMG</a>
                            </div>
                                </div>
                        </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="services__item">
                                <a href="http://">
                                    <div class="services__item__icon">
                                    <img src="img/icons/si-4.png" alt="">
                                </div>
                                <h4>FACULTY OF COMMERCE AND MANAGEMENT</h4></a>
                                <p class="just">Savitribai Phule Pune University, one of the premier universities in India, is positioned in the North-western part of Pune city. It occupies an area of about 411 acres. It was established on 10th February, 1949 under the Poona University Act. The university houses 46 academic departments. It is popularly known as the 'Oxford of the East'. It has about 307 recognized research institutes and 612 affiliated colleges offering graduate and under-graduate courses. The university attracts many foreign students due to its excellent facilities. It offers good accommodation facility. There is a provision of hostel for the students. There is a well-stocked library containing plenty of books regarding various subjects. The university offers different scholarships to the students. The university conducts seminars and conferences for the students.</p><br>
                            <div class="col-lg-6">
                                <a href="http://unipune.ac.in/" class="primary-btn" target="_blank">Visit SPPU</a>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Services Section End -->

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