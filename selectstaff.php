<?php

 require 'connect.php';

 session_start();

if(!$_SESSION['id'])
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
</head>
<body>
<section id="container" >
	<!--header start-->
		<header class="row">
           
	
	<nav class ="navbar navbar-inverse  navbar-fixed-top navbar-default  role = "navigation">
		
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
          
			
			
			<!--logo start-->
            <a class="logo"  ><b>Little Soldiers School</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
            	
              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
                            </button>              	</ul>
            </div>
			</nav>
          
        </header>
		
    <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
	    <div class ="col-offset-0">
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
			    <li class="mt">
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
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
                      <a  href="javascript:;" >
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
                      <a  href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Class Operations</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="updateclass.php">Update Whole Class</a></li>
						    <li ><a  href="getcontacts.php">Get All Contacts</a></li>
							   
							   <li ><a  href="delkgii.php">Delete Class KG-II</a></li>
                      </ul>
                  </li>
                

 
                  
                <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="li_user"></i>
                          <span>Staff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="staffmessage.php">Message Staff</a></li>
						  <li><a  href="newstaff.php">Add New Staff </a></li>
						  <li><a  href="staffdel.php">Delete a Staff</a></li>
						  <li class="active"><a  href="selectstaff.php">Update Staff Contact</a></li>
                 
                      </ul>
                  </li>


              <!-- sidebar menu end-->
			</div>
			</div>
		</aside>
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
			
					<div>
           <?php

    
 
     if(isset($_POST['st_name']))
                         {
						        $x =$_POST['st_name'];
                                  
					
		    

				
					
					   if (isset($_POST['Delete'])) 
		               {
				     
		                        if(!empty($x))
               
                                {

                                   
						 
					                    
					 
                                           $query1= "DELETE FROM `staff` WHERE `teacher` = '$x'"; 
				
        
                                         if($query_run = mysql_query($query1))
                       
                                            {
								
								  
						 echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-info"><div class="centered" style="margin-top:%">Staff Record '.$x.' Deleted Sucessfully.. </div></div></article>';
									  
						                    }
						  
						    
					                    	

										   
                                     
					                   


    									 				

				        
						
						        }  

                                 else
                                  
				                { 
           echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger"><div class="centered" style="margin-top:1%" >Warning:: No Name Selected</div></div></article>';
		                        }				

               
		                }
		
            }
 
       
	
	      
   ?>
                                         </div>
			<div class="row mt">
					<div class="col-sm-offset-2">
					<div class="col-lg-12" style="margin-top:7%">
					
								<form class="form-horizontal style-form" action ="updatestaff.php"  method="POST">
									<div class="form-panel" >
	
       <div style ="padding:10px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1.2%"><h4><div class="col-md-offset-5"><span style="color:white">Update  Staff Contact Number</span></div></div></h4><br>
									
											
										<br><br>
										<div class="form-group">
											<div class="col-sm-6">
												<label class="label-control"><h4>Teacher's Name</h4> </label>
											</div>
											<div class="col-sm-6">
                                            
											   <select name="teacher" class="form-control ">
											   
													<option value="0">Select Faculty Name </option>
													<?php 
												
													
												
														$query="SELECT `teacher` FROM `staff` where `status` != 'inactive'";
														if(mysql_query($query))
														{
															$query_run=mysql_query($query);
															if(mysql_num_rows($query_run)==NULL)
															{
																echo 'no contacts found';
															}
															else
															{
																$i=0;
																$count = 0;
												
																while($i<mysql_num_rows($query_run))
																{
																		$student =mysql_result($query_run,$i,'teacher');
																		$take_stu[$i] = $student;
																		$i=$i+1;
																		$count = $count + 1;
																}
															}
													
														}
													

													           
													
													
													
													       
														        $i = 0;
													
																while($i <= $count){
																		$class=mysql_result($run_query,$i,'class');
																		echo '<option value="'.$take_stu[$i].'">'.$take_stu[$i].'</option>';
																		$i=$i+1;
																}
							
													?>
												</select>
											</div>	
											</div>
										
										
										<br> <br>
										
										<div class="col-sm-offset-2">
											<input type="submit" class="btn btn-lg btn-info" name ="Delete" value="Procced to Update Staff Record">
										</div>
									
									</div>
							  </form>
			
					</div>
					</div>
					<!-- col-lg-12-->       
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
      
  
  

