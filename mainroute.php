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

  
    <script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {
          $('#charNum').text(0 + len);
        }
      };
    </script>

           <script type="text/javascript">

       function ct(){


        var c = document.getElementById("field").value;

        var m = c.length;

        var d = document.getElementById("datepicker").value;

        var n = d.length


        var a = document.getElementById("datepicker2").value;

        var b = a.length;

     

        document.getElementById("tot").style.padding="10px";

         document.getElementById("tot").style.background="rgb(110,100,100)";

           document.getElementById("tot").style.color="rgb(250,250,250)";

           j = m + n + b + 5;
        document.getElementById("tot").innerHTML ="Message Contains"+" " +j+ " Words ";

        if(j > 160)
        {
          document.getElementById("tot").innerHTML ="Message Contains"+" " +j+ " Words" + ":-2 messages";

        }



       };

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
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
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
					
					<form class="form-horizontal style-form" action ="mainroute.php"  method="POST">
					    
               <div style="margin-top:-3%; margin-left:2%">
					
              <div class="form-panel" style="background-color:rgb(179,223,247)">
                   
							   <div style="background-color:rgb(230,230,230)">
       <div style = "margin-top:-3%">

       <div><span style="color:rgb(70,70,70)"><div><h4><div class="centered" style="font-family:colona MT;padding:5px;background-color:rgb(85,85,85);color:white">Simple Message</div></h4></span></div>
             

        <?php

 
 
 
  

         
           

  if( isset($_POST['contact']) && isset($_POST['mes']) && isset($_POST['route'])  )
     {
     

                      $contact = $_POST['contact'];

                      $count_100 = NULL;

                      $cont_100 = NULL;

                       $rou = $_POST['route'];
                      if($rou == "Transactional")
                      {
                        $route = 4;
                      }
                      else
                      {
                        $route = 1;
                      }

                      echo $route;


                      $m =   $_POST['mes'];
                      $date = " ";

                      $date2 = " ";

                      if(isset($_POST['when'])  && isset($_POST['when2']))
                      {

                            $date = $_POST['when'];

                           $date2 = $_POST['when2'];


                         if(!empty($_POST['when2']) && !empty($_POST['when2']))
                         {

                  

                          $mes = $m. " "."Date:".$date." "."to"." ".$date2;

                      
                       
                          }

                     else if($date2 == NULL)
                         {


                       $mes = $m. " "."Date:".$date;

                      
                      echo $mes;


                      }



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

                     $count_numbers = $count_numbers + 1;

                     if($count_numbers == 1)
                     {
                            $count_100 = 1;

                            $cont_100 = array_slice($x,0,1);

                            echo $couunt_100;

                     }

                     if($count_numbers == 2)
                     {
                      $count_200 = 2;

                            $cont_200 = array_slice($x,1,1);
                     }

                      if($count_numbers == 3)
                     {
                            $count_300 = 3;
                                 
                                  $cont_300 = array_slice($x,2,1);

                     }

                     if($count_numbers == 4)
                     {
                      $count_400 = 4;
                           
                            $cont_400 = array_slice($x,3,1);
                     }
                    
                    
                    }
            } 

    
            
           
            
  
            
      


            
              
                if (isset($_POST['send'])) //to insert data in a table 
    {
          if(!empty($contact))   
        {     
               if( !empty($mes))
         
         {

         
               
             /* place ur api here and enjoy */

                   $authKey = "4545AdQs4RV1dY5565bcd8";

//Multiple mobiles numbers separated by comma
$mobileNumber = $cont_100;



//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "LILSOL";

//Your message to send, Add URL encoding here.
$message = urlencode($mes);




//Define route 
$route = $route;
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://sms.bulk24sms.com/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;





  
            
              echo '<article class="col-md-offset-0 col-md-5"><div style="margin-top:-11%; font-size:15px;color:rgb(0,244,122)"><div class="centered"><h4>Message Sent Succesfully</h4> </div></div></article>' ;
                  
           


                     

                          
      
                     
                    } 
    
                  }
          
                }
        
        
    }
        
      
      
      
       

 
 
 
  
?>
</div>
							
									<div class="form-group">
											<div class="col-sm-3" style="margin-left:2%">
												<label class="control-label">      <h4 class="centered">Contact Numbers<br><br>  
</h4></label>
											</div>

											<div class="col-sm-8">
												<textarea class="form-control"  rows="5" name="contact" required>
                  
                        <?php 

                        if(isset($_POST['classes']))
                        {

                               
                                $class=$_POST['classes'];

                         if($class == "All")


        {

                     echo "Contacts";
                          
                             

                  $query= "SELECT * FROM  student ORDER BY `class` where `class` != 'ALUMINI'";
                           
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);



                              if(mysql_num_rows($query_run)==NULL)
                                {
                                   echo "ok";
                                echo 'No contacts found';
                              }
                              else
                              {

                                $i=0;
                                while($i<mysql_num_rows($query_run))
                                    {
                                    $contact =mysql_result($query_run,$i,'contact');

                                    $class = mysql_result($query_run,$i,'class');

                                    $stud =mysql_result($query_run,$i,'student');

                                    echo "$stud"." "."[".$class."]"."=>".$contact." ".",";
                                    
                                    $i=$i+1;
                                    }
                              }
              }

        } 

        else if($class != "All")

                              {  

                                   echo "Contacts::";
        
												 if(isset($_POST['classes']))
                       {
                                $class = $_POST['classes'];
     
                              $no_cls = count($class);
      
  
                   

                                                 if($no_cls == 1)
                                                 {
                                              
                              
    
                               

														$query="select `student`,`contact`,`class` from student  where class='".$class[0]."';";
														
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
                                       $class=mysql_result($query_run,$i,'class');

                                    echo "[".$class."]"." "."$student"."=>".$contacts.", ";


																		$i=$i+1;
																   }
															}
														}
													}


                          if($no_cls == 2)
                                                 {

                                                  $m = $class[0];

                                                  $n = $class[1];
                                              
                              
    

                            $query="select `student`,`contact`,`class` from student  where class='$m' OR class = '$n'";
                            
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

                                        $class=mysql_result($query_run,$i,'class');

                                    echo "[".$class."]"." "."$student"."=>".$contacts.", ";


                                    $i=$i+1;
                                   }
                              }
                            }
                          

                         }

                        }
													}


                          if($no_cls == 3)
                                                 {

                                                  $m = $class[0];

                                                  $n = $class[1];

                                                  $o = $class[2];
                                              
                              
    

                            $query="select `student`,`contact`,`class` from student where class='$m' OR class = '$n' OR class='$o'";
                            
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
                                     $class=mysql_result($query_run,$i,'class');

                                    echo " [".$class."]"." "."$student"."=>".$contacts.", ";


                                    $i=$i+1;
                                   }
                              }
                            }
                          

                         }


                          if($no_cls == 4)
                                                 {

                                                  $m = $class[0];

                                                  $n = $class[1];

                                                  $o = $class[2];

                                                  $p = $class[3];
                                              
                              
    

                            $query="select `student`,`contact`,`class` from student where class='$m' OR class = '$n' OR class='$o' or class='$p'";
                            
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

                                  $class=mysql_result($query_run,$i,'class');

                                    echo " [".$class."]"." "."$student"."=>".$contacts.", ";


                                    $i=$i+1;
                                   }
                              }
                            }
                          

                         }

                        

                        
                          
                        
                        
                      
												}

                        else{echo 'No contacts found No class Selected :- Go back and Select a Class(es)'; }
                          ?>
                        </textarea>
											</div>	
										</div>
										
										<div class="form-group" style="margin-left:1%" >
                                            <label class="col-sm-3 col-sm-3 control-label" style="color:white;padding:1px;background-color:rgb(150,150,150);border-top-left-radius:25px;border-top-right-radius:25px;
"><h4 class="centered">Message</h4></label>
                                             <div class="col-sm-8">
                                     <div> <textarea id="field" onkeyup="countChar(this)" class="form-control round-form" name ="mes" rows="4" value=" " required></textarea> 
                                            <span class="help-block"><p class ="centered">Type your message here must be less than 130 characters</p></span>

                                             Wordcoount:: <span class="btn btn-warning" id="charNum"></span>
                                            </div>
                                            </div>
                                           </div>

                                           <div class="form-group" style="margin-left:1%">
                      <div class="col-md-3">
                      <div class="col-md-offset-3>
                                      <label class="col-sm-3 col-sm-3 control-label" style="color:white;padding:1px;background-color:rgb(150,150,150);border-top-left-radius:25px;border-top-right-radius:25px;
"><h4 class="centered">Route</h4></label>
                      </div>
                       </div>
                      

                      <article class="col-sm-3 col-md-offset-2">

                  
                          <select name="route" class="form-control round-form">
                                       
                                        <option>Transactional</option>
                                         <option >Promotional</option>
                               
            
                                        
                                             </select>

                  
                   
                            
                      </article>  
                    </div>
										   
										     <div class="form-group" style="margin-left:1%">
                                            <label style="color:white;padding:1px;background-color:rgb(150,150,150);border-top-left-radius:25px;border-top-right-radius:25px" class="col-sm-3 control-label"><h4 class="centered">Date</h4></label>
                                        
                                          <article class="col-sm-3 col-md-offset-2">
                                    <input type="text" name ="when" id="datepicker" onclick="return x()"  class="form-control round-form" required/>


									 
									     <span class="help-block">Enter Start date</span> <span class="col-md-offset-4"> <b>TO</b> </span><br><br>


					
									    <input type="text" name ="when2" id="datepicker2"   class="form-control round-form"/>
					     
                                             <span class="help-block">Enter End date.If only one day Event/holiday leave this filed Empty</span>
                                               
                                               </div>
                                           </article>
                                          </div>
										

										   
										   
										  
										<div class="col-sm-offset-4">
											<input type="submit" class="btn btn-lg btn-info" name ="send" value="Send" onmouseover="ct()">
											<span class="col-md-offset-3">	<span  id="tot" style="margin-left:-120px;margin-bottom:5px;"> </span> <span class="col-md-offset-1"> <input type="reset" class="btn btn-lg btn-danger" name ="reset" value ="Clear"></span></span>
				
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
