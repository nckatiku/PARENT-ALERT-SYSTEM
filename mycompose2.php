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
	<!--header start-->
		<header class="row">
           
			
			<nav class ="navbar navbar-inverse navbar-default navbar-fixed-top role = "navigation">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
			
			<!--logo start-->
            <a class="logo"><b>Little Soldiers School</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">

              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
                            </button>           	</ul>
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
                 <p class="centered"><img src="imgs/im3.jpg" class="img-circle"  width="250" height = "180"></p>  
				  <li class="mt">
                      <a href="userhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Back to Home</span>
                      </a>
                  </li>
  <li class="sub-menu">
                      <a class="active"  href="javascript:;" >
                          <i class="li_mail"></i>
                          <span>Compose</span>
                      </a>
                      <ul class="sub">
                          <li class="active" ><a  href="mycompose2.php">New Event Message</a></li>
                 <li ><a  href="usersimple.php">Simple Message</a></li>
                       
                          
                      </ul>
                  </li> 
    
          
 
              </ul>
              
                 
              <!-- sidebar menu end-->
			</div>
		</aside>
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
	
			<div class="row mt">
			<div class ="col-md-offset-2">
					<div class="col-lg-12">
					
								<form class="form-horizontal style-form" action ="usermain.php"  method="POST">
									<div class="form-panel">
									
       <div style ="padding:10px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-5"><span style="color:white">Select Class</span></div></div></h4><br>
									
	                                      <br><br>
									
										<div class="form-group">
											<div class="col-sm-4">
												<label class="label-control"><h4>Class</h4> </label>
											</div>
											<div class="col-sm-6">

									
											   
                                  <select multiple="multiple" name="classes[]" class="form-control">
                                    <option>Crech</option>
                                        <option>Playgroup </option>
                                       
                                        <option  >Nursery</option>
                                        
                                    
                                        <option>KG-I</option>
                                        <option>KG-II</option>
                                          <option>Alumini</option>
                                           <option>All</option>
      
  </select>
                    	</div>	
										</div> <br><br><br><br><br><br>
										<div class="col-sm-offset-4">
											<input type="submit" class="btn btn-lg btn-info" name ="submit" value="Proceed to message">
											
										</div>
									</div>
							  </form>
			
					</div>
					<!-- col-lg-12-->
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
