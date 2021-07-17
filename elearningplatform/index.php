<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>CodeGeek</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="css/index-style.css">
        <style>
            .navbar-brand {
                opacity: 1.0;
                text-align: left;
                position: absolute;
                left: 5%;
                margin-left: -50px !important;

            }
            .dropbtn {
                background-color: #ffffff;
                color: black;
                margin-top: 10px;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #696969;}
        </style>
    </head>

    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

        <!-- PRE LOADER -->
        <section class="preloader">
            <div class="spinner">

                <span class="spinner-rotate"></span>

            </div>
        </section>


        <!-- MENU -->
        <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a class="navbar-brand " href="#"><img src="images/Learn.png" alt="Learncpp"
                                                           height="45" width="200"></a>
                </div>

                <!-- MENU LINKS -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                        <li><a href="#top" class="smoothScroll">Home</a></li>
                        <li><a href="#about" class="smoothScroll">About</a></li>
                        <li><a href="#courses" class="smoothScroll">Courses</a></li>
                        <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                        <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['username'])) : ?>
                            <div class="dropdown">
                                <button class="dropbtn"><?php echo $_SESSION['username']; ?></button>
                                <div class="dropdown-content">
                                    <a href="index.php?logout='1'">Log out</a>
                                </div>
                            </div>
                        <?php endif ?>
                    </ul>
                </div>

            </div>
        </section>


        <!-- HOME -->
        <section id="home">
            <div class="row">

                <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                        <div class="caption">
                            <div class="container">
                                <div class="col-md-6 col-sm-12">
                                    <h1>Distance Learning Center</h1>
                                    <h3>Our online tutorials are designed to fit in your industry supporting all-round
                                        with latest technologies.</h3>
                                    <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item item-second">
                        <div class="caption">
                            <div class="container">
                                <div class="col-md-6 col-sm-12">
                                    <h1>Start your programming journey with programming languages</h1>
                                    <h3>Our online tutorials are beginners friendly and also dont't forget that
                                        practice makes man perfect.</h3>
                                    <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a
                                        course</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item item-third">
                        <div class="caption">
                            <div class="container">
                                <div class="col-md-6 col-sm-12">
                                    <h1>Efficient Learning Methods</h1>
                                    <h3>If any queries do not hesitate to ask us. </h3>
                                    <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's
                                        chat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- FEATURE -->
        <section id="feature">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="feature-thumb">
                            <span>01</span>
                            <h3>Our Course</h3>
                            <p>CodeGeek, as the name suggest, is a free online Programming language learning platform.Where you can learn C++ and Python programming language.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="feature-thumb">
                            <span>02</span>
                            <h3>Books & Library</h3>
                            <p> C++ Primer 5th Edition, C++ Pocket Reference 1st Edition.</p>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <!-- ABOUT -->
        <section id="about">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <div class="about-info">
                            <h2>Start your journey to a better life with online programming tutorial</h2>

                            <figure>
                                <span><i class="fa fa-users"></i></span>
                                <figcaption>
                                    <h3>Our Profession</h3>
                                    <p>We are SE comp Engineering students studying at PES modern college,Pune.</p>
                                </figcaption>
                            </figure>

                            <figure>
                                <span><i class="fa fa-bar-chart-o"></i></span>
                                <figcaption>
                                    <h3>Free course</h3>
                                    <p>We provide free online courses for C++ and Python.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Courses -->
        <section id="courses">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Popular Courses<small>C++ Programming Language</small></h2>
                        </div>

                        <div class="owl-carousel owl-theme owl-courses">
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-thumb">
                                        <div class="courses-top">
                                            <div class="courses-image">
                                                <img src="images/python1.jpg" class="img-responsive"
                                                     alt="">
                                            </div>
                                        </div>

                                        <div class="courses-detail">
                                            <h3><a href="cintro1.php">Start your tutorial</a></h3>
                                            <p>Remember basics of subject is always a key of starting your journey
                                                with that subject.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-thumb">
                                        <div class="courses-top">
                                            <div class="courses-image">
                                                <img src="images/Cpp2.jpg" class="img-responsive"
                                                     alt="">
                                            </div>
                                        </div>

                                        <div class="courses-detail">
                                            <h3><a href="cexer.php">Let's start playing with C++ via coding</a></h3>
                                            <p>Hands on practice will make your concepts more sharp.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-thumb">
                                        <div class="courses-top">
                                            <div class="courses-image">
                                                <img src="images/Cpp3.jpg" class="img-responsive"
                                                     alt="">
                                            </div>
                                        </div>

                                        <div class="courses-detail">
                                            <h3><a href="cquiz.php">Test your knowledge</a></h3>
                                            <p>Let us know what you learned about C++.if you don't know
                                                anything don't worry our tutorial will cover all basics</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <br><br>
                            <h2><small>Python Programming Language</small></h2>
                        </div>

                        <div class="owl-carousel owl-theme owl-courses">
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-thumb">
                                        <div class="courses-top">
                                            <div class="courses-image">
                                                <img src="images/python3.jpg" class="img-responsive"
                                                     alt="">
                                            </div>
                                        </div>

                                        <div class="courses-detail">
                                            <h3><a href="Pintro1.php">Start your tutorial</a></h3>
                                            <p>Remember basics of subject is always a key of starting your journey
                                                with that subject.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-thumb">
                                        <div class="courses-top">
                                            <div class="courses-image">
                                                <img src="images/python2.jpg" class="img-responsive"
                                                     alt="">
                                            </div>
                                        </div>

                                        <div class="courses-detail">
                                            <h3><a href="pexer.php">Let's start playing with Python via coding</a></h3>
                                            <p>Hands on practice will make your concepts more sharp.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-thumb">
                                        <div class="courses-top">
                                            <div class="courses-image">
                                                <img src="images/python4.jpg" class="img-responsive"
                                                     alt="">
                                            </div>
                                        </div>

                                        <div class="courses-detail">
                                            <h3><a href="pquiz.php">Test your knowledge</a></h3>
                                            <p>Let us know what you learned about Python.if you don't know
                                                anything don't worry our tutorial will cover all basics</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <!-- TESTIMONIAL -->
        <section id="testimonial">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Student Reviews <small>from around the world</small></h2>
                        </div>

                        <div class="owl-carousel owl-theme owl-client">
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="images/tst-image1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Jackson</h4>
                                        <span>Student</span>
                                    </div>
                                    <p>You really do help young creative minds to get begin with programming and
                                        professional job search assistance. I’d recommend it to everyone!</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="images/tst-image2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Camila</h4>
                                        <span>Web developer</span>
                                    </div>
                                    <p>Trying something new is exciting! Thanks for the amazing tutorials and the
                                        practice problems which was able to make it interesting.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="images/tst-image3.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Barbie</h4>
                                        <span>CS Studentr</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aperiam tenetur nesciunt animi possimus provident eligendi quidem! Saepe, unde ullam!</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="images/tst-image4.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Andrio</h4>
                                        <span>student</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, aliquam quidem pariatur non quod, reiciendis itaque, ratione laborum laboriosam perspiciatis illo quis voluptates tempora.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
        </section>


        <!-- CONTACT -->
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <form id="contact-form" role="form" action="" method="post">
                            <div class="section-title">
                                <h2>Contact us <small>We love conversations. Let us talk!</small></h2>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <input type="text" name="mname" id="mname" class="form-control" placeholder="Enter full name" 
                                       required="">

                                <input type="email" name="memail" id="memail" class="form-control" placeholder="Enter email address"
                                       required="" >

                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tell us about your message"
                                          required="" ></textarea>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <input type="submit" class="form-control" name="send_mesg" value="send_mesg">
                            </div>

                        </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="contact-image">
                            <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <footer id="footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="footer-info">
                            <div class="section-title">
                                <h2>Headquarter</h2>
                            </div>
                            <address>
                                <p>1186/A, Off J.M. Road, Shivajinagar,<br> Pune, Maharashtra, 411005.</p>
                            </address>

                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                            </ul>

                            <div class="copyright-text">
                                <p>Copyright &copy; 2021 CodeGeek</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="footer-info">
                            <div class="section-title">
                                <h2>Contact Info</h2>
                            </div>
                            <address>
                                <p>+91 0000 0000, +92 1000 1000</p>
                                <p><a href="mailto:youremail.co">hello@youremail.co</a></p>
                            </address>

                            <div class="footer_menu">
                                <h2>Quick Links</h2>
                                <ul>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Investor</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- SCRIPTS -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>

    </body>

</html>