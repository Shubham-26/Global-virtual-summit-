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
    <link rel="stylesheet" href="img.css" type="text/css">
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
                        <h2>Contact us</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->




    <section id="speakers" class="section-with-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Speakers</h2>
    </div><div class="row cent">         
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof. Mamun Bin Ibne Reaz.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof. Mamun Bin Ibne</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof. Dr. Orkun Yildiz.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof. Dr. Orkun Yildiz</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof. Saurabh Sinha.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof. Saurabh Sinha</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Ms. Shilpi Talukdar.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Ms. Shilpi Talukdar</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. Amlan Chakrabarti.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. Amlan Chakrabarti</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. Manoj Kumar.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. Manoj Kumar</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Mr. Atul Jawale.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Mr. Atul Jawale</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. Parag Kalkar.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. Parag Kalkar</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof.(Dr.) Madhumi Mitra.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof.(Dr.) Madhumi Mitra</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Mr. Jayant Shah.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Mr. Jayant Shah</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof. Babu Sena Paule.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof. Babu Sena Paule</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. Archana Sharma.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. Archana Sharma</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Mr. Rajesh Panda.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Mr. Rajesh Panda</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof. (Dr.) Rik Das.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof. (Dr.) Rik Das</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. (Prof.) Mitali Talukdar.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. (Prof.) Mitali Talukdar</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof. Jagdish Sheth.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof. Jagdish Sheth</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. Noella Edelmann.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. Noella Edelmann</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. Sudhir Gavhane.png" alt="" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. Sudhir Gavhane</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Mr. G K Pillai.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Mr. G K Pillai</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof.(Dr.) Sanjay Basu.png" alt="" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof.(Dr.) Sanjay Basu</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Prof. N K Goyal.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Prof. N K Goyal</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. C.N. Narayana.png" alt="" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. C.N. Narayana</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. Goutam Chattopadhyay.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. Goutam Chattopadhyay</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. Bhimaraya Metri.png" alt="" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. Bhimaraya Metri</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Dr. S. Jimmy Gandhi.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Dr. S. Jimmy Gandhi</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Mr. Manish Jain.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Mr. Manish Jain</a></h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/Mr. Prantik  Majumdar.png" alt="" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Mr. Prantik  Majumdar</a></h3>
        </div>
      </div>
    </div>

     <div class="container my-5 pt-5">
                      <div class="row mt-30">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
                    <div class="box">
                        <img src="img/team/sp1.png">
                        <div class="box-content">
                            <h3 class="title">Prof. M.N. Navale</h3>
                            <span class="post">Founder President,<br>Sinhgad Technical Education Society, Pune.</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
                    <div class="box">
                        <img src="img/team/sp2.png">
                        <div class="box-content">
                            <h3 class="title">Dr.(Mrs.) Sunanda M. Navale</h3>
                            <span class="post">Web Developer</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
                    <div class="box">
                        <img src="img/team/sp4.png">
                        <div class="box-content">
                            <h3 class="title">Mrs. Rachana M. Navale-Ashtekar</h3>
                            <span class="post">Web Developer</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>



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
                    <div class="col-lg-4 col-md-6">
                        <div class="footer__option__item">
                            <h5>About us</h5>
                            <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                                production company specializing.</p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer__option__item">
                            <h5>Who we are</h5>
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer__option__item">
                            <h5>Our work</h5>
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
                            <h5>Newsletter</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
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