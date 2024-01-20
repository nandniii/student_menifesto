<?php 
	 session_start();

 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Menifesto</title>
    
    <!----css file link
    <link rel="stylesheet" type="text/css" href="./css/programming.css">-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!----Linking google fonts
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">-->

    <!----font-awsome start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--swiper js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />




    <style>

        body {
            background: #FC354C;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #1f2641, #2e3267);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #1f2641, #2e3267);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: white;
            font-size: medium;
        }

      
    
        
       
        </style>
</head>

<body>


    <!---Navigation Starts	----->


    
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
                        <a class="nav-link active " aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="Courses.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Notes.php">Notes</a>
                    </li>
                    
                </ul>

              
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>


    <!---programming languages Section Start	----->
    <br><br>
    <section class="latest-news-area" id="latest">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2><b>PROGRAMMING LANGUAGES</b></h2>
                        <div class="sub-heading">
                            Following are the available programming languages <br>
                            Start learning today
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?php


			   // session_start();

			   $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'student_menifesto');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
 								<div class="latest-news-wrap" >
 									<div class="news-img">
 										<img src=<?php echo $res['language_image']; ?> class="img-responsive">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content">
 										<p>
 											<?php echo $res['language_description']; ?>
 										</p><br>
 										<a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>">Start Reading...</a>
 									</div>
 								</div>
 							</div>

		

<?php } ?>




         

        
        </div>

    </section>








    <!---programming languages Section Start ends	----->


</body>

</html>