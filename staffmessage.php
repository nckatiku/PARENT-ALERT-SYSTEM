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
<<<<<<< HEAD


=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
  
 <?php

    include 'layout.php';

   ?>
<<<<<<< HEAD
   <script type="text/javascript">
 
    function blnkm(){

    	var m = document.getElementById("area").value;

    	
    

    	if(m == " " or m == null)
    	{

         	document.write("ada");
   
   

       }

       else{

       	  	document.write("ada");

       
       }


    };

   </script>
=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
  

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

          <!--logo end-->

   
        </header>
    <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">			  <li class="mt">
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
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
<<<<<<< HEAD
						    <li ><a  href="classselect.php">Update Contact Number</a></li>
						        <li ><a  href="classselect2.php">Update Whole Contact</a></li>
=======
						    <li ><a  href="classselect.php">Update Contact</a></li>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
							   <li ><a  href="delete.php">Delete Contact</a></li>
							   
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a  href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Class Operations</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="updateclass.php">Update Whole Class</a></li>
						    <li ><a  href="getcontacts.php">Get All Contacts</a></li>
							   
							   <li ><a  href="delkgii.php">Delete Class KG-II</a></li>
                      </ul>
                  </li>
                

 
                  
                <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="li_user"></i>
                          <span>Staff</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="staffmessage.php">Message Staff</a></li>
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
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
			
				<div>
				<?php

 
 
 	

         
           

	if( isset($_POST['contact']) && isset($_POST['mes']))
 {
		 
                      $contact = $_POST['contact'];
                      $mes =   $_POST['mes'];
<<<<<<< HEAD
		

		        if(!empty($contact))
				
		{
=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
				

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

    
            
           
            
					  

					  
					 
					  
	
					  
			


              
<<<<<<< HEAD
        		     if(!empty($mes))
=======
                if (isset($_POST['send'])) //to insert data in a table 
 {
		        if(!empty($cont))
				
		{
				     if(!empty($mes))
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
		         
            {
                    
                         
						 /* place ur api here and enjoy */
<<<<<<< HEAD
						  $authKey = "4545AaVEvTlYRiW5569a313";

//Multiple mobiles numbers separated by comma
$mobileNumber = $cont;



//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "LILSOL";



//Your message to send, Add URL encoding here.

$message = urlencode($mes);

//Define route 
-$route = "4";
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
						 
echo '<div class="col-md-offset-2"><div class="alert alert-info"><div class="centered">Message Sent Succesfully to Staff Members </div></div></div>' ;
=======
						  $mobilenumbers =$cont;
                      $message = $mes;


					  
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
                          
                          
                          echo $curlresponse;
						 
						  echo '<div class="col-md-offset-2"><div class="alert alert-info"><div class="centered">Message Sent Succesfully to Staff Members </div></div></div>' ;
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                         

                    } 
		    

<<<<<<< HEAD
		    
=======
		    }
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
			else
			{
			  echo '<div class="col-md-offset-2"><div class="alert alert-danger"><div class="centered">Blank message cannot be send please resend</div></div></div>';
			}
			
		}	


		else
			{
			 echo '<div class="col-md-offset-2"><div class="alert alert-danger"><div class="centered">No staff Numbers Selected.</div></div></div>';
			}
			


		
		}
  

 
<<<<<<< HEAD
  
=======
  }
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
       

 
 
 
 	
?>
</div> 
			<div class="row mt" >
					<div class="col-sm-offset-2" >
					<div class="col-lg-12">
					
								<form  class="form-horizontal style-form" action ="staffmessage.php"  method="POST" >
						
									<div class="form-panel" >
		
               <div style ="padding:10px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1.2%"><h4><div class="col-md-offset-5"><span style="color:white">Message Staff</span></div></div></h4><br>
									
										
										<div class="form-group">
<<<<<<< HEAD
											<div class="col-sm-2">
												<label class="label-control"><h4>Staff Numbers</h4> </label>
											</div>
											<div class="col-md-10">
                                            
											  <textarea class="form-control"   rows="5" name="contact"><?php 
												$query="SELECT `teacher`, `contact` FROM `staff`";
=======
											<div class="col-sm-4">
												<label class="label-control"><h4>Staff Numbers</h4> </label>
											</div>
											<div class="col-md-8">
                                            
											  <textarea class="form-control"   rows="5" name="contact">
											  <?php 
												$query="SELECT `teacher`, `contact` FROM `staff` WHERE `status` = 'active'";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
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
<<<<<<< HEAD
																$take_stu = "\n"."All Teacher Contacts"."\n";
=======
																$take_stu = "\n"."All Teacher Contacts::"."\n";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
												
												
																while($i<mysql_num_rows($query_run))


																{
																		

																		$contact =mysql_result($query_run,$i,'contact');
																		
																		$teacher =mysql_result($query_run,$i,'teacher');


																		
																		$take_stu = $take_stu.$teacher."=>".$contact.",";
																		
												
																		$i++;
														
																}
															}
													
														}
													
                                           
                                                 echo $take_stu; 
<<<<<<< HEAD
=======



                      
 
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
													
													
													
													       
														        
							
													?>

													</textarea>
						
											</div>	
											</div> <br>
										
										
										
										
										
										<div class="form-group">
<<<<<<< HEAD
                                            <label class="col-sm-2 col-sm-2 control-label"><h4> Staff Mesage</h4></label>
                                             <div class="col-sm-7">
											
                                             <textarea id="area" class="form-control round-form"  name ="mes" rows ="5" required></textarea>
=======
                                            <label class="col-sm-4 col-sm-4 control-label"><h4> Staff Mesage</h4></label>
                                             <div class="col-sm-7">
											
                                             <textarea  class="form-control round-form"  name ="mes" rows ="5" required>  </textarea>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                                           <span class="help-block"><p class ="centered">Type your message here for your staff</p></span>
                                            
                                            
                                            </div>
                                           </div>
										   
										<br>

										   
										   
										  
<<<<<<< HEAD
										<div class="col-sm-offset-3"> <input type="submit" class="btn btn-lg btn-info" onmouseover="blnkm()" name ="send" value="Send to Staff">
        <span class="col-md-offset-5">  <input type="reset" class="btn btn-lg btn-danger" name ="Clear" value="Clear"> </span>
=======
										<div class="col-sm-offset-3">
											<input type="submit" class="btn btn-lg btn-info" name ="send" value="Send to Staff">
        <span class="col-md-offset-5"> <input type="reset" class="btn btn-lg btn-danger" name ="Clear" value="Clear"> </span>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
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
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>

    	
	<?php
  include 'layout2.php';

  ?>
  

  </body>
</html>
