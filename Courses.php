<?php 
include("admin/classes/manage_courses_class.php");
$courses=new manage_courses_class;			// creating object of  manage_courses_class.php
$course=$courses->display_courses();    //calling display_courses() method from manage_courses_class.php

 ?>

<!doctype html>
<html lang="en">

<head>
    <title>Courses</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
        <!--swiper js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Students Manifesto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  " aria-current="page" href="index.html">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="Courses.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Notes.php">Notes</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                    </li>
                    
                </ul>

              
            </div>
        </div>
    </nav>

    <section class="section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(img/big_image_1.jpg); height:100%;">
        <div class="container">
            <div class="row justify-content-center align-items-center intro">
                <div class="mb-5 element-animate" data-aos="fade-up">
                    <h1>Level Up Your Skills</h1>
                    <p class="lead">See our courses Below. Learn something new every day with student menifesto lorem ipsum
                        dolor sit amet.</p>
                    <p><a href="student_signin.html" class="btn btn-primary">Sign up and get a 7-day free trial</a></p>
                </div>

            </div>
        </div>
    </section>


    <section class="site-section ">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2>Our Courses</h2>
                    <p class="lead">We provide enormous amount of Courses that will help you build you knowledge to a great extent and have confident in the specific field.</p>
                </div>
            </div>


            <div class="row top-course">
                <?php foreach ($course as $course_list)
             {
	          ?>
                <div class=" col-md-3 col-sm-6 col-12 ">
                    <div class="Cards"  data-aos="fade-up" data-aos-duration="3000">
                        <a href="java.php?course_name=<?php echo $course_list['language_name'];?> " class="course">
                            <img src="<?php echo $course_list['language_image'] ?>" alt="Image placeholder">
                            <h2>
                                <?php echo $course_list['language_name']; ?>
                            </h2>
                            <p>Enroll Now</p>
                        </a>
                    </div>
                </div>
                <?php } ?>
                
                <!-- END row -->

                <div class="row top-course">
                    <div class=" col-md-3 col-sm-6 col-12">
                        <div class="Cards" data-aos="fade-up" data-aos-duration="3000">
                            <a href="course-single.html" class="course">
                                <img src="img/webdesign.jpg" alt="Image placeholder">
                                <h2>Web Design 101</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>
                    </div>
                    <div class=" col-md-3 col-sm-6 col-12">
                        <div class="Cards " data-aos="fade-up" data-aos-duration="3000">
                            <a href="course-single.html" class="course">
                                <img src="img/wordpress.jpg" alt="Image placeholder">
                                <h2>Learn How To Develop WordPress Plugin</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>
                    </div>
                    <div class=" col-md-3 col-sm-6 col-12">
                        <div class="Cards"  data-aos="fade-up" data-aos-duration="3000">
                            <a href="course-single.html" class="course">
                                <img src="img/javascript.jpg" alt="Image placeholder">
                                <h2>JavaScript 101</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>
                    </div>
                    <div class=" col-md-3 col-sm-6 col-12">
                        <div class="Cards"  data-aos="fade-up" data-aos-duration="3000" >
                            <a href="course-single.html" class="course">
                                <img src="img/angularjs.jpg" alt="Image placeholder">
                                <h2>Learn AngularJS 2</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>
                    </div>



                    <!-- END row -->


                    <div class="row top-course">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="Cards">
                                <a href="course-single.html" class="course">
                                    <img src="img/photoshop.jpg" alt="Image placeholder">
                                    <h2>Photoshop Design 101</h2>
                                    <p>Enroll Now</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="Cards">
                                <a href="course-single.html" class="course">
                                    <img src="img/reactjs.jpg" alt="Image placeholder">
                                    <h2>Learn Native ReactJS</h2>
                                    <p>Enroll Now</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="Cards">
                                <a href="course-single.html" class="course">
                                    <img src="img/angularjs.jpg" alt="Image placeholder">
                                    <h2>Learn AngularJS 2</h2>
                                    <p>Enroll Now</p>
                                </a>
                            </div>
                        </div>
                        <div class=" col-md-3 col-sm-6 col-12">
                            <div class="Cards">
                                <a href="course-single.html" class="course">
                                    <img src="img/photoshop.jpg" alt="Image placeholder">
                                    <h2>Photoshop Design 101</h2>
                                    <p>Enroll Now</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END row -->
                </div>
    </section>
    <!-- END section -->

    <section id="Teachers" style="background-image: url(img/bg_2.jpg);position:relative;">
        <h1>Teachers</h1>
        <p> Here are the teachers that will teach you</p>
        <div class="swiper mySwiper">
            <div class="expert-box swiper-wrapper">
                <div class="profile swiper-slide" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img class="avatar" src="img/Niraj sir.jpeg" alt="">
                    <h6>Niraj Kumar</h6>
                    <p>Hardware Expert</p>
                    <div class="pro-links" data-aos="zoom-in" data-aos-offset="50">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
                <div class="profile swiper-slide" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    <img class="avatar" src="img/abhay sir.jfif" alt="">
                    <h6>Abhay Kumar</h6>
                    <p>Data Structure And Algorithm Expert</p>
                    <div class="pro-links" data-aos="zoom-in" data-aos-offset="50">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>

                </div>

                <div class="profile swiper-slide" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"data-aos-duration="500">
                    <img class="avatar" src="img/ramnish sir.jpeg" alt="">
                    <h6>Ramnish Sinha</h6>
                    <p>DBMS Expert</p>
                    <div class="pro-links" data-aos="zoom-in" data-aos-offset="50">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>


    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo">
                    <h4>Notes</h4>
                </a>
                <p>
                    Conventional books
                    Short Notes
                    Previous Year Papers
                    Practice sets
                    Doubt solving
                </p>
            </div>
            <div class="footer_2">
                <h4>Links</h4>
                <ul class="parmalinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">Home</a></li>
                    <li><a href="courses.html">Home</a></li>
                    <li><a href="login.html">Home</a></li>
                </ul>
            </div>
            <div class="footer_3">
                <h4>Privacy</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Cndition</a></li>
                </ul>
            </div>
            <div class="footer_4">
                <h4>Contact us</h4>
                <div>
                    <p>80925 83083</p>
                    <p>nandnip15@gmail.com</p>
                </div>

                <ul class="footer_socials">
                    <li>
                        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    </li>

                </ul>
            </div>

        </div>

    </footer>
    <script src="js/myscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                600: {
                    slidesPerView: 2

                },
                769: {
                    slidesPerView: 3
                }


            }

        });
    
  
   
</script>
   
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        }

        );
    </script>
</body>

</html>