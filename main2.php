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
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>

   <script>
  $(document).ready(function() {
    $("#datepicker2").datepicker();
  });
  </script>


 <?php

    include 'layout.php';

   ?>
  
   </head>
<body>
<section id="container" >
	<!--header start-->
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
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-backward"> </i></span></a>
                            </button>             	</ul>
            </div>
			</div>
			</nav>

        </he    <!--logo end-->

   
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
                          <span>Home</span>
                      </a>
                  </li>
                  <li class="sub-menu active">
                      <a href="main2.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Message</span>
                      </a>
                   </li>

            
			  
			     <li class="sub-menu active">
                      <a href="simple.php" >
                          <i class="fa fa-dashboard"></i>
                          <span>Back to Compose</span>
                      </a>
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
			<div class="col-md-offset-1">
					<div class="col-lg-12">
					
					<form class="form-horizontal style-form" action ="main2.php"  method="POST">
					    
               <div style="margin-top:-3%; margin-left:2%">
					
              <div class="form-panel">
                   
							   <div style="background-color:rgb(179,223,247)">
       <div style ="margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%">

       <div><span style="color:rgb(70,70,70)"><div style="margin-left:1.5%"><h4>Simple Message</h4></span></div>
             

        <?php

 
 
 
  

         
           

  if( isset($_POST['contact']) && isset($_POST['mes']) )
     {
     

                      $contact = $_POST['contact'];
                      $m =   $_POST['mes'];
                      $date = " ";

                      $date2 = " ";

                      if(isset($_POST['when'])  && isset($_POST['when2']))
                      {

                      $date = $_POST['when'];

                       $date2 = $_POST['when2'];

                       $mes = $m. " "."Date:".$date." "."to"." ".$date2;

                      
                      echo $mes;
                      }

                      else if( isset($_POST['when'])  )
                      {

                      $date = $_POST['when'];

                     $mes = $m." "."Date:".$date;

                      
                      echo $mes;
                      }

                       else

                       {

                        $mes = $m;
                       }

        
        
            
                     $x = str_split($contact);

            $cont = NULL;

            foreach ($x as  $value) {

                      

                     if(is_numeric($value))
                    {

                     $cont = $cont."$value";
                    }

                    else if($value == ",")
                    {
                      

                     $cont = $cont."$value";
                    
                    }
            } 

    
            
           
            
  
            
      


              
                if (isset($_POST['send'])) //to insert data in a table 
    {
             
             
               
                    if(!empty($contact) && !empty($mes) )
          
    {
            echo $cont;
                         
  

 

 
 
  
?>
</div>
							<br>
									<div class="form-group">
											<div class="col-sm-3" style="margin-left:2%">
												<label class="label-control"><h4>Contact Numbers</h4></label>
											</div>
											<div class="col-sm-8">
												<textarea class="form-control"  rows="3" name="contact">
                        <?php 
													if(isset($_POST['class']))
                          {
														$class=$_POST['class'];

														$query="select `student`,`contact` from student where class='".$class."';";
														
                            if(mysql_query($query)){
															$query_run=mysql_query($query);
															if(mysql_num_rows($query_run)==NULL){
																echo 'no contacts found';
															}
															else{
																$i=0;
																while($i<mysql_num_rows($query_run)){
																		$contacts=mysql_result($query_run,$i,'contact');
																		 $student=mysql_result($query_run,$i,'student');

                                    echo $student." "."=>".$contacts.", ";

																		$i=$i+1;
																}
															}
														}
													}
													
												?></textarea>
											</div>	
										</div>
										
										<div class="form-group" style="margin-left:1%" >
                                            <label class="col-sm-3 col-sm-3 control-label"><h4>Message</h4></label>
                                             <div class="col-sm-8">
                                     <textarea class="form-control round-form"  name ="mes" rows="4" value=""></textarea> 
                                           <span class="help-block"><p class ="centered">Type your message here</p></span>
                                            </div>
                                           </div>
										   
										     <div class="form-group" style="margin-left:1%">
                                            <label class="col-sm-3 col-sm-3 control-label"><h4>Date</h4></label>
                                          <div class="col-sm-3">
                                    <input type="text" name ="when" id="datepicker"   class="form-control round-form"/>


									 
									     <span class="help-block">Type Start date</span><br> <div class="col-md-offset-4"> <b>TO</b> </div><br>


					
									    <input type="text" name ="when2" id="datepicker2"   class="form-control round-form"/>
					     
                                             <span class="help-block">Type End date.If only one day Event/holiday leave this filed Empty</span>
                                               </div>
                                           </div>

										

										   
										   
										  
										<div class="col-sm-offset-4">
											<input type="submit" class="btn btn-lg btn-info" name ="send" value="Send">
											<span class="col-md-offset-3">	<input type="reset" class="btn btn-lg btn-danger" name ="reset" value ="Clear"></span>
				
								</div>
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
    <!--footer end-->
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
