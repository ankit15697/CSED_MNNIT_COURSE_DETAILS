<?php
 session_start();
 require('function.php');
 $user_id=validate($_POST['id']);
 $con=con();
 $sql="Select * from Teachers where user_id='$user_id'"; 
  $result = $con->query($sql);
?>
<!DOCTYPE html>
 <html>
  <head>
   <title> Teacher Detail </title>
    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/search.css" rel="stylesheet"/>
   <script type="text/javascript" src="javascript/var.js"></script>
  </head>
  <body>
    <div id="full">
      <div id="header">
        <div id="lg"> <img src="img/03.jpeg" alt="Image" height="65" width="100"/></div>
        <div id="li">
          <a href="index.php" class="link"> Home Page &nbsp; &nbsp;</a>
          <a href="search.php" class="link" > Search Course  &nbsp;  &nbsp;</a>
          <a href="see_teacher.php" class="link" > Teacher Details  &nbsp;  &nbsp;</a>
          <a href="login.php" class="link"> Login &nbsp;&nbsp; </a> 
          <a href="about.php" class="link"> About  Me  &nbsp;  &nbsp;</a>
        </div>
      </div>
     <div id="about"> <marquee><h3>CSED MNNIT </h3></marquee></div>
     <div id="te"> <center><h3> Details of Teacher  <?php echo "$user_id";?> </h3>
      <?php
           echo "<center><table>";
           echo "<tr><th>Name</th><th>Email</th><th>Mobile</th><th>Address</th><th> Main_Subject</th></tr>";
           $a=0;
           while($row1=$result->fetch_array())
            {
              $a=1;
              echo "<tr><td>$row1[2] $row1[3] $row1[4]</td><td> $row1[5]</td><td> $row1[6]</td><td>$row1[7] $row1[8] $row1[9]</td><td>$row1[10]</td></tr>";
            }
            echo "</table></center>";
          ?>
     </div>
    </div> 
 </body>
</html>
