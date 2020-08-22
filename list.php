<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navigationbar.php");
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
     $conn = mysqli_connect("localhost","root","","scheduling") or die("Connection Failed");

     $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn,$sql) or die("Query unsuccesfull.");

    if(mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px" border="1" width="40%" >
        <thead>
             <th>Id</th>
        <th>username</th>
        <th>password</th>
        
        </thead>
        <tbody>
            <?php 
              while($row = mysqli_fetch_assoc($result)){


            ?>
            <tr>
                 <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
               
                
            </tr>
           <?php  } ?>
        </tbody>
    </table>
<?php } 
  mysqli_close($conn);
?>
</div>
</div>
</body>
</html>
