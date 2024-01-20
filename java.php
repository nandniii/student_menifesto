<?php 
include("admin/classes/manage_videos_class.php");
$videos=new manage_videos_class;			// creating object of  manage_courses_class.php
$video=$videos->display_videos();    //calling display_courses() method from manage_courses_class.php

 ?>
 <?php 
include("admin/classes/manage_courses_class.php");
$courses=new manage_courses_class;			// creating object of  manage_courses_class.php
$course=$courses->display_courses();    //calling display_courses() method from manage_courses_class.php
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'student_menifesto');

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web D</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!--swiper js-->

    <link rel="stylesheet" href="css/fontawesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <body>
        <section class="section-cover overlay" data-stellar-background-ratio="0.5">
            <video autoplay muted loop plays-inline class="back-video">
                <source src="img/video/Network.mp4" type="video/mp4" />
            </video>

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
 
            <?php 
              $course_name=$_GET['course_name'];
              $q="select * from programming_languages where language_name='$course_name'";
              //echo $course_name;
              $query=mysqli_query($con,$q);
              while ($row=mysqli_fetch_array($query))
             
        
 {
	?>

            <div class="container">
                <div class="row align-items-center section-cover-inner justify-content-center">
                    <div class="col-md-12">

                        <div class="mb-5 element-animate">
                            <div class="row align-items-center">
                                <div class="col-md-8" data-aos="fade-right">
                                    <h1 class="mb-0"><?php echo $row['language_name']; ?></h1>
                                    <p>By Niraj Kumar</p>
                                    <p class="lead mb-5"><?php echo $row['language_description']; ?></p>
                                    <p><a href="playlist.php?course_name=<?php echo $row['language_name'] ?>" class="btn btn-danger">Start Series</a> <a href="#"
                                            class="btn btn-outline-dark">Add To Watch List</a></p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6 img-con">
                                    <img src="<?php echo $row['language_image']; ?> " alt="Image placeholder"
                                    class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?> 
        </section>


        <section class="site-section episodes" style="background-image: url(img/choosing-bg.jpg);">

            <div class="container">
           
<?php 
$n=1;

    $course_name=$_GET['course_name'];
      $q="SELECT video_title,video_name from videos  WHERE course_name='$course_name' GROUP BY video_title";
      //echo $course_name;
      $query=mysqli_query($con,$q);
      while ($row=mysqli_fetch_array($query))
     {
        $color_class = ($n % 2 == 0) ? 'bg-light' : 'custom-bg';

        ?>
                <div class="row <?php echo $color_class ?> align-items-center p-4 episode" data-aos="zoom-in-up">
                    <div class="col-md-3">
                   
                        <span class="episode-number"><?php echo $n ?></span>
                    </div>
                    <div class="col-md-9 box">
                        <p class="meta">Episode <?php  echo $n ?> <a href="#">Runtime 2:53</a></p>
                       
                        <h2><a href="#"><?php echo $row['video_title']; ?></a></h2>
                  
                        <ul class="option">
                        <?php
                        $no=1;
                    $q2="SELECT video_name FROM videos WHERE video_title='".$row['video_title']."'";
                    $query2=mysqli_query($con,$q2);
                    while ($row2=mysqli_fetch_array($query2)){
                        
                    ?>
                           <li><span><?php  echo $no ?></span><?php echo $row2['video_name']; ?></li>
                         <?php
                         $no++;
                    } 
                    ?>
                        </ul> 
                    
                    </div>
                    
                </div>
                
     <?php    $n++ ;} ?> 
     <style>
  .custom-bg {
    background-color: rgb(217, 226, 245);
  }
</style>

        </section>

        <section class="site-section ">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2>You May Also Like</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum
                            maiores adipisci pariatur, eveniet.</p>
                    </div>
                </div>

                <div class="row top-course mySwiper">
                    <div class="swiper-wrapper">
                        <div class="Cards swiper-slide">
                            <a href="course-single.html" class="course">
                                <img src="img/webdesign.jpg" alt="Image placeholder">
                                <h2>Web Design 101</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>


                        <div class="Cards swiper-slide">
                            <a href="course-single.html" class="course">
                                <img src="img/wordpress.jpg" alt="Image placeholder">
                                <h2> WordPress Plugin</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>



                        <div class="Cards swiper-slide">
                            <a href="course-single.html" class="course">
                                <img src="img/javascript.jpg" alt="Image placeholder">
                                <h2>JavaScript 101</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>


                        <div class="Cards swiper-slide">
                            <a href="course-single.html" class="course">
                                <img src="img/reactjs.jpg" alt="Image placeholder">
                                <h2>Learn Native ReactJS</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>



                        <!-- END row -->


                        <div class="Cards swiper-slide">
                            <a href="course-single.html" class="course">
                                <img src="img/webdesign.jpg" alt="Image placeholder">
                                <h2>Web Design 101</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>


                        <div class="Cards swiper-slide">
                            <a href="course-single.html" class="course">
                                <img src="img/wordpress.jpg" alt="Image placeholder">
                                <h2>Learn How To Develop WordPress Plugin</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>


                        <div class="Cards swiper-slide">
                            <a href="course-single.html" class="course">
                                <img src="img/javascript.jpg" alt="Image placeholder">
                                <h2>JavaScript 101</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>


                        <div class="Cards swiper-slide">
                            <a href="course-single.html" class="course">
                                <img src="img/angularjs.jpg" alt="Image placeholder">
                                <h2>Learn AngularJS 2</h2>
                                <p>Enroll Now</p>
                            </a>
                        </div>
                    </div>

                </div>
        </section>
        <style>
            .navbar a {
                color: #f0ad4e;
            }

            .site-section {
                background-image: url(img/choosing-bg.jpg);
                color: aliceblue;
            }

            .site-section h2 {
                color: beige;
            }

            .swiper-slide {
                background-position: center;
                background-size: cover;
                width: 350px;
                height: 400px;
                filter: blur(1px);

            }

            .swiper-slide-active {
                filter: blur(0px);
                filter: brightness(4px);
            }
        </style>
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
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <script src="js/myscript.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 300,
                duration: 1000,
            });
        </script>

        <script>
            let box = document.querySelector('.box');
            box.onclick = function () {
                box.classList.toggle('active');
            }

            const container = document.getElementsByClassName('episode');
            for (i = 0; i < container.length; i++) {
                container[i].addEventListener('click', function () {
                    this.classList.toggle('active')
                })
            }
        </script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 100,
                    modifier: 2,
                    slideShadows: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                loop: true,
            });
        </script>



    </body>

</html>