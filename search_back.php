<?php
    require('function.php');
    $con=con();
    $a;
    $course = $_POST["course"];
    $branch = $_POST["branch"];
    $semester = $_POST["semester"];
    $qu="select * from Courses where course='$course' and (branch='$branch' and semester='$semester') ";
    $result=$con->query($qu);
?>

<!DOCTYPE html>
 <html>
  <head>
   <title> Course Details </title>
    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/search.css" rel="stylesheet"/>
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
     <div id="te"> <center><h4>  Details  of course <u><?php echo "$course";?></u> branch <u> <?php echo "$branch";?></u> Semester <u><?php echo " $semester";?></u></h4>
     
     <?php
           echo "<center><table>";
           echo "<tr> <th>Subject </th> <th> Teacher </th><th> &nbsp;&nbsp;Teacher Details </th></tr>";
           $a=0;
           while($row1=$result->fetch_array())
            {
              $a=1;
              echo "<tr><td>$row1[3]</td><td> $row1[4]</td><td><form action='teacher_details.php' method='post'target='_blank' ><input type='text' value='$row1[4]' style='display:none' name='id'><input type='submit'value='See Teacher Details'></a></form></td></tr>";
            }
            echo "</table></center>";
            if($a==0)
             {
              echo "<center>No Data found releated to this Course found search again </center><br/><br/> <form action='search.php' method='post'>  <center><input type='submit' value='Search Again' name='sub'/></center></form>";
             }
          ?>
         <br/>
         <br/>
         <hr/>
        <a href="#top" style="color:red"> Got to Top </a>
     </div>
   </div>
  </body>
 </html>
