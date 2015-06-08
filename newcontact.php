<?php

 require 'connect.php';

 session_start();

if(!$_SESSION['id'] == "vb")
{
header("Location:index.php");
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
     var num = document.myform.contact.value;

     




     if(isNaN(num))

     {
        document.getElementById("numloc").style.padding = "8px";



        

      document.getElementById("numloc").innerHTML = "Wrong value entered Enter only Numeric Value in the Contact Number Field";

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

                                    return true;
                                  }
                      
     }

    }

    </script>



    <script type="text/javascript">

    function validatehide(){

     document.getElementById("numloc").style.visibility = "hidden";

   };


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
            <a  class="logo"><b>Little Soldiers School</div></b></a>
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
                          <li class="active"><a  href="newcontact.php">New Contact</a></li>

						    <li ><a  href="classselect.php">Update Contact Number</a></li>

              

                    <li ><a  href="classselect2.php">Update Whole Contact</a></li>
    
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
       
			<div>
			<?php


	

         
           

	if( isset($_POST['class'])&& isset($_POST['student'])&& isset($_POST['dob']) && isset($_POST['adr'])  && isset($_POST['contact']) &&isset($_POST['contact2'])&& isset($_POST['mother']) && isset($_POST['father']) && isset($_POST['ocp']) && isset($_POST['guardian']))
     {

		
                      $class    =   $_POST['class'];
					  $studen =   $_POST['student'];

             $dob =  $_POST['dob'];

          $adr = $_POST['adr'];

            $stu = ucfirst($studen);

          $ocp = $_POST['ocp'];
                     
           $contact  =   $_POST['contact'];

           $contact2  =   $_POST['contact2'];
          
            $moth   =   $_POST['mother'];

            $mothe = ucfirst($moth);
                     
            $fath   =   $_POST['father'];
            
            $fathe = ucfirst($fath);
            
            $guardian =   $_POST['guardian'];

        

            $student = " "; $father = " "; $mother = " ";

           $p = str_split($stu);

          for ($i=0; $i <strlen($stu); $i++) { 
            
                if($stu[$i] == " ")
                {
                 
                   $i++;

                    $up = ucfirst($p[$i]);

                    $student = $student." ".$up;

                }

                else
                {
                   $student = $student.$p[$i];

                }
          }

  

           $q = str_split($mothe);

          for ($i=0; $i <strlen($mothe); $i++) { 
            
                if($mothe[$i] == " ")
                {
                 
                   $i++;

                    $up = ucfirst($q[$i]);

                    $mother = $mother." ".$up;

                }

                else
                {
                   $mother = $mother.$q[$i];

                }
          }



 $r = str_split($fathe);

          for ($i=0; $i <strlen($fathe); $i++) { 
            
                if($fathe[$i] == " ")
                {
                 
                   $i++;

                    $up = ucfirst($r[$i]);

                    $father = $father ." ".$up;

                }

                else
                {
                   $father  = $father .$r[$i];

                }
          }

        








      

            $rows_num = 0;

      
					  

            $q = "SELECT  `student`, `contact`,`class` FROM `student_info` WHERE `student` = '$student' AND `contact` = '$contact' AND `class` != 'Alumini'";

               if($my_q_run =  mysql_query($q))
             {

              $rows_num = mysql_num_rows($my_q_run);
            

            }

              if($rows_num == 0)

              {



              $j = str_split($contact);

                      $count = NULL;

                   foreach ($j as  $value) {

                      

                     if(is_numeric($value))
                    {

                     $count = $count + 1;
                    }

            
            } 

    

                   
            
      
           
      
       if(is_numeric($contact))

       {
             
             if($count == 10)

             { 



					  
		  
		       


              
                if (isset($_POST['enter'])) //to insert data in a table 
		{
				     if($class != "Choose Class")
			   {		 
		            if(!empty($class) && !empty($student)&& !empty($contact) && !empty($mother) && !empty($father) && !empty($guardian))
               
                  {


          
                                
  $query="INSERT INTO `student_info`(`student`, `dob`, `address`, `class`, `contact`, `contact2`, `mother`, `father`, `occupation`, `guardian`) VALUES ('$student','$dob','$adr','$class','$contact','$contact2','$mother','$father','$ocp','$guardian')";      

                      
				
                         if($query_run = mysql_query($query))
                       
                          {
                          

                    

echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-info alert-dismissable"><div class="centered">Student Record '.$student.' inserted Successfully</div></div></article>';
									  
						  }
						  
						  
				  }
                               
							   
							   else
                                  
								  { 
         echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger alert-dismissable"><div class="centered">Invalid Entry or Any Field Left Empty ... Please Re-enter</div></div></article>';
		                           }

                    

               }
			     else
                                  
								  { 
                echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger alert-dismissable"><div class="centered">WARNING::No class Choosen Please Choose One </div></div></article>';
		                          
                   }

			  }


        } 

         else
 {

    echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger"><div class="centered">WARNING::You enter '."$count".' digits only  10 digits required in the Contact number field.Please Renter</div></div></article>';
               
 }
    }

 else
 {

    echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger"><div class="centered">WARNING::Invalid Contact Number entered.Please Renter</div></div></article>';
               
 }


			    
		
		}

    else
 {

    echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger"><div class="centered">WARNING:: Contact Already Present </div></div></article>';
               
 }






  }
 

 ?>

			</div>
    <div class="row mt">
          <div class="col-lg-12">
		  <div class="col-md-offset-2">
                <div class="form-panel">
				
				<!-- FORM --------------------FORM-------------------------FORM------------------------FORM --------------------------FORM-->
                    
                        <form name="myform" class="form-horizontal style-form" action ="newcontact.php" method="POST" onsubmit="return validate()">
                         
                            
                       
                            
                        
                 
   <div style ="padding:8px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-5"><span style="color:white">Enter New Student Contact</span></div></div></h4><br>




							<div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Class</h4>  </label>
                                    
						
                                      <article class="col-md-4">
                                       <select name="class" class="form-control">
                                         <option >Choose Class</option>
                                       
                                       
                                        <option>Crech</option>
                                        <option>Playgroup </option>
                                        <option  >Nursery</option>
										                    
										                
										                            <option>KG-I</option>
                                        <option>KG-II</option>
                                                <option>Alumini</option>
						
                                        
									                           </select>
							                            </article> 
                                 
                         

                          
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Student Name</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name = "student" required>
                                        
                            
                                 </div>  
                                </div>

                                                            <div class="form-group"> 
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Date Of Birth</h4></label>
                                   <div class="col-sm-2">
                                        <input  type="text" class="form-control round-form" name = "dob" required>
                                     
                                       </div>
                               

                                    <label class="col-sm-1 col-sm-1 control-label"><h4>Address</h4></label>
                                   <div class="col-sm-7">
                                        <input  type="text" class="form-control round-form" name = "adr" required>
                                     
                                        
                                    </div>
                          
                                        </div>
							
				                          <div class="form-group"> 
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Father's Name</h4></label>
                                   <div class="col-sm-4">
                                        <input  type="text" class="form-control round-form" name = "father" required>
                                     
                                       </div>
                               

                                    <label class="col-sm-2 col-sm-2 control-label"><h4>Occupation</h4></label>
                                   <div class="col-sm-4">
                                        <input  type="text" class="form-control round-form" name = "ocp" required>
                                     
                                        
                                    </div>
                          
                                        </div>

                                              



                              <div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Mother's Name</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name = "mother" required>
                                         
                                    </div>
                          
                            <label class="col-sm-2 col-sm-2 control-label"><h4>Contact #1</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name = "contact" required><br>
                              
                                        
                                    </div>
                                    <span class="col-md-offset-6" style= "color:white;  background-color:rgb(244,80,81)" id="numloc"> </span>
                                 
                            </div>

                        <div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label"><h4>Guardian's Name</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name = "guardian" value="none">
                                        
                                    </div>

                            <label class="col-sm-2 col-sm-2 control-label"><h4>Contact #2</h4></label>
                                   <div class="col-sm-4">
                                        <input type="text" class="form-control round-form" name = "contact2">
                                        
                                    </div>
                            </div>

      <div class="centered">   <input type="submit" class="btn btn-lg btn-success"  value="Enter" name="enter"> <span class="col-md-offset-3"> <input type="reset" class="btn btn-lg btn-danger" value="clear" name="enter"></span>
</div>            
                            </div>

                   
					 
 </div>
 </div>
                          
                      </form>
                
				
				
				
		<!------FORM-------------------------FORM------------------------FORM-------------------FORM-->		
				
				
				</div>
          </div><!-- col-lg-12--> 
             </div>		  
    </div><!-- /row -->
            
     
    </section>          <!--wrapper -->
      </section>   
            

      
      <!--footer end-->-2
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
   
      
  
  <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
   

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>  


    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    </body>
  
</html>