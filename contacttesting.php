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
              <div style="margin-top-2%">   	 <p class="centered"><img  src="imgs/im3.jpg" class="img-circle"  width="250" height = "180"></p></div>	  
              	  	
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
						    <li ><a  href="classselect.php">Update Contact</a></li>
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


	

         
           

	if( isset($_POST['class'])&& isset($_POST['student']) && isset($_POST['contact']) && isset($_POST['mother']) && isset($_POST['father']) && isset($_POST['guardian']))
     {
		
                      $class    =   $_POST['class'];
					  $student =   $_POST['student'];
                      $contact  =   $_POST['contact'];
					  $mother   =   $_POST['mother'];
                      $father   =   $_POST['father'];
					  $guardian =   $_POST['guardian'];

            $rows_num = 0;
					  

            $q = "SELECT  `student`, `contact` FROM `student` WHERE `student` = '$student' AND `contact` = '$contact'";

             if($my_q_run =  mysql_query($q))
             {

              $rows_num = mysql_num_rows($my_q_run);
              echo $rows_num;

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


              
                                
  $query="INSERT INTO `student`(`student`, `class`, `contact`, `mother`, `father`, `guardian`) VALUES ('$student','$class','$contact','$mother','$father','$guardian')";      

                      
				
                         if($query_run = mysql_query($query))
                       
                          {
echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-info"><div class="centered">Student Record inserted Successfully</div></div></article>';
									  
						  }
						  
						  
				  }
                               
							   
							   else
                                  
								  { 
         echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger"><div class="centered">Invalid Entry or Any Field Left Empty ... Please Re-enter</div></div></article>';
		                           }

                    

               }
			     else
                                  
								  { 
                echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger"><div class="centered">WARNING::No class Choosen Please Choose One </div></div></article>';
		                          
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
                    
                        <form class="form-horizontal style-form" action ="contacttesting.php" method="POST">
                         
                            
                       
                            
                        
                 
   <div style ="padding:8px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-5"><span style="color:white">Enter New Student Contact</span></div></div></h4><br>




							<div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Class</h4>  </label>
                                    
						
                                      <article class="col-md-5">
                                       <select name="class" class="form-control">
                                       
										                     <option >Choose Class</option>
                                        <option  >Nursery</option>
										                     <option>Playgroup</option>
										                        <option>Balvadi</option>
										                            <option>KG-I</option>
                                        <option>KG-II</option>
						
                                        
									                           </select>
							                            </article>
                                 
                            </div> 

                             <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Student Name</h4></label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "student" required>
                                        
                                    </div>
                            </div>

							
							<div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Contact No.</h4></label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "contact" required>
                                        
                                    </div>
                            </div>



                              <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Mother's Name</h4></label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "mother" required>
                                         
                                    </div>
                            </div>


                              <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Father's Name</h4></label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "father" required>
                                        
                                    </div>
                            </div>

                        <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Guardian's Name</h4></label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "guardian">
                                        
                                    </div>
                            </div>

                      <div class="centered">   <input type="submit" class="btn btn-lg btn-success" value="Enter" name="enter"> 
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
   
      
  <?php
  include 'layout2.php';

  ?>
   

  </body>
</html>
