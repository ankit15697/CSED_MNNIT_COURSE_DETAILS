<?php
  session_start();
  require('function.php');
  $con=con();
  if(isset($_SESSION['user_id']))
   {
     $id=$_SESSION['user_id'];
   }
   else
    {
      header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
      exit();
    }
    $a;
    $user = $_POST["user_id"];
    $userid = $_SESSION['user_id'];
    $qu="select * from Teachers ";
    $result=$con->query($qu);
?>
<!DOCTYPE html>
 <html>
  <head>
   <title> Home Page </title>
   <a name="top"> </a>
    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/admin_home.css" rel="stylesheet"/>
  </head>
  <body>
   <a name="top"> </a>
    <div id="full">
      <div id="header">
        <div id="lg"> <img src="img/03.jpeg" alt="Image" height="65" width="100"/></div>
        <div id="li">
          <a href="admin_home.php" class="link"> Home Page &nbsp; &nbsp;</a>
          <a href="add.php" class="link" > Add Course  &nbsp;  &nbsp;</a>
          <a href="delete_course.php" class="link" > Delete Course  &nbsp;  &nbsp;</a>
           <a href="add_teacher.php" class="link" > Add Teacher  &nbsp;  &nbsp;</a>
          <a href="delete.php" class="link"> Delete Teacher &nbsp;&nbsp; </a> 
          <a href="logout.php" class="link"> Logout  &nbsp;  &nbsp;</a>
        </div>
      </div>
     <div id="about"> <marquee><h4> Welcome Admin <?php echo "$userid";?> Now You can Manage DATA </h4></marquee></div>
      <div id="te"> <center><h1> Available Teachers </h1>
      <?php
           echo "<center><table>";
           echo "<tr><th>Name</th><th>Email</th><th>Mobile</th><th>Address</th><th>Subject</th></tr>";
           $a=0;
           while($row1=$result->fetch_array())
            {
              $a=1;
              echo "<tr><td>$row1[2] $row1[3] $row1[4]</td><td> $row1[5]</td><td> $row1[6]</td><td>$row1[7] $row1[8] $row1[9]</td><td>$row1[10]</td></tr>";
            }
            echo "</table></center>";
            if($a==0)
             {
               echo "No Teacher Available Please add more doctors";
             }
          ?>
        <a href="#top" style="color:red"> Got to Top </a>
     </center>
     </div>
   </div>
  </body>
 </html>
