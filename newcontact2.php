


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Little Soldiers School</title>

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
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a  class="logo"><b><div class ="color">Little Soldiers School</div></b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login_lit.php"><b>Logout</b></a></li>
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
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/login-bg.jpg" class="img-circle" width="170" height ="100"></a></p>
              	  <h5 class="centered">We make little soldiers</h5>
              	  	
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
                          <li ><a  href="mycompose.php">New Message</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="li_phone"></i>
                          <span>Simple Message</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="simple.php">Type New</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a   href="javascript:;" >
                          <i class="li_news"></i>
                          <span>Update Contact</span>
                      </a>
                      <ul class="sub">
                          <li  ><a  href="update.php">Update</a></li>
                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="li_pen"></i>
                          <span>New Contact</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="newcontact.php">Enter</a></li>
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="li_trash"></i>
                          <span>Delete Contact</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="delete.php">Delete</a></li>
                       
                      </ul>
                  </li>
				  
				   <li class="sub-menu">
                      <a  href="javascript:;" >
                          <i class="li_paperplane"></i>
                          <span>Update Whole Class</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="updateclass.php">Class Update </a></li>
                       
                      </ul>
                  </li>
				  
				  
                <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="li_user"></i>
                          <span>Parents Proffesion</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profession.html">View</a></li>
                 
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
            <h4><i class="fa fa-angle-right"></i> Enter New Contact</h4>
    <div class="row mt">
          <div class="col-lg-10">
                <div class="form-panel">
				
				<!-- FORM --------------------FORM-------------------------FORM------------------------FORM --------------------------FORM-->
                    
                        <form class="form-horizontal style-form" action ="newcontact.php" method="POST">
                         
                            




							<div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label">Class  </label>
                                    
						

                                       <select name="class" class="col-sm-3">
                                       
										 <option >Choose Class</option>
                                        <option  >Nursery</option>
										<option>Playgroup</option>
										<option>Balvadi</option>
										<option>KG-I</option>
                                        <option>KG-II</option>
						
                                        
									    </select>
							
                                 
                            </div> <br>

                             <div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label">Student</label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "student">
                                        
                                    </div>
                            </div><br>

							
							<div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label">Contact No.</label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "contact">
                                        
                                    </div>
                            </div><br>



                              <div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label">Mother's Name</label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "mother">
                                         
                                    </div>
                            </div><br>

                              <div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label">Father's Name</label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "father">
                                        
                                    </div>
                            </div><br>

                        <div class="form-group">
                                 <label class="col-sm-2 col-sm-2 control-label">Guardian's Name</label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "guardian">
                                        
                                    </div>
                            </div><br>

                      <p class="centered">   <input type="submit" class="btn btn-lg btn-success" value="Enter" name="enter"> <p>
					  
					 
<?php

 include 'connect.php';
	

         
           

	if( isset($_POST['class'])&& isset($_POST['student']) && isset($_POST['contact']) && isset($_POST['mother']) && isset($_POST['father']) && isset($_POST['guardian']))
     {
		
                      $class    =   $_POST['class'];
					  $student =   $_POST['student'];
                      $contact  =   $_POST['contact'];
					  $mother   =   $_POST['mother'];
                      $father   =   $_POST['father'];
					  $guardian =   $_POST['guardian'];
					  
					  
		  
		       


              
                if (isset($_POST['enter'])) //to insert data in a table 
		{
				     if($class != "Choose Class")
			   {		 
		            if(!empty($class) && !empty($student)&& !empty($contact) && !empty($mother) && !empty($father) && !empty($guardian))
               
                  {


              
                                
  $query="INSERT INTO `soldiers`(`student`, `class`, `contact`, `mother`, `father`, `guardian`) VALUES ('$student','$class','$contact','$mother','$father','$guardian')";      

                      
				
                         if($query_run = mysql_query($query))
                       
                          {
						   
						     echo '<b><font color = "blue" >Student Record inserted </font></b>';
									  
						  }
						  
						  
				  }
                               
							   
							   else
                                  
								  { 
                                   echo '<b><font color = "red">Invalid Entry or Any Field Left Empty ... Please Re-enter</font></b></b>';
		                           }

                    

               }
		
		}
 }

 ?>
 
 <div>

</div>
                          
                      </form>
                
				
				
				
		<!------FORM-------------------------FORM------------------------FORM-------------------FORM-->		
				
				
				</div>
          </div><!-- col-lg-12-->       
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
