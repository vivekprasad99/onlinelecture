<?php

 $username = $_POST['username'];
 $password = $_POST['password'];

 $con = mysqli_connect('localhost','root','','scheduling');

 $s = "select * from admin where username = '$username'";

$result = mysqli_query($con,$s);

$run = mysqli_num_rows($result);


if($run == TRUE)
{
	echo '<script type="text/javascript">
                      alert("Sorry! Username already Taken!");
                         location="register.php";
                           </script>';
}
else
{
	$query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

 mysqli_query($con,$query);
	echo '<script type="text/javascript">
                      alert("Welcome! Your account has been created. please login to manage your schedules!");
                         location="index.php";
                           </script>';
}
?>