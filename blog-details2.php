<?php Include_once 'connection.php';

session_start();
error_reporting(0);
if (!isset($_SESSION['id']))
    {
        header("Location: login.php");
    } else if(!isset($_GET['id']))
        {
        header("Location: blog_loginUser.php");
        }

?>
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

    <!-- Blog Details Hero Begin -->
    

        <?php          
                session_start();
                error_reporting(0);
                if(isset($_GET['id']))
                {
    
                $id= $_GET['id'];
                $result = mysqli_query($con,"SELECT * FROM blogs WHERE id = '$id' ");
                  
               
                while($row = mysqli_fetch_assoc($result)) {
                
                $Id=$row["id"];
                $BlogTitle=$row["BlogTitle"];
                $BlogQuote=$row["BlogQuote"];
                $BlogContent=$row["BlogContent"];
                $Create_Date=$row["create_date"];
                $UserId=$row["userID"];

                $UserQuery= mysqli_query($con,"SELECT * FROM registration WHERE id = '$UserId'");
                $User = mysqli_fetch_array($UserQuery);
                $FirstName=$User["f_name"];
                $LastName=$User["l_name"];
                $Name = $FirstName.' '.$LastName;

                $src=$row['file_name'];
                $path="http://localhost:/Global Virtual Summit/Upload/";
                $home=$path.$src;

        
                
                 // get the file extension
                $extension = pathinfo($FileName, PATHINFO_EXTENSION);
                ?>
        
        <section class="blog-hero spad set-bg" data-setbg="img/blog/blog-hero.jpg">
        

       
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__hero__text">
                        <h2> <?php echo $BlogTitle; ?></h2>
                        <ul>
                            <li>by <span><?php echo $Name; ?></span></li>
                            <li><?php echo $Create_Date; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <div class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                       
                       
                            <?php if($src){ ?>
                            <div class="">
                            <div class="row justify-content-center img-block">
                            <img src="<?php echo $home ;?>" alt="Image" title="<?php echo $home; ?>" width="500" height="500" class="img-responsive" />
                            </div>
                            </div>
                            <?php } ?>
                        

                        <div class="blog__details__text">
                            <pre><p><?php echo $BlogContent; ?></p></pre>
                        </div>
                        <div class="blog__details__quote">
                            <p> <?php echo $BlogQuote; ?></p>
                            
                            <i class="fa fa-quote-right"></i>
                        </div>
                       <!-- <div class="blog__details__desc">
                            <p>An average Internet user watches about 1.5 hours of online video every day. This means
                                that video can be a powerful marketing tool for getting your message before the eyes of
                                millions of people. However, not all videos are created equal.</p>
                            <p>Some of them are inherently more shareable on social media than others. Here’s a quick
                                look at how to make users want to share your videos on social media.</p>
                        </div>-->

                 <?php }}//while loop and if statement close here..
                ?>

                        <div class="blog__details__option">
                           <div class="blog__details__comment">
                            <h4>Leave a comment</h4>
                            <form action="#">
                                <div class="input__list">
                                    <input type="text" placeholder="First Name">
                                    <input type="text" placeholder="Last Name">
                                    <input type="text" placeholder="Email">
                                </div>
                                <textarea placeholder="Comment"></textarea>
                                <button type="submit" class="site-btn">Post Comment</button>
                            </form>
                        </div><br>

                        </div>


                        <div class="blog__details__recent">
                            <h4>Recent Posts</h4>
                            <div class="row">

            <?php
                $result = mysqli_query($con,"SELECT * FROM blogs order by create_date DESC limit 3 ");
                  
               
                while($row = mysqli_fetch_array($result)) {
                
                $Id=$row["id"];
                $BlogTitle=$row["BlogTitle"];
                $BlogQuote=$row["BlogQuote"];
                $BlogContant=$row["BlogContant"];
                $FileName=$row["file_name"];
                $Create_Date=$row["create_date"];
                $UserId=$row["userID"];

                $UserQuery= mysqli_query($con,"SELECT * FROM registration WHERE id = '$UserId'");
                 $User = mysqli_fetch_array($UserQuery);
                 $FirstName=$User["f_name"];
                 $LastName=$User["l_name"];

                 $Name = $FirstName.' '.$LastName;

                $src=$row['file_name'];
                $path="http://localhost:/Global Virtual Summit/Upload/";
                $home=$path.$src;

                 // get the file extension
                $extension = pathinfo($FileName, PATHINFO_EXTENSION);

?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__details__recent__item">
                                <?php if($src){ ?>
                                     <img src="<?php echo $home ;?>" alt="Image" title="<?php echo $home; ?>" width="" height="180" class="" />
                                <?php } ?>
                                    <h5>
                                        <?php if($BlogTitle) {
                                        $title = substr($BlogTitle,0,20);  
                                        echo $title."...."; }?>
                                    </h5>
                                        <span><?php echo $Create_Date; ?></span>
                                    </div>
                                </div>
                               
            <?php }  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->

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
            
                                <a href="#" class="primary-btn">See more</a>
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