<?php

 require 'connect.php';

 session_start();

if(!$_SESSION['id'])
{
header("Location:login_lit.php");
}

	
	
 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <?php

    include 'layout.php';

   ?>

    <script>

    function validate() 
    {
     var num = document.myform.new.value;

     var re =  document.myform.reent.value;




     if(isNaN(num))

     {
        document.getElementById("numloc").style.padding = "8px";

        

      document.getElementById("numloc").innerHTML = "Wrong value entered Enter only Numeric Value";

      return false;

     }


     else
     {

      var count = 0; 
      var len = num.length;

      var num2 = num.split("");

      var i = 0;

      for(i = 0; i < len ; i++)

      {

         count = count + 1;

      }

                  if(count > 10 || count < 10 )
                        {
                            document.getElementById("numloc").style.padding = "8px";

                         
                        
                            document.getElementById("numloc").innerHTML = " Entered" + " " +count+" "+ "digits Contact Number must be of 10 digits only";
                           
                            
                            return false;
                        }

                   else {

                               if(num != re){

                                document.getElementById("span2").style.padding = "8px";


                            document.getElementById("span2").innerHTML = " Entered New Contact And Renter Contact Fileds with diffrent Values.Please Renter";
                              
                    

                                return false;

                                  }

                                  else{
                                    return true;
                                  }
                         }
     }

    }

    </script>


   
  
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     <header class="row">
           
		
			<nav class ="navbar navbar-inverse navbar-default navbar-fixed-top role = "navigation">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
			
			<!--logo start-->
            <a  class="logo"><b>Little Soldiers School</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">

              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
                            </button>
            	</ul>
            </div>
			</div>
			</nav>

        </header>
		 <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                 	 <p class="centered"><img src="imgs/im7.jpg"class="img-circle"  width="250" height = "180"></p>	 
              	  	
                  <li class="mt">
                      <a  href="myhome.php">
                          <i class="li_shop"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a  href="javascript:;" >
                          <i class="li_mail"></i>
                          <span>Compose</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="mycompose.php">New Event Message</a></li>
						    <li ><a  href="simple.php">Simple Message</a></li>
                          
                      </ul>
                  </li>

                   <li class="sub-menu">
                      <a class ="active" href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Contact</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="newcontact.php">New Contact</a></li>
						    <li class="active"><a  href="classselect.php">Update Contact</a></li>
							   <li ><a  href="delete.php">Delete Contact</a></li>
							   
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Class Operations</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="updateclass.php">Update Whole Class</a></li>
						    <li ><a  href="getcontacts.php">Get All Contacts</a></li>
							   
							   <li ><a  href="delkgii.php">Delete Class KG-II</a></li>
                      </ul>
                  </li>
                

 
                <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="li_user"></i>
                          <span>Staff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="staffmessage.php">Message Staff</a></li>
						  <li><a  href="newstaff.php">Add New Staff </a></li>
						  <li><a  href="staffdel.php">Delete a Staff</a></li>
              <li><a  href="selectstaff.php">Update Staff Contact</a></li>
 
                 
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>


      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
       <section id="main-content">
          <section class="wrapper">
 
                          

    <div class="row mt">

      <div>
          <?php

    
           
if(isset($_POST['student']) && isset($_POST['contact']) && isset($_POST['class']) && isset($_POST['father'])&&isset($_POST['mother'])&& isset($_POST['gu']))
     {  





              
          
                      $student  =   $_POST['student'];
                      $contact  =   $_POST['contact'];
                      $class  =   $_POST['class'];
                      echo $father  =   $_POST['father'];
                      $mother  =   $_POST['mother'];
                  
                     
                      $guard =   $_POST['gu'];
                  

                  
        
            
                      

             
            


                          if (isset($_POST['enter'])) //to insert data in a table 
               {
             
              if(!empty($student) && !empty($contact) && !empty($class) && !empty($father) && !empty($mother) && !empty($guard))
               
                   {

                    
                                            

                                
$query="UPDATE `student` SET `student`=$student,`class`='$class',`contact`='$contact',`mother`='$mother',`father`=`$father`,
                 `guardian`='$guard' WHERE `class` = '$class' "; 
        
        

                      
        
                                                                     if($query_run = mysql_query($query))
                       
                                                                    {
                              
            echo '<div class="col-md-10"><div class="col-md-offset-4"><div class="alert alert-info alert-dismissable" ><div class="centered">Contact Updated Sucessfully..</div></div> </div></div>';
                    
                                                         }
              
              
                    
                  

            
            }
                    
                
                                  else
                                  
                                { 
                                             echo '<div class="alert alert-danger alert-dismissable"><div class="centered">Warning:: Any Field  is Left Empty ... Please Re-enter</div></div>';
                                        
                                 }

                    
            

   



   
 }

}

 ?>
 </div>


          <article class="col-md-10 col-md-offset-2">

          <div class="table-responsive">
            <div style="padding:2px;background-color:rgb(100,100,100);margin-left:-1%;margin-top:-1%"><h4><div class="centered"><span style="color:white">Exixsting Student Details</span></div></div></h4>

      <table  border ="2" class="table table-striped" style="font-family:century-schoolbook;margin-left:-1%;color:white;width:944px;font-size:16px;background-color:rgb(60,191,255)">

               <?php 

                           if(isset($_POST['st_name']))
   
         {

                                $stu =$_POST['st_name'];

                                $_SESSION['name'] = $stu;

                            


                        
                          
                        
                                $query="select * from `student` where `student` ='".$stu."';";

                                $query_run=mysql_query($query);

                                $v = mysql_num_rows($query_run);

                                $i = 0;

                                   echo '<tr style="font-size:16px;color:rgb(46,55,169);"><td>Student</td> <td>Contact</td><td>Class</td><td>Fathers Name</td><td>Guardian</td></tr>'; 
  


                            if($v == 1)
                               {
                      
                              
                                  
                                                            $contacts=mysql_result($query_run,$i,'contact');
                                                            $student=mysql_result($query_run,$i,'student');
                                                            $class=mysql_result($query_run,$i,'class');
                                                            $father=mysql_result($query_run,$i,'father');
                                                            $mother=mysql_result($query_run,$i,'mother');
                                                            $guardian=mysql_result($query_run,$i,'guardian');
                                                            
                                echo "<tr><td >".$student." "." "."</td><td>".$contacts."</td><td>".$class."</td><td>".$father."</td><td>".$guardian."</td></tr> "; 
                                            
                              }
                          
                            
                          

                    }

                          
                          
                          
   
              
                          ?>
                </table>

                </div>
        
                

        
				<!-- FORM --------------------FORM-------------------------FORM------------------------FORM --------------------------FORM-->
                    
                        <form name= "myform" class="form-horizontal style-form" action ="updateallinfo.php" method="POST"  onsubmit="return validate()">


                                  
                          <div class="form-panel">
	
       <div style ="padding:2px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-5"><span style="color:white">Update Student Record</span></div></div></h4><br><br>
									
	
               
        
						 
                          
                              <div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Student Name</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name = "student" required>
                                        <span class="help-block"><p class="col-md-offset-1">Name of the student</p></span> 
                                           <span style= "color:white;  background-color:rgb(244,80,81)" id="numloc"> </span>

 
                                    </div>
                

                      
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Contact</h4></label>
                                   <div class="col-sm-4">
                                    <input type="text" class="form-control round-form" name = "contact" required>
                         <span class="help-block"><p class="col-md-offset-1">Enter the new contact of the student</p></span> 
                                    </div><br><br><br><br>

             <span class="col-md-offset-5" style= "color:white;  background-color:rgb(244,80,81)" id="span2"> </span> 


                            </div>

                             <div class="form-group">



                      

                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Class</h4></label>
                                   <div class="col-sm-4">
                           <select name="class" class="form-control">
                                       
                                         <option >Choose Class</option>
                                                <option>Crech</option>
     
                                        <option  >Nursery</option>
                                    
                                           <option>KG-I</option>
                                        <option>KG-II</option>
                                      
            
                                        
                                             </select>

                         
                                    </div>

             
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Father</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name ="father" required>
                                        <span class="help-block"><p class="col-md-offset-1">Father's Name</p></span> 
                                           <span style= "color:white;  background-color:rgb(244,80,81)" id="numloc"> </span>

 
                                    </div>
             


                            </div>


                        <div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Mother's Name</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name = "mother" required>
                                        <span class="help-block"><p class="col-md-offset-1">Mother's Name</p></span> 
                                           <span style= "color:white;  background-color:rgb(244,80,81)" id="numloc"> </span>

 
                                    </div>

                                    <label class="col-sm-2 col-sm-2 control-label"><h4>Guardian</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name = "gu" value="none" required>
                                        <span class="help-block"><p class="col-md-offset-1">Guardian's Name</p></span> 
                                           <span style= "color:white;  background-color:rgb(244,80,81)" id="numloc"> </span>

 
                                    </div>
                
                

                      
                            
                
                      
						 
						 </div>
               <div class="text-right">  <input type="submit" class="btn btn-lg btn-success" value="Update" name="enter"> </div>
							</div> 


						 
		
                      </form>
                
				
				
				
		<!------FORM-------------------------FORM------------------------FORM-------------------FORM-->		
				
				
			
          </article>         <!-- col-lg-12-->       
    </div><!-- /row -->
            
     
    </section>          <!--wrapper -->
      </section>   
            

      
      <!--footer end-->-2
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>

      
  <?php
  include 'layout2.php';

  ?>
  
  </body>
</html>
