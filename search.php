<!DOCTYPE html>
 <html>
  <head>
   <title> Search Page </title>
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
     <div id="about"> <marquee><h2>CSED MNNIT </h2></marquee></div>
     <div id="te"> <center><h1> Search Courses </h1>
     <form  name="RegForm" action="search_back.php" onsubmit="return validate()" method="post">
      <table>
        <tr>
         <th> Course </th>
         <th> Branch </th>
         <th> Semester </th> 
        </tr>
        <tr>
          <td> <input type="text" name="course" placeholder="Course" required/></td>
          <td> <input type="text" name="branch" placeholder="Branch" required/></td>
          <td> <input type="text" name="semester" placeholder="Semester" required/></td>
        </tr>
      </table>
      <br/>
      <input type="submit" name="sub" value="Check" />
      </form>
     </center>
     </div>
    </div> 
 </body>
</html>
