<?php Include_once 'connection.php';

session_start();
error_reporting(0);
if (!isset($_SESSION['id']))
    {
        header("Location: login.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                        <h2>Your Blog</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!--Authemticate User Blog / can modifiable -->
    <section class="blog spad">
        <div class="container">
            <div class="row col-sm-12 justify-content-center">
                    <div class="breadcrumb__text">
                        <a href="blogform.php" class="primary-btn">Create Blog</a>
                    </div>
                </div><br>




            <div class="row">

            <?php
                session_start();
                error_reporting(0);
          
                $userId=$_SESSION['id'];

                $result_per_page = 6;

                            $sql= "SELECT * FROM blogs where userID = '$userId' ";
                            $result  = mysqli_query($con,$sql);
                            $number_of_results = mysqli_num_rows($result);



                            $number_of_pages=ceil($number_of_results/$result_per_page);

                            if(!isset($_GET['firstpage'])){

                            $page=1;
                            }else{
                            $page=$_GET['firstpage'];
                            }
                            $this_page_first_result = ($page)*$result_per_page;
                            $this_page_first_result2 =$this_page_first_result -$result_per_page ;


                            $result = mysqli_query($con,"SELECT * FROM blogs where userID = '$userId' order by create_date LIMIT " .$this_page_first_result2.','.$result_per_page);

                if($result){

                while($row = mysqli_fetch_array($result)) {
                
                $Id=$row["id"];
                $BlogTitle=$row["BlogTitle"];
                $BlogQuote=$row["BlogQuote"];
                $BlogContant=$row["BlogContant"];
                $FileName=$row["file_name"];
                $Create_Date=$row["create_date"];
                
                 // get the file extension
                $extension = pathinfo($FileName, PATHINFO_EXTENSION);
                
                ?>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="blog__item">

                        <h4><?php if($BlogTitle) {
                                    $title = substr($BlogTitle,0,20);  
                                     
                                    echo $title."...."; }?>
                                    </h4>
                        
                        <ul>
                            <li><?php echo $Create_Date; ?></li>
                        </ul>
                        
                        <div>
                            <p><?php if($BlogQuote) {
                                    $story_desc = substr($BlogQuote,0,150);  
                                    //$story_desc = substr($story_desc,0,150);  
                                    echo $story_desc."...."; }
                           ?></p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="blog-details2.php?id=<?php echo $Id;?>">Read more <span class="arrow_right"></span></a>
                            </div>
                            <div class="col" style="text-align: end;">


                                <a href="blogUpdate.php?id=<?php echo $Id;?>"><i class="fa fa-edit" style="font-size:25px;color: white"></i></a>
                                
                                   <a href="DeleteBlog.php?id=<?php echo $Id;?>">   <i class="fa fa-trash" style="font-size:25px;color: white"></i></a>
                                

                            

                                  
                                
                            </div>
                        </div>
                    </div>
                </div>
               <?php } //While Loop Close
            }//'if' statement close
            else{

                ?>
                <!--if User has not posted any blog than throw message-->
                
                
                        <div>
                            <h2>You have not posted any blog ...</h2>
                        </div>
                    

                <?php
                 }// else statement close
                ?>
                


                
            </div>

             <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option blog__pagi">
                        <?php
                                if($page > 1)
                                {
                                $Prvpage= $page-1 ;

                                echo '<a  href="blog_loginUser.php?firstpage=' . $Prvpage . '" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>';

                                }

                                $Nxtpage= $page + 1 ;  
                                for($page=1;$page<=$number_of_pages;$page++){
                                echo '<a class="number__pagination" href="blog_loginUser.php?firstpage=' . $page . '">' .$page . '</a>


                                ';}
                                if($page> $Nxtpage)
                                {
                                echo '<a  href="blog_loginUser.php?firstpage=' . $Nxtpage . '" class="arrow__pagination right__arrow"> Next <span class="arrow_right"></span></a>';
                                }


                                ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End section-->


    <!--  Blog Section Begin / Other Peoples blog / only readable-->
    <section class="blog spad">
        <div class="container">
        <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Other Author's Blog</h2>
                    </div><br>
                </div>
            <div class="row">
                
                <?php

                
                 $userId=$_SESSION['id'];

                $result_per_page = 6;

                            $sql= "SELECT * FROM blogs where userID != '$userId' ";
                            $result  = mysqli_query($con,$sql);
                            $number_of_results = mysqli_num_rows($result);



                            $number_of_pages=ceil($number_of_results/$result_per_page);

                            if(!isset($_GET['page'])){

                            $page=1;
                            }else{
                            $page=$_GET['page'];
                            }
                            $this_page_first_result = ($page)*$result_per_page;
                            $this_page_first_result2 =$this_page_first_result -$result_per_page ;


                            $result = mysqli_query($con,"SELECT * FROM blogs where userID != '$userId' order by create_date LIMIT " .$this_page_first_result2.','.$result_per_page);
                  
              
                while($row = mysqli_fetch_array($result)) {
                
                $Id=$row["id"];
                $BlogTitle=$row["BlogTitle"];
                $BlogQuote=$row["BlogQuote"];
                $BlogContant=$row["BlogContant"];
                $FileName=$row["file_name"];
                $Create_Date=$row["create_date"];
                $UserId=$row["userID"];

                $UserQuery= mysqli_query($con,"SELECT * FROM registration WHERE id = '$UserId' ");
                 $User = mysqli_fetch_array($UserQuery);
                 $FirstName=$User["f_name"];
                 $LastName=$User["l_name"];

                 $Name = $FirstName.' '.$LastName;
                
                 // get the file extension
                $extension = pathinfo($FileName, PATHINFO_EXTENSION);
                ?>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="blog__item">

                        
                        <div><h4><?php if($BlogTitle) {
                                    $title = substr($BlogTitle,0,20);  
                                     
                                    echo $title."...."; }?></h4></div>
                        
                        <ul>
                            <li><?php echo $Create_Date; ?></li>
                        </ul>
                        
                        <div>
                            <p><?php if($BlogQuote) {
                                    $story_desc = substr($BlogQuote,0,150);  
                                   // $story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
                                    echo $story_desc."...."; }
                           ?></p>
                        </div>

                        <div>
                                 <p>Author:- <?php echo $Name; ?></p>
                        </div>

                        <div>
                            <a href="blog-details.php?id=<?php echo $Id;?>">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <?php } //While Loop Close
                ?>
               
            

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option blog__pagi">
                        <?php
                                if($page > 1)
                                {
                                $Prvpage= $page-1 ;

                                echo '<a  href="blog_loginUser.php?page=' . $Prvpage . '" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>';

                                }

                                $Nxtpage= $page + 1 ;  
                                for($page=1;$page<=$number_of_pages;$page++){
                                echo '<a class="number__pagination" href="blog_loginUser.php?page=' . $page . '">' .$page . '</a>


                                ';}
                                if($page> $Nxtpage)
                                {
                                echo '<a  href="blog_loginUser.php?page=' . $Nxtpage . '" class="arrow__pagination right__arrow"> Next <span class="arrow_right"></span></a>';
                                }


                                ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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