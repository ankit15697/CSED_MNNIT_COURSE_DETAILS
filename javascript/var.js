function validate() {
     var course = document.forms["RegForm"]["course"];
     var branch = document.forms["RegForm"]["branch"];
     var semester = document.forms["RegForm"]["semester"];
     //var com="MCA";
     if (semester.value%2==0)                                  
      { 
        window.alert("Please Select only odd semester Courses."); 
        semester.focus(); 
        return false; 
      }
      if((course.value=="MCA") && (semester.value>6 || semester.value<1))
       {
         window.alert("Course MCA has only 1 to 6 semester only");
         semester.focus();
         return false;
       } 
     if((course.value=="MCA") && (branch.value!="MCA"))
      {
      
          window.alert("If Course is MCA then branch should be also MCA");
          branch.focus();
          return false;
      }
      if((course.value=="B.Tech") && (semester.value>8 || semester.value<1))
       {
         window.alert("Course B.Tech has only 1 to 8 semester only");
         semester.focus();
         return false;
       } 
       if((course.value=="B.Tech") && ((branch.value!="CS") && (branch.value!="IT")))
      {
      
          window.alert("If Course is B.Tech then branches should be only CS and IT");
          branch.focus();
          return false;
      }
     if((course.value=="M.Tech") && (semester.value>4 || semester.value<1))
       {
         window.alert("Course M.Tech has only 1 to 4 semester only");
         semester.focus();
         return false;
       } 
      if((course.value=="M.Tech") && (((branch.value!="CS") && (branch.value!="IT")) && ((branch.value!="SE"))))
      {
      
          window.alert("If Course is M.Tech then branches should be only CS , IT and SE");
          branch.focus();
          return false;
      }
       
      if((course.value=="B.Tech") || ((course.value=="MCA") || (course.value=="M.Tech")))
       {
         return true;
       }
      else
       {
         window.alert("Courses should be only B.Tech, MCA or M.Tech");
         course.focus();
         return false;
       }
    }
