
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link href="css/global.css" type="text/css" rel="stylesheet" />
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

    <?php
    $showAlert = false;
    $showError = "";
    $exists = false;
    
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div> '; 
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
   
?>

<body class="bg" md-4>
    <div style="padding: 50px">
        <div class="container-fluid md-4 ">
            <h1 class="mt" style="font-family: sans">
                <center>
                    </color>Lets Start Your Journey</center>
            </h1>
            

            <div class="row" style="padding: 20px">
                <div class="col-md-2 col-sm-1 col-xs-12"></div>
                <div class="col-md-8 col-sm-1 col-xs-12">
                    <form action="sign.php" id="contactform" class="row g-3 formconatiner needs-validation" novalidate method="POST">
                        <div class="col-md-6">
                            <label for="inputFirst_Name" class="form-label" style="font-family: bold"> Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nandni priya" required="">
                               
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputLast_Name" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@menifesto.com"
                                required="" >
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputemail" class="form-label">Create a username </label>
                            <input type="username" name="username" class="form-control" id="username"
                             placeholder="username" required="" >
                            <div class="invalid-feedback">
                                Invalid email.
                            </div>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputnumber" class="form-label">Gender </label>
                            <br>
                            <select class="form-select" name="gender">
                            <option value="">Choose...</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            <div class="invalid-feedback">
                                select gender
                            </div>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="selectcourse" class="form-label">I teach/study..</label>
                            <br>
                            <select class="form-select" name="course">
                            <option value="">Choose...</option>
                                <option>Computer Sc Engineering</option>
                                <option>Electrical Engineering</option>
                                <option>Mechanical Engineering</option>
                                </select>
                            <div class="invalid-feedback">
                                Select a branch.
                            </div>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="selectcourse" class="form-label">I am a.. </label>
                            <br>
                            <select class="form-select" name="role" id="role" required="">
                                <option value="">Choose...</option>
                                <option>Teacher</option>
                                <option>Student</option>
                                
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid course.
                            </div>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1" class="form-label">Enter Your Password</label>
                            <input type="password" name="password" class="form-control" id="password" maxlength="20"
                                minlength="8" placeholder="password should be between 8-20 characters" required>
                            <div class="invalid-feedback">
                                Enter a valid password.
                            </div>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1" class="form-label">Confirm Your Password</label>
                            <input type="password" name="repassword" class="form-control" id="repassword"
                                maxlength="20" minlength="8" placeholder="Enter the same password" required>
                            <div class="invalid-feedback">
                                Enter the same password.
                            </div>
                            <div class="valid-feedback">
                                Looks good.
                            </div>
                        </div>
                        <div class="col-md-6"><button type="submit" name="signup" id="submit" value="Sign me up!" class="btn btn-warning w-100"
                                onclick="checkpassword()">
                                Submit
                            </button></div>
                        <div class="col-md-6"> <button type="clear" class="btn btn-warning w-100">
                                Clear
                            </button></div>
                            
                </div>

            </div>
        </div>
        <script>(() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()</script>

</body>

<style>
    .navbar a {
        color: #f0ad4e;
    }

    .formconatiner {
        color: azure;
        border: 2px solid;
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

    .mt {
        color: aliceblue;
    }
</style>



</html>