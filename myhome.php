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
    

  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  
  <style>
  
  
  p
  {
  font-size:18px;
  font-family: 'Lora', serif;
  color:rgb(70,70,70);
  }
  
  
  
  </style>
    <link type="text/css" rel="stylesheet" media="all" href="sampslider.css" />
       <link rel="stylesheet" type="text/css" href="assets/custom.css">
    <style type="text/css">
    #slida-container{
      margin:30px auto;
      max-width:800px;
      max-height:500px;
    }
    </style>
  
   
  </head>8

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
            <a  class="logo"><b>Little Soldiers School</div></b></a>
            <!--logo end-->
            
            <div class="top-menu">
              <ul class="nav pull-right top-menu">

              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
                            </button>

                             <button class="btn btn-warning" type="button">
                          <a href="adminpage.php"><span style="color:white"><i class="li_user"> </i> Admin </span></a>
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
                    
                  <li class="mt">
                      <a  class="active"  href="myhome.php">
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
                      <a  href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Contact</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="newcontact.php">New Contact</a></li>
               <li ><a  href="classselect.php">Update Contact Number</a></li>

                    <li ><a  href="classselect2.php">Update Whole Contact</a></li>
    
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
          
          <br>
      
  
  <div class="row">


  <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
  <div class="col-md-8">
   <div class="panel panel-primary">
   
   <div class="panel-heading">
   
   <p class="centered" style ="font-size:20px;color:white" ><i class="glyphicon glyphicon-flag"> </i> About Us </p>
   </div>
   <div class="panel-body">
   <p>We the LITTLE SOLDIERS is an organization working for the development of a child at his initial years.A child with just some months old arrived on this planet must be handle with care and love but also in a discilpilned manner.Estabilshed on 1992 by   Mrs. Prabha Rajput  she saw a dream to make little and brave soldiers from this institute who can  
   fight all against the odds in the world when they grow up and do respect of all. </p>
   </div>
  </div>
  </div>

  </div>
  </div>

</div>


<br>
 <div class="col-lg-offset-0 col-md-offset-0">
  <div class="col-md-4 col-sm-4">
   <div class="thumbnail" style="background-color:#fff">
   <div class="caption">
 
   <p><i class="glyphicon glyphicon-pushpin"> </i> Discilpline is something that will make you a well bahaved and successfull person loved and honoured by all.</p>
    <p class="text-right" ><i class="li li_pen"> </i>Prabha Rajput </p>
     <p class="text-right" >Founder</p>

  </div>
  </div>

  </div>
  </div>

  <div class="col-md-offset-1 col-sm-offset-1">
  <div class="col-md-4 col-sm-4">
   <div class="thumbnail" style="background-color:#fff">
   <div class="caption">

   <p class="text-center" ><i class="glyphicon glyphicon-send"> </i> Aim </p>
    
 
   <p>We have a clear objective in mind to make masters from our school that will perform best out of themselves in any situation and achieve their goals with passion.  </p>
    

  </div>
  </div>

  </div>

  <div class="col-md-offset-1 col-sm-offset-1">
  <div class="col-md-4 col-sm-4">
   <div class="thumbnail" style="background-color:#fff">
   <div class="caption">
 
   <p> <i class="glyphicon glyphicon-pushpin"> </i>
   A person's nature defines how well he is going to be recieved, aceepted  and respected by this world.</p>
    <p class="text-right" style="font-family:Magneto;font-size:18px;" ><i class="li li_pen"> </i>Vina Sharma</p>
     <p class="text-right" style="font-family:Magneto;font-size:14px;" >Head Faculty</p>

  </div>
  </div>
  </div>

  </div>
  </div>

  </div>


  



  </div>



  <?php


  ?>

  
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