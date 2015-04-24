
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
  
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	
    <title>Little Soldiers School</title>
  	<link href="assets/css/bootstrap.css" rel="stylesheet">
	 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  
    <link type="text/css" rel="stylesheet" media="all" href="sampslider.css" />
    <style type="text/css">
    #slida-container{
      margin:30px auto;
			max-width:1024px;
			max-height:576px;
		}
    </style>
	
    <!-- Bootstrap core CSS -->
    
    <!--external css-->
	 <link href="assets/custom.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/custom.css" rel="stylesheet" />
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
           
			
		<nav class ="navbar navbar-inverse navbar-fixed-top role = "navigation">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
	
			<!--logo start-->
            <a  class="logo"><b> Little Soldiers School</div></b></a>

            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
				  
              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-backward"> </i></span></a>
                            </button>          	</ul>
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
            
              <ul class="sidebar-menu" id="nav-accordion">
              
 
              	  
				  
	
              	  	
                  <li class="sub-menu">
                      <a class="active"  href="myhome.php">
                          <i class="li_shop"></i>
                         <span class ="active">Home</span>
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
						    <li ><a  href="update.php">Update Contact</a></li>
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
           
          </div>
      </aside>
	 
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
       <section id="main-content">
          <section class="wrapper">
		  
		 <article class="col-md-offset-1 col-md-12" style="margin-top:-1%;margin-left:5.3%;background-color:"black";" >
  
  <div id="slida-container">	
    <div id="slida-1" class="samp-slider samp-slider-mask">    
      <ul class="samp-container-horizontal">
        <li class="samp-container"><img src="imgs/im1.jpg"></li>
        <li class="samp-container"><img src="imgs/im2.jpg"></li>
        <li class="samp-container"><img src="imgs/im3.jpg"></li>
        <li class="samp-container"><img src="imgs/im4.jpg"></li>
        <li class="samp-container"><img src="imgs/im5.jpg"></li>
		<li class="samp-container"><img src="imgs/im6.jpg"></li>
		<li class="samp-container"><img src="imgs/im7.jpg"></li>
		<li class="samp-container"><img src="imgs/im8.jpg"></li>
		<li class="samp-container"><img src="imgs/im9.jpg"></li>
      </ul>
    </div>
  </div>
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="sampslider.js?v1"></script>
	<script type="text/javascript">
  
    var slida = jQuery('#slida-1').sampSlider({
      aspectratio:1.8,
      autosize: true,
      autoplay: 4000,
      slidespeed: 2500,
      dragonbar: true,
      startslide: 1
    });
  
  </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		  

  
	 </article>
    </section>          <!--wrapper -->
      </section>   
            

      
      <!--footer end-->-2
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
   
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
   

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
   
	
	
	
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
