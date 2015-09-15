<?php

 include 'connect.php';
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
           
			
			<nav class ="navbar navbar-inverse navbar-default navbar-fixed-top role = "navigation">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
			
			<!--logo start-->
            <a  class="logo"><b><div class ="color">Little Soldiers School</div></b></a>
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
                 

			
              	  	
                  <li class="sub-menu">
                      <a   href="userhome.php">
                          <i class="li_shop"></i>
                          <span >Back to Home</span>
                      </a>
                  </li>

                 
               <li class="sub-menu">
                      <a class="active"  href="javascript:;" >
                          <i class="li_mail"></i>
                          <span>Compose</span>
                      </a>
                      <ul class="sub">
                          <li  ><a  href="mycompose2.php">New Event Message</a></li>
                 <li  class="active"><a  href="usersimple.php">Simple Message</a></li>
                       
                          
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
			   <div class="col-md-offset-2">
					<div class="col-lg-11">
					
								<form class="form-horizontal style-form" action ="usermain2.php"  method="POST">
									
									
									<div class="form-panel" >
										<div class="form-group">
	
       <div style ="padding:10px; box-shadow: 4px 4px 3px black;background-color:rgb(100,100,100);margin-left:0.5%;margin-right:0.5%;margin-top:-1.3%"><h4><div class="col-md-offset-5"><span style="color:white">Select Class</span></div></div></h4><br>
									
									<br><br>
											<div class="col-sm-4">
												<label class="label-control"><h4>Class</h4> </label>
											</div>
											<div class="col-sm-8">

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
      
  
  

