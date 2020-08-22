<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navigationbar.php");
?>
<html>
<head>
<style>
body {
  background-color: white;
}
</body>
</style>
</head>
<body>

<br><div class="container">
  
  <div class="row" align="center">
    <div class="col-lg-6">
    <div class="jumbotron">
    Here you will Assign Courses that are available in university
    <form class="form-horizontal" method= "post" action = "coursedatabase.php">
      <fieldset>

      <!-- Form Name -->
      <legend>Add Course</legend>

      
      <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="corcode">Course Name</label>  
          <div class="col-md-5">
          <input id="corcode" name="name" type="text" placeholder="" class="form-control input-md" required="">  
          </div>
        </div>
        
      
      <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="corname">Level</label>  
          <div class="col-md-5">
            <select id="faculty" name="level" class="form-control">
            <option>foundation</option>
            <option>Intermediate</option>
            <option>Advanced</option>
        </select>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="corname">Description</label>  
          <div class="col-md-5">
          <input id="corname" name="description" type="text" placeholder="" class="form-control input-md" required="">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="corname">Instructor</label>  
          <div class="col-md-5">
         <select id="faculty" name="instructor" class="form-control">
            <option>Vivek</option>
            <option>Shubham</option>
            <option>Manish</option>
        </select>
                  </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="corname">Lectures Dates</label>  
          <div class="col-md-5">
          <input id="corname" name="dates" type="date" placeholder="" class="form-control input-md" required="">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="corname">Lecture Time Slot</label>  
          <div class="col-md-5">
         <select id="faculty" name="time" class="form-control">
            <option>10:00 am to 11:00 am</option>
            <option>04:00 pm to 05:00 pm</option>
            <option>07:00 pm to 09:00 pm</option>
        </select>
          </div>
        </div>
        
        <!-- Button -->
      <div class="form-group"  align="right" >
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-5">
        <button id="submit" name="submit" class="btn btn-success">Add Course</button>
        </div>
      </div>

      </fieldset>
      </form>
    </div>    
    </div>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navigationbar.php");
?>