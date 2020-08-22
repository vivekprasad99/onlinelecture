<?php

 $name = $_POST['name'];
 $level = $_POST['level'];
 $description = $_POST['description'];
 $instructor = $_POST['instructor'];
 $dates = $_POST['dates'];
 $time = $_POST['time'];



 

 $con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'scheduling');

$s = "select * from course where Lectures Dates = '$dates' and  Lecture Time Slot = '$time'";

$result = mysqli_query($con,$s);

if($dates < 0 && $time < 0) 
{
  echo '<script type="text/javascript">
                      alert("Dates and Lectures Time Slot Already Taken!");
                         location="course.php";
                           </script>';
}
else
{
  $query = "INSERT INTO `course`(`Name`, `Level`, `Description`, `Instuctor`, `Lectures Dates`, `Lecture Time Slot`) VALUES ('$name','$level','$description','$instructor','$dates','$time')";

$run = mysqli_query($con,$query);
echo '<script type="text/javascript">
                      alert("Course has been Added!");
                         location="course.php";
                           </script>';
}

?>