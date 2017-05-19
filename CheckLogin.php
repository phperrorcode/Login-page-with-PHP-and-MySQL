<?php
	include('config.php');
	session_start();

	$email=$_POST['email'];
	$password=$_POST['password'];

	$q=mysqli_query($conn,"SELECT * FROM `user` where `email`='$email' AND `password`='$password' ") or die(mysqli_error());

	$user=mysqli_fetch_array($q);
	$no=mysqli_num_rows($q);

	if($no == 1)
    {
    	if($user['email'] == $email AND $user['password'] == $password)
    	{
         $_SESSION['user']= $user['email'];
         header("location: Dashboard.php");   
     	}
     	else
     	{
     		header("location: Login.php");
     	}
    } 
   else
    {
        header("location: Login.php");	
    }
?>