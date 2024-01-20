<?php 
session_start();


 ?>
<?php
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'student_menifesto');
require 'admin/manage_videos/comments_inc.php'; 
?>
<?php 
include("admin/classes/manage_courses_class.php");
$courses=new manage_courses_class;			// creating object of  manage_courses_class.php
$course=$courses->display_courses();    //calling display_courses() method from manage_courses_class.php

 ?>
 <?php 
include("admin/classes/manage_quiz_class.php");
$quiz=new manage_quiz_class;			// creating object of  manage_courses_class.php
    $quiz_list=$quiz->display_quiz_courses();   //calling display_courses() method from manage_courses_class.php

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>playlist</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <nav class="navbar  navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Students Manifesto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    </li>
                    <?php  
                    $course=$_GET['course_name'];
                    $sql="select * from programming_languages where language_name='$course'";
                    $result=mysqli_query($con,$sql);
                    while ($row=mysqli_fetch_array($result))
                     {
                      ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $row['language_name']; ?></a>
                        <?php } ?> 

                     
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <style>
        body {
            background-color: rgb(30, 29, 29);
            
        }
    </style>


    <div class="Container">
        <div class="main-video">
            <div class="video">
                <h3 class="title"></h3>
                 <?php  
                  
     
                    // $_SESSION['vid']=$_GET['video_id'];
                    $course=$_GET['course_name'];
                    $sql="select * from videos where course_name='$course'";
                    $result=mysqli_query($con,$sql);
                    while ($row=mysqli_fetch_array($result))
                     {
                     ?>
                     <iframe style="border:1px #999 solid;" width="850" height="470"  src=<?php echo $row['video_path'];   //fetching youtube video path from database & storing into src attribute
                     }
                    
    

                 ?> allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
        </div>
        
        <div class="vid-l">
       
            <div class="video-list">
           
       
                <h2>Content</h2>
            <?php 
            /*   this is java.php line 104 code*/ 
            
            
            // $_SESSION['vid']=$_GET['video_id'];
              $course_name=$_GET['course_name'];
             $q="select * from videos where course_name='$course_name'";
               //echo $course_name;
             $query=mysqli_query($con,$q);
             while ($row=mysqli_fetch_array($query))
             {

                ?> 
                <div class="vid">
                    <video src="<?php echo $row['video_path']; ?>" muted></video>
                    <h3 class="title"><?php echo $row['video_name']; ?></h3>
                </div>
           
               
            
                <?php } ?> 


               <div>
               <div class="col-md-4">
 <center><label>select Course</label><br>
    <form method="POST" action="online_quize/question_show.php">
    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">

      <?php 
                                   //calling show_courses() method of users class
       foreach ($quiz_list as $quiz) 
       {
         
 ?>

      <option value="<?php echo $quiz['id'] ;?>"><?php echo $quiz['cat_name']; ?></option>    <!-- displaying course name in dropdown -->
    

      <?php
}

      ?>
    </select>
      <button type="submit" class="btn btn-success mt-3 ">Start Quiz</button>
  </form></center>
</div>
             </div>
             
               
            </div>
        </div>

        <div class="tabs">
            <div class="tab-header">
                <div class="active">
                    <i class="fa-solid fa fa-q"> Q&A</i>
                </div>
                <div>
                    <i class="fa-solid fa fa-book-open"> Notes</i>
                </div>
                <div class="Con">
                    <i class="fa-solid fa-book-open"> Contents</i>
                </div>
            </div>
            <div class="tab-indicator"></div>
            <div class="tab-body">
                <div class="active">
                    <p>this is question answer section</p>
                    <br><br>

    <div class='commentdiv shadow bg-light' style="border:1px #d2c8c8 solid; background-color: #dfe1e4; width:790px; ">
<?php  
           $video_id=$_GET['video_id'];    //getting the value of video is from the previous page using GET
  echo "      
        <form method='POST' action='".setComments($con)."'>
          <input type='hidden' name='uid' value='Anonymous'>
          <input type='hidden' name='vid' value='".$video_id."'>
          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
          <textarea name='message'></textarea><br>
          <button type='submit' name='commentSubmit' class='btn btn-danger'>Comment</button>
        </form><br><br>
      ";      
?>  </div>
  
<?php 

getComments($con);
     

 ?>
                
                
                </div>
                <div>
                    <h2>this is notes section</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi eaque ex provident quaerat,
                        officia
                        ullam facilis aspernatur vitae unde beatae voluptatibus numquam autem sequi, maxime aperiam
                        minus,
                        modi inventore dignissimos?
                    </p>
                </div>
                <div>
                    <div class="video-list">
                        <h2>Content</h2>
                        <div class="vid active">
                            <video src="img/video/vid-1.mp4" muted></video>
                            <h3 class="title">2.video title</h3>
                        </div>
                        <div class="vid">
                            <video src="img/video/vid-1.mp4" muted></video>
                            <h3 class="title">3.video title</h3>
                        </div>
                        <div class="vid">
                            <video src="img/video/vid-1.mp4" muted></video>
                            <h3 class="title">4.video title</h3>
                        </div>
                        <div class="vid">
                            <video src="img/video/vid-1.mp4" muted></video>
                            <h3 class="title">5.video title</h3>
                        </div>
                        <div class="vid">
                            <video src="img/video/vid-1.mp4" muted></video>
                            <h3 class="title">6.video title</h3>
                        </div>
                        <div class="vid">
                            <video src="img/video/vid-1.mp4" muted></video>
                            <h3 class="title">7.video title</h3>
                        </div>
                        <div class="vid">
                            <video src="img/video/vid-1.mp4" muted></video>
                            <h3 class="title">8.video title</h3>
                        </div>
                        <div class="vid">
                            <video src="img/video/vid-1.mp4" muted></video>
                            <h3 class="title">9.video title</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/myscript.js"></script>
    
    <script>
        let tabHeader = document.getElementsByClassName("tab-header")[0];
        let tabIndicator = document.getElementsByClassName("tab-indicator")[0];
        let tabBody = document.getElementsByClassName("tab-body")[0];

        let tabsPane = tabHeader.getElementsByTagName("div");

        for (let i = 0; i < tabsPane.length; i++) {
            tabsPane[i].addEventListener("click", function () {
                tabHeader.getElementsByClassName("active")
                [0].classList.remove("active");
                tabsPane[i].classList.add("active");
                tabBody.getElementsByClassName("active")
                [0].classList.remove("active")
                tabBody.getElementsByTagName("div")[i].classList.add("active");

                tabIndicator.style.left = `calc(calc(60% /4) * ${i})`;
            });
        }


    </script>

    <script>
        let listVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video iframe');
        let title = document.querySelector('.main-video .title');

        listVideo.forEach(video => {
            video.onclick = () => {
                listVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if (video.classList.contains('active')) {
                    let src = video.children[0].getAttribute('src');
                    mainVideo.src = src;
                    let text = video.children[1].innerHTML;
                    title.innerHTML = text;
                };
            };

        });


    </script>

</body>

</html>