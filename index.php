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
                                <li class="active"><a href="./index.php">Home</a></li>
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
                                <?php }
                                ?>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>STATE - OF - MATURITY AND COMPETENCE NEEDS, COLLABORATIVE DIGITAL SHIFT</span>
                                <h2>Global Virtual Summit<br>December 2020</h2>
                                <a href="#" class="primary-btn">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/3199.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>STATE - OF - MATURITY AND COMPETENCE NEEDS, COLLABORATIVE DIGITAL SHIFT</span>
                                <h2>Global Virtual Summit<br>December 2020</h2>
                                <a href="#" class="primary-btn">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/23323.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>STATE - OF - MATURITY AND COMPETENCE NEEDS, COLLABORATIVE DIGITAL SHIFT</span>
                                <h2>Global Virtual Summit<br>December 2020</h2>
                                <a href="#" class="primary-btn">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span></span>
                            <h2>Objective</h2>
                        </div>
                        <p class="just">The incessant need of workforce competency across Engineering, Business, Design and Management verticals, along with the critical thinking and problem solving traits to be acquired in the era of Industry 4.0 was a trigger to mobilize the initiative in the form of a summit...</p>
                        <a href="about.php" class="primary-btn">Know more</a>
                    </div>
                </div>
                <div class="col-lg-8">
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




    <section id="speakers" class="set-bg" data-setbg="img/3005019.jpg">
  <div class="container">

 <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <h2>Chief Patrons</h2>
                    </div>
                </div>
            </div>
<div class="row cent">
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="img/team/sp1.png" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Prof. M.N. Navale</a></h3>
          <p>Founder President,<br>Sinhgad Technical Education Society, Pune.</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="img/team/sp2.png" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Dr.(Mrs.) Sunanda M. Navale</a></h3>
          <p>Founder Secretory,<br>Sinhgad Technical Education Society, Pune.</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="">
          <div class="speaker" data-aos="fade-up" data-aos-delay="300">
            <img src="img/team/sp4.png" class="img-fluid" width="100%">
          </div>
          <div class="sdetails">
            <h3><a href="team-details.php">Mrs. Rachana M. Navale-Ashtekar</a></h3>
            <p>Vice President(Admin),<br>Sinhgad Technical Education Society, Pune.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="400">
          <img src="img/team/sp3.png" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Mr. Rohit M. Navale</a></h3>
          <p>Vice President(HR),<br>Sinhgad Technical Education Society, Pune.</p>
        </div>
      </div>
    </div>

    <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <h2>Patrons</h2>
                    </div>
                </div>
            </div>
            <div class="row cent">
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="img/team/shahani.jpg" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">AMr. G.K. Shahani</a></h3>
          <p>Sr. Director,<br>Management Programme, STES, Pune</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="img/team/deshpande.png" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Dr. A.V. Deshpande</a></h3>
          <p>Director,<br>STES, Vadgaon (Bk.) Campus, Pune.</p>
        </div>
      </div>
    </div>
    <br><br>
</div>
</section>

<section id="speakers" class="set-bg" data-setbg="img/back1.jpg">
  <div class="container">
    <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  team__title">
                        <h2>Team</h2>
                    </div>
                </div>
            </div>    
    <div class="row cent">
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/Brainstormers/Dr. Chandrani Singh.png" alt="Dr. Chandrani Singh" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Dr. Chandrani Singh</a></h3>
          <p>Director, MCA SIOM.</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/Brainstormers/den.png" alt="Dr. Chandrani Singh" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Dr. Denial Penkar</a></h3>
          <p>Director, SIOM.</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/Brainstormers/Dr. Manisha Kumbhar.png" alt="Dr. Manisha Kumbhar" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Dr. Manisha Kumbhar</a></h3>
          <p>Professor & Academic Coordinator (MCA)</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="">
          <div class="speaker" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/img/Brainstormers/Dr. Milind Godase.png" alt="Dr. Milind Godase" class="img-fluid" width="100%">
          </div>
          <div class="sdetails">
            <h3><a href="team-details.php">Dr. Milind Godase</a></h3>
            <p>Professor (MCA)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/Brainstormers/Dr. Sunil Khilari.png" alt="Dr. Sunil Khilari" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Dr. Sunil Khilari</a></h3>
          <p>Asst. Professor (MCA)</p>
        </div>
      </div>
    </div>
    <br><br>

    <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <h2>Tech and Design Geek</h2>
                    </div>
                </div>
            </div>
            <div class="row cent">
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/Tech and Design Geek/Prof. Dhirendra Kumar.png" alt="Dr. Chandrani Singh" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Prof. Dhirendra Kumar</a></h3>
          <p>Asst. Professor, TPO (MCA)</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/Tech and Design Geek/Prof. Aparna Kulkarni.png" alt="Dr. Manisha Kumbhar" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Prof. Aparna Kulkarni</a></h3>
          <p>Asst. Professor (MCA)</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-5">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/Tech and Design Geek/Sanket.png" alt="Dr. Milind Godase" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="team-details.php">Mr. Sanket Vadgama</a></h3>
          <p>Student</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="speakers" class="set-bg" data-setbg="img/25552.jpg">
  <div class="container">

<div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <h2>Industry</h2>
                    </div>
                </div>
            </div>
              <div class="row cent">
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
          <img src="assets/img/speakers/Mr. Rajesh Panda.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Mr. Rajesh Panda</a></h3>
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
          <img src="assets/img/speakers/Mr. Prantik  Majumdar.png" alt="" class="img-fluid" width="100%">
        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Mr. Prantik  Majumdar</a></h3>
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
          <img src="assets/img/speakers/Ms. Shilpi Talukdar.png" alt="" class="img-fluid" width="100%">

        </div>
        <div class="sdetails">
          <h3><a href="http://dmbg.org">Ms. Shilpi Talukdar</a></h3>
        </div>
      </div>
              </div>

            <div class="col-lg-12">
                    <div class="section-title team__title">
                        <h2>Academia</h2>
                    </div>
                </div>

    <div class="row cent">         
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
    </div>
</div>
</section>
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

    <!-- Team Section End -->
    <!-- Work Section Begin
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-1.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-2.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-3.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item large__item set-bg" data-setbg="img/work/work-4.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-5.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-6.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-7.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    Work Section End -->

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
                        <p class="just">Sinhgad Institute of Management (SIOM™),Pune is a constituent of  Sinhgad Technical Education Society (STES)  and was established by Prof. M. N. Navale in 1996. This is the first self financed institution imparting PG courses in Management and Computer Application in western India accredited by NAAC in 2018, NBA New Delhi in 2013 and  2008. SIOM-MCA is the first MCA Institute in India to have successfully educated more than 15,000 students over the years and well-placed in some of the most renowned companies across the globe. Highly qualified, experienced and dedicated....</p>
                        <a href="http://sinhgad.edu/sinhgadmanagementinstitutes/" target="_blank">Visit Host Website <span class="arrow_right"></span></a><br><br>
                        <a href="about.php">Read more <span class="arrow_right"></span></a>
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
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <a href="http://dbmg.org">
                                    <div class="services__item__icon">
                                    <img src="img/icons/si-1.png" alt="">
                                </div>
                                <h4>DIVERSE MULTIDISCIPLINARY BRAIN GROUP</h4></a>
                                <p class="just">The Diverse Multidisciplinary Brain Group is a team of erudite academicians,researchers, scientists and industry professionals with a vision to align to Industry 4.0/Industrial Internet of Things and act as creators and implementors of 21st century pedagogical,research and innovative methods and practices...</p><br>
                                <div class="row">
                                    <div class="col-lg-6">
                                <a href="about.php" class="primary-btn">Know more</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="http://dbmg.org" class="primary-btn" target="_blank">Visit DBMG</a>
                            </div>
                                </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <a href="http://">
                                    <div class="services__item__icon">
                                    <img src="img/icons/si-4.png" alt="">
                                </div>
                                <h4>FACULTY OF COMMERCE AND MANAGEMENT</h4></a>
                                <p class="just">Savitribai Phule Pune University, one of the premier universities in India, is positioned in the North-western part of Pune city. It occupies an area of about 411 acres. It was established on 10th February, 1949 under the Poona University Act. The university houses 46 academic departments.It is popularly known as the 'Oxford of the East'. It has about 307...</p><br>
                                <div class="row">
                                    <div class="col-lg-6">
                                <a href="about.php" class="primary-btn">Know more</a>
                            </div>
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
            <!--<div class="footer__top">
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
            </div>-->
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
            <!--<div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>-->
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