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
   // $user = $_POST["user_id"];
    $userid = $_SESSION['user_id'];
  // $user_id = validate($_POST["id"]);
  echo "$userid";
   $sq="select *from Teachers where user_id='$userid'";
   $result=$con->query($sq);
   $row=$result->fetch_array();
   $fname=$row['fname'];
   $mname=$row['mname'];
   $lname=$row['lname'];
   $mno=$row['mob'];
   $email_id=$row['email'];
   $add1=$row['address_line1'];
   $subject=$row['subject'];
?>
<!DOCTYPE html>
 <html>
  <head>
   <title> Teacher Update Page </title>
   <a name="top"> </a>
    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/update_teacher.css" rel="stylesheet"/>
   <script type="text/javascript" src="javascript/ver.js"></script>
  </head>
  <body>
   <a name="top"> </a>
    <div id="full">
      <div id="header">
        <div id="lg"> <img src="img/03.jpeg" alt="Image" height="65" width="100"/></div>
        <div id="li">
          <a href="teacher_home.php" class="link"> Home Page &nbsp; &nbsp;</a>
          <a href="update_teacher.php" class="link" > Update Details  &nbsp;  &nbsp;</a>
           <a href="see_details.php" class="link" > See Courses  &nbsp;  &nbsp;</a>
          <a href="logout.php" class="link"> Logout  &nbsp;  &nbsp;</a>
        </div>
      </div>
     <div id="about"> <marquee><h4> Welcome Teacher <?php echo "$userid";?> Now You can Manage DATA </h4></marquee></div>
     
     <div id="fo">
         <center> <h1 style="color:red;opacity:1;"> Update Teacher </h1></center>
         <center><h2 style="color:red;"> Fill the form </h2></center>
          <!--<form action="dupdate_back.php" method="post">-->
          <form  name="RegForm" action="update_teacher_back.php" onsubmit="return validate()" method="post">
           <center>
              <table>
                <tr>
                  <th> First Name </th>
                  <td> <input type="text" name="fname" placeholder="" value="<?php echo "$fname";?>" required/></td>
                </tr>
                <tr>
                  <th> Middle Name </th>
                  <td> <input type="text" name="mname" placeholder="" value="<?php echo "$mname";?>"/></td>
                </tr>
                <tr>
                  <th> Last Name </th>
                  <td> <input type="text" name="lname" placeholder="" value="<?php echo "$lname";?>"/></td>
                </tr>
                <tr>
                  <th> User ID </th>
                  <td> <input type="text" name="user_id" placeholder="User Id" readonly value="<?php echo "$userid";?>" /></td>
                </tr>
                <tr>
                  <th> Password </th>
                  <td> <input type="password" name="pwd" placeholder="Password" required/></td>
                </tr>
                <tr>
                  <th> Email ID </th>
                  <td> <input type="email" name="email_id" placeholder="" value="<?php echo "$email_id";?>" required/></td>
                </tr>
                <tr>
                  <th> Mo No. </th>
                  <td> <input type="text" name="mno" id="mo" placeholder="" value="<?php echo "$mno";?>" required/></td>
                </tr>
                <tr>
                  <th> Address Line1 </th>
                  <td> <input type="text" name="add1" placeholder="" value="<?php echo "$add1";?>" required/></td>
                </tr>
                <tr>
                  <th> Address Line2 </th>
                  <td> <input type="text" name="add2" placeholder="Address Line2"/></td>
                </tr>
                <tr>
                  <th> Address Line3 </th>
                  <td> <input type="text" name="add3" placeholder="Address Line3"/></td>
                </tr>
                <tr>
                  <th> Enter Subject </th>
                  <td> <input type="text" name="subject" placeholder="" value="<?php echo "$subject";?>" required/></td>
                </tr>
              </table>
	  <center><input type='reset' name='reset' value='Reset'/>&nbsp;&nbsp;<input type='submit' name='sub' value='Submit'/></center>
           </center>
          </form>
    </div>
    </div>
   </body>
 </html>
