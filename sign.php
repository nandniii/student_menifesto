<?php
session_start();
$conn=mysqli_connect('localhost','root');

if($conn){
  echo "connection established";
}
else{
  echo "error";
}

mysqli_select_db($conn,'student_menifesto');

//initializing variables
$name = $_POST['name'];
$email = $_POST['email'];
$username=$_POST['username'];
$role = $_POST['role'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$joindate = date("F j, Y");
$password_1=$_POST['password'];
$password_2=$_POST['repassword'];
$errors = array(); 
if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
if (count($errors) == 0) {
  	$password = $password_1;

    $query = "INSERT INTO users(username,name,email,password,role,course,gender,joindate) VALUES ('" .$username. "' , '" .$name. "', '" .$email. "', '" .$password. "', '" .$role. "', '" .$course. "', '" .$gender. "' , '" .$joindate. "' )";

      mysqli_query($conn, $query);
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";

      if ($role == "Teacher") {
        header('location:admin/admin_main.php');
      } elseif ($role=="Student")  {
        header('location:index_2.php');
      } 
       
}

?>
