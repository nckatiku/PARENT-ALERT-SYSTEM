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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Liitle Soldiers School</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="assets/custom.css"> 
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
	
	 <script>
  function check(){
	confirm("hello");

  }
  </script>
 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container" >
	<!--header start-->
		<header class="row">
           
			
			<nav class ="navbar navbar-inverse navbar-fixed-top navbar-default  role = "navigation">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
			
			<!--logo start-->
            <a class="logo"  ><b><div class ="color">Little Soldiers School</div></b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php"><b>Logout</b></a></li>
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
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Back to Home</span>
                      </a>
                  </li>
				  <li>
				  <a class ="active" href="mycompose.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Compose</span>
                      </a>
                  </li>
                 
              <!-- sidebar menu end-->
			</div>
		</aside>
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
						<div class="col-sm-offset-2"><h4><i class="fa fa-angle-right"></i> Delete Student Record</h4> </div>
					<div>
           <?php

     
 
     if(isset($_POST['st_name']))
                         {
						        $x =$_POST['st_name'];
                                  
					
		    

				
					
					   if (isset($_POST['Delete'])) 
		               {
				     
		                        if(!empty($x))
               
                                {

                                   
						 
					                    
											   
					 
                                          $query1= "DELETE FROM `soldiers` WHERE `student` = '$x'"; 
				
                                       
                                         if($query_run = mysql_query($query1))
                       
                                            {
								
								             echo "<script> confirm('Confirm Delete contact')</script>"; 
											   
						
						   
						                       echo  '<div class="alert alert-info">Contact '.$x.' Deleted Sucessfully.. </div>';
									  
						                    }
						  
						    
					                    	

										   
                                     
					                   


    									 				

				        
						
						        }  

                                 else
                                  
				                { 
                                 echo '<div class="alert alert-danger">Warning:: No Name is selected.Please Renter</div>';
		                        }				

               
		                }
		
            }
 
       
	
	      
   ?>
                                         </div>
			<div class="row mt">
					<div class="col-md-offset-2">
					<div class="col-lg-12">
					
								<form class="form-horizontal style-form"   method="POST">
									<div class="form-panel">
										
										
										<div class="form-group">
											<div class="col-sm-4">
												<label class="label-control"><h4>Student Name</h4> </label>
											</div>
											<div class="col-sm-6">
                                            
											   <select name="st_name" class="form-control" >
											   
													<option value="0">Select Student Name </option>
													<?php 
													    if(isset($_POST['class']))
													{
														$class=$_POST['class'];
														$query="select `student` from soldiers where class='".$class."';";
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
																		$student=mysql_result($query_run,$i,'student');
																		$take_stu[$i] = $student;
																		$i=$i+1;
																		$count = $count + 1;
																}
															}
													
														}
													}

													           
													
													
													
													       
														        $i = 0;
													
																while($i<=$count){
																		$class=mysql_result($run_query,$i,'class');
																		echo '<option value="'.$take_stu[$i].'">'.$take_stu[$i].'</option>';
																		$i=$i+1;
																}
							
													?>
												</select>
											</div>	
											</div>
										
										
										
										
										<div class="col-sm-offset-2">
					<input type="submit" class="btn btn-lg btn-danger" name ="Delete" value="Delete Record"  onsubmit ="check()">
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
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
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
