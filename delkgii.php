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


  <script type="text/javascript">

  
  function my() {

    var x = confirm("Confirm Delete the KG-II WHOLE KG-II Records will be deleted");

    if(x == true)

    {

      
      
      return true;
    }

    else
    {
      return false;
    }

  }

  </script>
 
  
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
            <a class="logo"  ><b>Little Soldiers School</b></a>
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
			  
			  <div style="margin-top:1%"> <p class="centered"><img  src="imgs/im5.jpg"class="img-circle"  width="250" height = "180"></p> </div>
				  <li class="mt">
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Back to Home</span>
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
						     <li ><a  href="classselect.php">Update Contact Number</a></li>

                    <li ><a  href="classselect2.php">Update Whole Contact</a></li>
    
							   <li ><a  href="delete.php"> Delete Contact </a></li>
							   
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Class Operations</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="updateclass.php">Update Whole Class</a></li>
						    <li ><a  href="getcontacts.php">Get All Contacts</a></li>
							   
							   <li class="active"><a  href="delkgii.php">Delete Class KG-II</a></li>

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


              <!-- sidebar menu end-->
			</div>
		</aside>
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
					
			<div class="row mt">
			<div class="col-md-offset-2">
					<div class="col-lg-12">
					
								<form class="form-horizontal style-form" action ="ondelkgii.php"  method="POST">
									<div class="form-panel">
	
       <div  style ="padding:10px;background-color:rgb(255,80,80);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-1"><span style="color:white"><i class="glyphicon glyphicon-remove"> </i> Be Careful using this page :: Delete Class KG-II After End of the yearly Session  </span></div></div></h4><br>
				
         <div class="alert alert-danger"><div style="color:red" class="centered"><b> PLEASE READ THE BELOW INSTRUCTIONS</b></div></div>

 

        <div class="alert alert-danger"> WARNING::DID YOU UPDATED KG-I TO KG-II IF DONE SO WHOLE KG-I WILL BE DELETED WITH KG-II</div>

        <div class="alert alert-danger">WARNING::DONT DELETE FIRST GO TO ALLCONTACTS AND CHECK YOU HAVE NOT UPDATED KG-I TO KG-II </div>

          <div class="alert alert-danger">WARNING::DELETED KG-II WITHOUT THE ABOVE 2 INSTRUCTIONS CHECKED WILL  DELETE KG-I ALSO WITH KG-II PLEASE CONFIRM</div>

        


								<br><br><br>
										<div class="centered">	<input type="submit" class="btn btn-lg btn-danger" name ="submit" onclick= "return my()" value="Proceed To Delete"></div>
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
