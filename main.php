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
              <a  class="logo"><b>Little Soldiers School</b></a>
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
			     
				  <li >
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span> Home</span>
                      </a>
                  </li>
                  <li class="sub-menu active">
                      <a href="main.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Message</span>
                      </a>
                   </li>
				   
				      <li class="sub-menu active">
                      <a href="mycompose.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Back To Compose</span>
                      </a>
                   </li>



         
           </ul>   


              </ul>
              <!-- sidebar menu end-->
			</div>
		</aside>
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
			
				
			<div class="row mt">
		
		         
				       <div class="col-md-offfset-4">
					<div class="col-lg-12">
					          
								<form class="form-horizontal style-form" action ="main.php"  method="POST">
									
                                       
										   
										   <div class="row login_box">
										   
	                                     
		                                  <div class="col-md-12" align="left">
                                    <div class="mfont"><div class="text-left"><br>Event Message <br>
									
			                        
                                         <?php

 
 
 	

         
           

	if( isset($_POST['contact']) && isset($_POST['what']) && isset($_POST['when']) && isset($_POST['where']) && isset($_POST['note']))
     {
		 
            $contact = $_POST['contact'];
            $what  =   $_POST['what'];
					  $when   =   $_POST['when'];
            $where   =   $_POST['where'];
					  $note =   $_POST['note'];

           
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

            


					  
		
					  
					  $full_message =" "." ".$what." "."Date:".$when." "." ".$where." "." ".$note;
					  
	                      
					  
			


              
                if (isset($_POST['send'])) //to insert data in a table 
		{
				  if(!empty($contact))   
		    {     
               if(!empty($contact) && !empty($what) && !empty( $when) && !empty($where))
			   
			   {
                    if($what !="Dear Parents:")
                    {  
						 /* place ur api here and enjoy */
      
						  $mobilenumbers =$cont;
                      $message = $full_message;
					$user="swap81099"; //your username
                    $password="86235184"; //your password
                    $senderid="SMSCountry"; //Your senderid
                    $messagetype="N"; //Type Of Your Message
                    $DReports="Y"; //Delivery Reports
                    $url="http://www.smscountry.com/SMSCwebservice_Bulk.aspx";
                    $message = urlencode($message);
					
					
                            
							$ch = curl_init();
                            if (!$ch){die("Couldn't initialize a cURL handle");}
                            $ret = curl_setopt($ch, CURLOPT_URL,$url);
                            curl_setopt ($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
                            curl_setopt ($ch, CURLOPT_POSTFIELDS,
						    "User=$user&passwd=$password&mobilenumber=$mobilenumbers&message=$message&sid=$senderid&mtype=$messagetype&DR=$DReports");
                            $ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            //If you are behind proxy then please uncomment below line and provide your proxy ip with port.
                            // $ret = curl_setopt($ch, CURLOPT_PROXY, "PROXY IP ADDRESS:PORT");
                            $curlresponse = curl_exec($ch); // execute
                            if(curl_errno($ch))
                            echo 'curl error : '. curl_error($ch);
                            if (empty($ret)) 
			    {
                      // some kind of an error happened
                         die(curl_error($ch));
                         curl_close($ch); // close cURL handler
                } 
				else 
				{
                          $info = curl_getinfo($ch);
                          curl_close($ch); // close cURL handler
                           //echo "";
						
                          
                          echo $curlresponse;
						  echo '<article class="col-md-offset-2 col-md-10"><div style="margin-top:-9%; font-size:15px;color:rgb(0,0,220)"><div class="centered"><h4>Message Sent Succesfully</h4> </div></div></article>' ;
                         

                    } 
		
                  }
				  
				  else 
				  {
 echo '<article class="col-md-offset-2 col-md-10"><div style="margin-top:-7%; font-size:15px;color:rgb(248,98,98)"><div class="centered"><h4>Warning::Nothing Typed in the What field.Please Type Something about Event</h4></div></div> </article>' ;
                   }
				  
                }
				else{
				  
	   
	   echo '<article class="col-md-offset-2 col-md-10"><div style="margin-top:-7%; font-size:15px;color(248,98,98)"><div class="centered"><h4>Warning::Any Filed Left Empty. Please resend</h4></div></div> </article>' ;
                         
				
				}
				
		}
				
				else 
				{
			   echo '<article class="col-md-offset-2 col-md-10"><div style="margin-top:-7%; font-size:15px;color:rgb(248,98,98)"><div class="centered"><h4>Warning::No contacts Selected Please resend</h4></div></div> </article>' ;
		
				}
			
			
			}
       

 }
 
 
 	
?>
</div>

									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									</div> </div>
                                             <div class="col-md-12">
		                               
                          <br>
		
												<div class="form-group">
											<div class="col-sm-2">
												<label class="label-control"><h5>Contact Numbers</h5></label>
											</div>
											<div class="col-sm-10">
												<textarea class="form-control "  rows="3" name="contact"><?php 
													if(isset($_POST['class']))
    {

														$class=$_POST['class'];

                         

         if($class == "ALL")

        {
                 echo "dsd";

                  $query= "SELECT `contact`,`student` FROM  student";
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
                                    $contacts=mysql_result($query_run,$i,'contact');
                                    
                                    $i=$i+1;
                                    }
                              }
              }

        }
						
              else if( $class != "ALL")
        {  
                            $query="select `contact`,`student` from student where class='".$class."';";
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);
                              if(mysql_num_rows($query_run)==NULL)
                             {
                                echo 'No contacts found';
                              }
                              else
                              {
                                $i=0;
                                while($i<mysql_num_rows($query_run))
                                    {
                                    $contacts=mysql_result($query_run,$i,'contact');
                                    $student=mysql_result($query_run,$i,'student');

                                    echo $student." "."=>".$contacts.", ";
                                    $i=$i+1;
                                    }
                              }
              }
                          
        }							

   

    }
											
                      	?>

                        </textarea>
											</div>	
										</div>

                                        
											 
										   
                                                            <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"><h5>What</h5></label>
                                             <div class="col-sm-10">
                                             <input type="text" class="form-control round-form"  name ="what" rows = "2" value ="Dear Parents:">
                                           <span class="help-block">What is the event</span>
                                            </div>
                                           </div>
										   
										    <div class="form-group">
                                           <label class="col-sm-2 col-sm-2 control-label"><h5>Where</h5></label>
                                         <div class="col-sm-10">
                   <input type="text" class="form-control round-form" name ="where" value="Venue:Little Soldiers campus" />
                                         <span class="help-block">Venue/place of the event</span>
                                          </div>
                                             </div>
										  
										  <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"><h5>When</h5></label>
                                          <div class="col-sm-3">
                                    <input name ="when" id="datepicker"   class="form-control round-form" required/>
					
									        
                                             <span class="help-block">Date of the event</span>
                                               </div>
                                           </div>
										  	 


                             
							               <div class="form-group">
                                         <label class="col-sm-2 col-sm-2 control-label"><h5>Note:</h5></label>
                                         <div class="col-sm-10">  
                                        <input type="text" class="form-control round-form" name ="note" value="Note:none" >
                                         <span class="help-block">Any notice related to event.This Filed is optional can be left empty</span><br>
                                        </div>
                                       

										   
		
									




										<div class="col-sm-offset-3">
										<input type="submit" class="btn btn-lg btn-info" name ="send" value="Send">
										<span class="col-md-offset-3">	<input type="reset" class="btn btn-lg btn-danger" name ="reset" value ="Clear"></span>
				
								
											

		                             </div>
                  
                                   
							  </form>
			                     </div>
					</div>
					<!-- col-lg-12--> 
             	
	
			<!-- /row -->
			</div>
			</div>
		</section>  
		<!--wrapper -->
	</section>   
	<!-- /MAIN CONTENT -->
	<!--main content end-->
   </section>

  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

      
  <?php
  include 'layout2.php';

  ?>
  
  </body>
</html>
