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
    //$user = $_POST["user_id"];
    $userid = $_SESSION['user_id'];
?>
<!DOCTYPE html>
 <html>
  <head>
   <title> Add Course Page </title>
   <a name="top"> </a>
    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/add_teacher.css" rel="stylesheet"/>
   <script type="text/javascript" src="javascript/var.js"></script>
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
      <div id="te"> <center><h3> Add Course </h3>
         <form  name="RegForm" action="add_course_back.php" onsubmit="return validate()" method="post">
           <center>
              <table>
                 <tr>
                  <th> Enter Course </th>
                  <td> <input type="text" name="course" placeholder="Course Name" required/></td>
                 </tr>
                 <tr>
                  <th> Enter Branch </th>
                  <td> <input type="text" name="branch" placeholder="Branch Name" required/></td>
                 </tr>
                 <tr>
                  <th> Enter Semester </th>
                  <td> <input type="text" name="semester" placeholder="Semester" required/></td>
                 </tr>
                  <tr>
                  <th> Enter Subject </th>
                  <td> <input type="text" name="subject" placeholder="Subject" required/></td>
                 </tr>
                 <tr>
                  <th> Enter Teacher </th>
                  <td> <input type="text" name="teacher" placeholder="Teacher" required/></td>
                 </tr>
              </table>
	  <center><input type='reset' name='reset' value='Reset'/>&nbsp;&nbsp;<input type='submit' name='sub' value='Submit'/></center>
           </center>
          </form>
     </div>
   </div>
  </body>
 </html>
