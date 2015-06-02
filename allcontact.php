<?php
include 'connect.php';			

session_start();

if(!$_SESSION['id'])
{
header("Location:login_lit.php");
}

?> 	


<!DOCTYPE html>
<html lang="en">
  <head>

 <link href="forallcont.css" rel="stylesheet">

   <?php

    include 'layout.php';

   ?>
  
   </head>
<body style="background-color:rgb(255,255,255)">
<section id="container" >
	<!--header start-->
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

        </he    <!--logo end-->

   
        </header>
    <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
     <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion"><li class="mt">
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>
          
            
			  
			     <li class="sub-menu active">
                      <a href="getcontacts.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Select New Class To See Details</span>
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
                      <a href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Contact</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="newcontact.php">New Contact</a></li>
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
                


                

              </ul>
              <!-- sidebar menu end-->
			</div>
		</aside>
      <!--sidebar end-->	
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
				
	
			<div class="row mt">
         <?php $class=$_POST['class']; ?>
					<div class="col-md-6" style="margin-top:-3%">
    
					<div class="col-md-offset-8">
                  

                    <div style="font-family:Algerian;position:relative;left:230px;"><?php echo "<h3>$class</h3>";?> </div>

                   <div > <h3 style=font-family:Algerian;position:relative;left:190px;>Class Details</h3></div>

                    <div class="table-responsive">

							<table  border ="2" class="table table-hover" style="font-family:century-schoolbook;position:relative;left:-200px;color:rgb(31,37,116);width:950px;font-size:16px;">
				
											<?php 

                      $serial = 1;
											
													if(isset($_POST['class']))


								{


														$class=$_POST['class'];
                        
                         if($class != "All")

                         {

														$query="SELECT * from student_info where class ='".$class."' ORDER BY `student`;";
														if(mysql_query($query))
								{
															$query_run=mysql_query($query);
															if(mysql_num_rows($query_run)==NULL){
																echo '<h4>No contacts found</h4>';
															}
															else{
															    $count = 0;
																$i=0;
																while($i<mysql_num_rows($query_run)){
																
																if($count == 0)
																{
                                  
											
                      echo '<tr style="font-size:20px;color:rgb(46,55,169);"> <td>S.NO.</td><td>Student</td> <td>Contact</td><td>Class</td><td>Fathers Name</td><td>Guardian</td></tr>'; 
															 
															    $count = $count + 1;
																
																}


																
																else{
																    
																		$contacts=mysql_result($query_run,$i,'contact');
																		$student=mysql_result($query_run,$i,'student');
																		$class=mysql_result($query_run,$i,'class');
																		$father=mysql_result($query_run,$i,'father');
																		$mother=mysql_result($query_run,$i,'mother');
																		$guardian=mysql_result($query_run,$i,'guardian');
																		
			 echo "<tr><td>".$serial."</td><td>".$student."</td><td>".$contacts."</td><td>".$class."</td><td>".$father."</td><td>".$guardian."</td></tr> "; 
																
																
																		
																		$i=$i+1;
                                    $serial = $serial + 1;
																}
																}
															}
														}

                          }

                          if($class == "All")

                         {

                            $query="SELECT * from student_info";
                            if(mysql_query($query))
                {
                              $query_run=mysql_query($query);
                              if(mysql_num_rows($query_run)==NULL){
                                echo '<h4>No contacts found</h4>';
                              }
                              else{
                                  $count = 0;
                                $i=0;
                                while($i<mysql_num_rows($query_run)){
                                
                                if($count == 0)
                                {
                                  
                      
                      echo '<tr style="font-size:20px;color:rgb(46,55,169);"> <td>S.NO.</td><td>Student</td> <td>Contact</td><td>Class</td><td>Fathers Name</td><td>Guardian</td></tr>'; 
                               
                                  $count = $count + 1;
                                
                                }


                                
                                else{
                                    
                                    $contacts=mysql_result($query_run,$i,'contact');
                                    $student=mysql_result($query_run,$i,'student');
                                    $class=mysql_result($query_run,$i,'class');
                                    $father=mysql_result($query_run,$i,'father');
                                    $mother=mysql_result($query_run,$i,'mother');
                                    $guardian=mysql_result($query_run,$i,'guardian');
                                    
       echo "<tr><td>".$serial."</td><td>".$student."</td><td>".$contacts."</td><td>".$class."</td><td>".$father."</td><td>".$guardian."</td></tr> "; 
                                
                                
                                    
                                    $i=$i+1;
                                    $serial = $serial + 1;
                                }
                                }
                              }
                            }
													}

                        }
													
												?>
				
							</table>

						</div>
					</div>				
			</div>
			<!-- /row -->
		</section>  
		<!--wrapper -->
	</section>   
	<!-- /MAIN CONTENT -->
	<!--main content end-->
    <!--footer start-->
	<!--footer end-->
</section>

  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>


  <?php
  include 'layout2.php';

  ?>
  



  </body>
</html>
