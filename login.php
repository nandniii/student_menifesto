<?php
$conn = mysqli_connect("localhost","root","","student_menifesto" ) or die ("error" . mysqli_error($conn));
?>


<?php
session_start();
if (isset($_POST['login'])) {
  $email  = $_POST['email'];
  $password = $_POST['pass'];
  mysqli_real_escape_string($conn, $username);
  mysqli_real_escape_string($conn, $password);
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $user = $row['username'];
    $pass = $row['password'];
    $name = $row['name'];
    $email = $row['email'];
    $role= $row['role'];
    $course = $row['course'];
    if (password_verify($password, $pass )) {
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['email']  = $email;
      $_SESSION['role'] = $role;
      $_SESSION['course'] = $course;
      header('location: dashboard/');
    }
    else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

    }
  }
}
else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student_login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

</head>
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Students Manifesto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.html">Contact Us</a>
                    </li>
                </ul>

        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

<body class="bg" md-4>
    <div style="padding: 80px">
        <div class="container-fluid md-4">
            <h1 class="mt" style="font-family: sans; color: aliceblue;">
                <center>Welcome Student</center>
            </h1>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <form action="validation.php"  class="formconatiner" novalidate method="POST" onsubmit="return validation()">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" />
                            <div id="emailHelp" class="form-text">
                                We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                            <span class="input-group-text" onclick="password_show_hide();">
                                <i class="fas fa-eye" id="show_eye"
                                    style="margin-left:222px; margin-top: -50px; cursor:pointer;"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"
                                    style="margin-left:222px; margin-top: -50px; cursor:pointer;"></i>
                            </span>
                        </div>
                        <style>
                            .form-control {
                                display: block;

                            }
                        </style>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-warning w-100"> Submit </button>
                        <div class="login-help">
                        <a href="signup.php">Register</a> • <a href="recoverpassword.php">Forgot Password</a>
                        </div>
                    </form>
                    
                </div>
                <div class=" col-md-4 col-sm-4 col-xs-12">
                </div>
            </div>
        </div>
    </div>

<!---confirm password validation Start------->

<script type="text/javascript">
    function validation() {
	var email=document.getElementById('Email').value;
	var password=document.getElementById('Passwd').value;

	if ((email=="") ||( password==""))
	 {
	 	document.getElementById('error').innerHTML="please fill the details";
	 	return false;
	 }
}


function clear() {
	document.getElementById('error').innerHTML="ksdfisdhfg";
}

</script>
         <!---confirm password validation end------->

       

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>


    <style>
        .navbar a {
            color: #f0ad4e;
        }
        body a {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;


}

        .formconatiner {
            border: 2px solid;
            color: aliceblue;
            padding: 50px;
            -webkit-box-shadow: 0px 9px 38px -2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 9px 38px -2px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 9px 38px -2px rgba(0, 0, 0, 0.75);
            
        }


        .bg {
            background: url("./img/bg1.jpg");
            width: 100%;
            height: 100vh;
            background-repeat: no-repeat;
            background-size: 100%;

        }

        .input-group-text {


            padding: 0.375rem 0.75rem;
            color: #212529;

        }
    </style>
    <script src="./js/myscript.js"></script>
</body>

</html>