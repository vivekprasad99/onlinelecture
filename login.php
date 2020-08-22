<?php

session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  $con = mysqli_connect('localhost','root','','scheduling');

  $query = "SELECT * FROM admin WHERE username='$username'";

  $run =mysqli_query($con,$query);

  $num = mysqli_num_rows($run);

 if($run == TRUE)
{
	echo '<script type="text/javascript">
                      alert("Welcome User!");
                         location="home.php";
                           </script>';
                           $_SESSION['username'] = $username;
                           
}
else
{
	echo '<script type="text/javascript">
                      alert("Wrong Password!");
                         location="index.php";
                           </script>';
}



?>