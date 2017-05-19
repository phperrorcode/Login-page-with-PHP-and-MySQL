<?php 
include('config.php');
session_start();
if(!isset($_SESSION['user'])){  
    header("Location:login.php");
}
else
{
    $email=$_SESSION['user'];
    $query=mysqli_query($conn,"select * from user where email='$email'");
    $row=mysqli_fetch_array($query);
    if($_SESSION['user'] == $row['email'])
    {

    }
    else
    {
        header("Location:login.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Desboard</title>
</head>
<body>
	<h1>Wellcome <?php echo $email; ?></h1>
	<h1><a href="Logout.php">Logout</h1>
</body>
</html>