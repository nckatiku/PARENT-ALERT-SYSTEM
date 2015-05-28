
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




    <?php

    include 'layout.php';

   ?>
  
	 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  
    <link type="text/css" rel="stylesheet" media="all" href="sampslider.css" />
    

	
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
            <a  class="logo"><b> Little Soldiers School - Parent Alert Syestem</div></b></a>

          

            <!--logo end-->
            
            <div class="top-menu">
              <ul class="nav navbar-right top-nav">
              <li>
          
              <button class="btn btn-warning" type="button">
                          <a href="adminpage.php"><span style="color:white"><i class="li_user"> </i> Admin </span></a>
                            </button>    
                            
                            

                            <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
                            </button>   </li>     

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
              <li><a  href="selectstaff.php">Update Staff Contact</a></li>
 
						  
 

                 
                      </ul>
                  </li>


              </ul>
        
           
          </div>
      </aside>
	 
   <!--main content start-->
       <section id="main-content">
          <section class="wrapper">

 <div class="row">
  

<div class="col-md-offset-1">

  <div class="col-md-4">

<div class="thumbnail">

  <div class="caption">

  asasafa

  </div>

  </div>
  </div>
  </div>

		<div class="col-md-3">  
  <div style="width:700px;height:100px;margin-left:-1px;">	
 
    <div id="slida-1" class="samp-slider samp-slider-mask">    
      <ul class="samp-container-horizontal">
        <li class="samp-container"><img  src="imgs/im1.jpg"></li>
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


		  

  
	 
    
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
   
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
	
	<?php
  include 'layout2.php';

  ?>
  

  </body>
</html>
