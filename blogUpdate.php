<?php

Include_once 'connection.php';

session_start();
error_reporting(0);
if (!isset($_SESSION['id']))
    {
        header("Location: login.php");
    } else if(!isset($_GET['id']))
        {
        header("Location: blog_loginUser.php");
        }


          
    $userID=$_SESSION['id'];

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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Update Blog</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>Blog Form</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Call To Action Section Begin -->
    <section class="contact spad">
        <div class="container">
            <br><br><br><div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="contact__form">
                        <form action="update.php" method="POST" enctype="multipart/form-data">

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


                            $src=$row['file_name'];
                            $path="http://localhost:/Global Virtual Summit/Upload/";
                            $home=$path.$src;

                            $_SESSION['BlogId'] = $Id;

                            // get the file extension
                            $extension = pathinfo($FileName, PATHINFO_EXTENSION);
                            ?>


                            <input type="text" name="BlogTitle" value="<?php echo $BlogTitle ;?>" placeholder="Blog Title">
                            <input type="text" name="Quote"  value=" <?php echo $BlogQuote ;?>" placeholder="Quote">
                            <textarea  name="BlogContant" ><?php echo $BlogContent ;?> </textarea>
                             <?php if($src){ ?>
                            <div class="row col-md-12">
                            

                            <div class="row col-md-4 justify-content-center ">
                                <div class="breadcrumb__text">
                                    <label for="fileToUpload" class="primary-btn">Select Image</label>
                                 
                                <input type="file" onchange="readURL(this);" name="fileToUpload" id="fileToUpload">
                                </div>
                             </div>
                             <div class="row col-md-4 justify-content-center">   
                                <img alt="Selected Image will Display Here" id="test" width="150" height="150" src="#" />
                            </div>


                            <div class="row  img-block col-md-4 justify-content-center" style="margin-bottom: 10px">
                            
                            <img src="<?php echo $home ;?>" alt="Image" title="<?php echo $home; ?>" width="150" height="150" class="img-responsive" />


                            </div>
                            </div>

                            <script type="text/javascript">
                            function readURL(input) {
                            if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                            $('#test').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                            }
                            }
                            </script>
                            <?php } ?>
                          

                           <?php } }?>

                            <button type="submit" name="btn_Update" class="site-btn">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

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