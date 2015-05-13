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
            <a  class="logo"><b>Little Soldiers School</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">

              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-backward"> </i></span></a>
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
          <article class="col-md-10 col-md-offset-2">

        
				<!-- FORM --------------------FORM-------------------------FORM------------------------FORM --------------------------FORM-->
                    
                        <form class="form-horizontal style-form" action ="update.php" method="POST">
                                  
                          <div class="form-panel">
	
       <div style ="padding:10px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-5"><span style="color:white">Update Student Record</span></div></div></h4><br><br>
									
							   <div style="margin-top:-3%;margin-bottom-1%">
          <?php

    

         
           

  if(isset($_POST['contact']) && isset($_POST['new']) && isset($_POST['reent']))
     {

          
            
                     
                      $contact  =   $_POST['contact'];
            $new  =       $_POST['new'];
                      $reent   =    $_POST['reent'];
            
      
                                  
                               
                                if (isset($_POST['enter'])) //to insert data in a table 
                              {
             
                                      if(!empty($contact) && !empty($new) && !empty($reent))
               
                                            {

                    
                                                  if($new == $reent)
           
                                                      {

                                
                                                      $query="UPDATE `student` SET `contact`='$new' WHERE `contact` ='$contact'"; 
        
        

                      
        
                                                                     if($query_run = mysql_query($query))
                       
                                                                    {
                              
            echo '<div class="col-md-10"><div class="col-md-offset-4"><div class="alert alert-info" ><div class="centered">Contact Updated Sucessfully..</div></div> </div></div>';
                    
                                                         }
              
              
                                                        }
            
                    
                                                        else 
            
                                                    {
                       
                      echo '<article class="col-md-9 col-md-offset-3"><div class="alert alert-danger"><div class="centered">Warning:: You filled new contact and reenter contact with diffrent values Please Renter</div></div></article>';
                               
                                                       }
                  

            
                                      }
                    
                
                                  else
                                  
                                { 
                                             echo '<div class="alert alert-danger"><div class="centered">Warning:: Any Field  is Left Empty ... Please Re-enter</div></div>';
                                         }

                    
                                }

       }       
               
    
    
    
 

 ?>
 </div>
               
        
						 
                           <br><br><br>

                            <div class="form-group">
                  
                        <label class="col-sm-3 col-sm-3 control-label"><h4>Exixsting Contact</h4> </label>
                    
                      <div class="col-sm-5">
                                            
                
                         <textarea class="form-control round-form" name= "contact" class="form-control" rows = "2">
        
                          <?php 

                           if(isset($_POST['st_name']))
   
         {

                                $stu =$_POST['st_name'];

                            


                        
                          
                        
                                $query="select `contact` from `student` where `student` ='".$stu."';";

                                $query_run=mysql_query($query);

                                $v = mysql_num_rows($query_run);

                                $i = 0;


                            if($v == 1)
                               {
                      
                        
                                  $contact =mysql_result($query_run,$i,'contact');
                                  
                                   echo $contact;
                              }
                          
                            
                          

                    }         
                          
                          
   
              
                          ?>

                          </textarea>
                            <span class="help-block"><p class="col-md-offset-1">Existing Contact of the student</p></span>
          
                      </div>  
                      </div>
                    
                    


                              <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>New Contact</h4></label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "new" required>
                                        <span class="help-block"><p class="col-md-offset-1">Enter the new contact of the student</p></span>  
                                    </div>
                            </div><br>

                              <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Renter Contact</h4></label>
                                   <div class="col-sm-5">
                                    <input type="text" class="form-control round-form" name = "reent" required>
                         <span class="help-block"><p class="col-md-offset-1">Again Enter the new contact of the student</p></span> 
                                    </div>
                            </div><br>

                      

                       <div class="centered">  <input type="submit" class="btn btn-lg btn-success" value="Update" name="enter"> </div>
						 
						 
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
