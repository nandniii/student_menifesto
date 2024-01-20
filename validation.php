<?php 

session_start();


$con=mysqli_connect('localhost','root');

if ($con) 
  {
		echo "connection successful";
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'student_menifesto');
 $pass=$_POST['pass'];
 $email=$_POST['email'];
 
 $q="select * from users where email='$email' && password='$pass'";

 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {
	
    $_SESSION['Email']=$email;
	if ($res['role'] == 'Teacher') {
        header('location: admin/admin_main.php');
    } elseif ($res['role'] == 'Student') {
	header('location:index_2.php');
 	}
}

 else
 {
 	$_SESSION['error']="error";
 	header('location:login.php');

 }


  


 ?>