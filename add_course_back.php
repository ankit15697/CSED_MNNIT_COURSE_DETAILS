<?php
 session_start();
 require('function.php');
 $con=con();
 $course = validate($_POST["course"]);
 $branch = validate($_POST["branch"]);
 $semester = validate($_POST["semester"]);
 $subject = validate($_POST["subject"]);
 $teacher = validate($_POST["teacher"]);

   $query="select *from Teachers where user_id='$teacher'";
   $result=$con->query($query);
  if($result->num_rows==0)
   {
     echo "<script>alert('Teacher with this user id does not  exits. See teacher details ');window.location='add.php';</script>";
        die();
   }
  $q="select *from Courses where (course='$course' and branch='$branch') and (semester='$semester' and subject='$subject')";
  $r=$con->query($q);
  if($r->num_rows>0)
   {
     echo "<script>alert('This subject already exists Please see details');window.location='add.php';</script>";
        die();
   }
   else
    {
    
     $ins_query="insert into Courses values('$course','$branch','$semester','$subject','$teacher')";
     $ins_result=$con->query($ins_query);
    if($ins_result)
     echo "<script>alert('successfully Added.');window.location='admin_home.php';</script>";
    else
      echo "<script>alert('Something went wrong.');window.location='add.php';</script>";
   }
?>

