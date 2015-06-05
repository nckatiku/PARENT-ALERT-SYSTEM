<?php

 require 'connect.php';

 session_start();

if(!$_SESSION['id'])
{
header("Location:login_lit.php");
}

<<<<<<< HEAD
  
  
 ?>
  
  
=======
	
	
 ?>
	
 	
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986

<!DOCTYPE html>
<html lang="en">
  <head>
<<<<<<< HEAD

=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
   <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
<<<<<<< HEAD


  

  
    <script>
      function countChar(val) {
        
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {


          $('#charNum').text(10+ len);
        }

      
      };

    
       </script>
           <script>
      function countChar2(val) {
        
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {

            var c = document.getElementById("field").value;

             var m = c.length + 10;


          $('#charNum').text(m+ len);
        }

      
      };

    
       </script>

           <script>
      function countChar3(val) {
        
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {

            var c = document.getElementById("field").value;

             var m = c.length;

             var j = document.getElementById("field1").value;

             var k = c.length;

              var a = document.getElementById("datepicker").value;

             var b = c.length + 10;

             var p = k + m + b;



          $('#charNum').text(p+ len);
        }

      
      };

    
       </script>


       <script type="text/javascript">

       function ct(){


        var c = document.getElementById("field").value;

        var m = c.length;

        var d = document.getElementById("field1").value;

        var n = d.length


        var a = document.getElementById("datepicker").value;

        var b = a.length;

        var k = document.getElementById("field2").value;

        var  l = k.length

        document.getElementById("tot").style.padding="10px";

         document.getElementById("tot").style.background="rgb(110,100,100)";

           document.getElementById("tot").style.color="rgb(250,250,250)";

           j = m + n + b + l + 10;

        document.getElementById("tot").innerHTML ="Message Contains"+" " +j+ " Words ";

        if(j > 160)
        {
          document.getElementById("tot").innerHTML ="Message Contains"+" " +j+ " Words" + ":-2 messages";

        }



       };

       </script>



=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
    
 <?php

    include 'layout.php';

   ?>
  

       </head>
<body>
<section id="container" >
<<<<<<< HEAD
  <!--header start-->
    <header class="row">
           
      
      <nav class ="navbar navbar-inverse navbar-default navbar-fixed-top role = "navigation">
       <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
      
      <!--logo start-->
=======
	<!--header start-->
		<header class="row">
           
			
			<nav class ="navbar navbar-inverse navbar-default navbar-fixed-top role = "navigation">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
			
			<!--logo start-->
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
              <a  class="logo"><b>Little Soldiers School</b></a>
            <!--logo end-->
            
            <div class="top-menu">
<<<<<<< HEAD
              <ul class="nav pull-right top-menu">
=======
            	<ul class="nav pull-right top-menu">
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986

              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
                            </button>
<<<<<<< HEAD
              </ul>
            </div>
      </div>
      </nav>

        </header>
    
=======
            	</ul>
            </div>
			</div>
			</nav>

        </header>
		
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
    <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
<<<<<<< HEAD
           
          <li >
=======
			     
				  <li >
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span> Home</span>
                      </a>
                  </li>
                  <li class="sub-menu active">
<<<<<<< HEAD
                      <a href="main.php" >
=======
                      <a href="usermain.php" >
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                          <i class="fa fa-tasks"></i>
                          <span>Message</span>
                      </a>
                   </li>
<<<<<<< HEAD
           
              <li class="sub-menu active">
=======
				   
				      <li class="sub-menu active">
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                      <a href="mycompose2.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Back To Compose</span>
                      </a>
                   </li>



         
           </ul>   


              </ul>
              <!-- sidebar menu end-->
<<<<<<< HEAD
      </div>
    </aside>
      <!--sidebar end-->  
  <!-- BASIC FORM ELELEMNTS -->
  <section id="main-content">
    <section class="wrapper">
      
        
      <div class="row mt">
    
             
               <div class="col-md-offfset-4">
          <div class="col-lg-12">
          
                    
                <form class="form-horizontal style-form" action ="usermain.php"  method="POST">
                  
                                       
                       
                       <div class="row login_box">
                       
                                       
                                      <div class="col-md-12" align="left">
                         <div class="mfont"><div class="text-left"><br><span style="color:white;padding:15px;background-color:rgb(150,150,150);border-top-left-radius: 30px;
border-bottom-right-radius: 30px;

}
">Event Message</span>  <span class="col-md-offset-5" style="font-size:15px;padding:8px;background-color:rgb(237,97,94);border-top-right-radius: 10px;

border-bottom-left-radius: 20px;">Note:Message Must be of 160 characters only </h4></span>    <br> <br> Wordcount :: <div class="btn btn-warning" id="charNum"> </div>
                  
                              
=======
			</div>
		</aside>
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
			
				
			<div class="row mt">
		
		         
				       <div class="col-md-offfset-4">
					<div class="col-lg-12">
					          
								<form class="form-horizontal style-form" action ="usermain.php"  method="POST">
									
                                       
										   
										   <div class="row login_box">
										   
	                                     
		                                  <div class="col-md-12" align="left">
                                    <div class="mfont"><div class="text-left"><br>Event Message <br>
									
			                        
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                                         <?php

 
 
<<<<<<< HEAD
  
=======
 	
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986

         
           

<<<<<<< HEAD
  if( isset($_POST['contact']) && isset($_POST['what']) && isset($_POST['when']) && isset($_POST['where']) && isset($_POST['note']) && isset($_POST['route']))
     {

            if(!empty($_POST['contact']))

            {
                 $rou = $_POST['route'];
                      if($rou == "Transactional")
                      {
                        $route = 4;
                      }
                      else
                      {
                        $route = 1;
                      }

            

     
            $contact = $_POST['contact'];
            $what  =   $_POST['what'];
            $when   =   $_POST['when'];
            $where   =   $_POST['where'];
            $note =   $_POST['note'];

                      $count_num = 0;

                      $cont_100 = null;
                      $cont_200 = null;
                      $cont_300 = null;
                      $cont_400 = null;


           $count_numbers = NULL;
=======
	if( isset($_POST['contact']) && isset($_POST['what']) && isset($_POST['when']) && isset($_POST['where']) && isset($_POST['note']))
     {
		 
            $contact = $_POST['contact'];
            $what  =   $_POST['what'];
					  $when   =   $_POST['when'];
            $where   =   $_POST['where'];
					  $note =   $_POST['note'];

           
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
<<<<<<< HEAD

                   $count_num = $count_num + 1;

                    
                    }
            }

              if($count_num <= 100)
                  {  

          

                    $cont_100 = substr($cont, 0);



                  
                 
                  }

                  else if($count_num > 100 )
            {


                  if($count_num > 100 && $count_num <= 200)

                   {  
                   
                     $cont_100 = substr($cont, 0 , 1100);

                    $cont_200 = substr($cont, 1092); 

                  }


                  else if($count_num > 200 && $count_num <= 300) 

                   {  
                   
              

                     $cont_100 = substr($cont, 0 , 1100);

                    $cont_200 = substr($cont, 1092); 

                    $cont_300 = substr($cont, 2124);
     

                     }
 

              }

 if( isset($_POST['contact']) && isset($_POST['what']) && isset($_POST['when']) && isset($_POST['where']) && isset($_POST['note']) && isset($_POST['route']))
                   {
                       
                       if(!empty($contact))
                      
                      {

                        $cur_mon = NULL;

                        $cur_mon = date("m");

                    

                          $mon = " ";
                            
                            
                         if($cur_mon > 0)

                         {

                        
                          $v = 0;

                          if($cur_mon == 01)
                            
                            {
                              $mon = "msg_jan";

                            }
                             else if($cur_mon == 02)
                            
                            {
                              $mon = "msg_feb";

                            }

                            else if($cur_mon == 03)
                            
                            {
                              $mon = "msg_mar";

                            }
                           
                            else if($cur_mon == 04)
                            
                            {
                              $mon = "msg_apr";

                            }


                           else if($cur_mon == 05)
                            
                            {
                              $mon = "msg_may";

                            }


                             else if($cur_mon == 06)
                            
                            {
                              $mon = "msg_jun";

                            }


                            else if($cur_mon == 07)
                            
                            {
                              $mon = "msg_jul";

                            }

                            else if($cur_mon == 08)
                            
                            {
                              $mon = "msg_aug";

                            }

                            else if($cur_mon == 09)
                            
                            {
                              $mon = "msg_sep";

                            }


                            else if($cur_mon == 10)
                            
                            {
                              $mon = "msg_oct";

                            }

                            else if($cur_mon == 11)
                            
                            {
                              $mon = "msg_nov";

                            }

                            else if($cur_mon == 12)
                            
                            {
                              $mon = "msg_dec";

                            }


                            $get_query = "SELECT $mon FROM `msg_count`";

                            $get_run = mysql_query($get_query);

                         

                            $count_value = mysql_result($get_run,$v,$mon);

                            $update_count = "UPDATE `msg_count` SET $mon = $count_num + $count_value WHERE $mon = $count_value"; 

                            $update_run = mysql_query($update_count);

                            if(mysql_query($update_run))
                            {
                              echo " ";
                            }

                            else{
                                    echo " ";}

                            }

                          }

                      }
    
            
          
                  
                
            
          
            

           $full_message =" "." ".$what." "."Date:".$when." "." ".$where." "." ".$note;
            
                        
            
      
=======
                    
                    }
            } 

            


					  
		
					  
					  $full_message =" "." ".$what." "."Date:".$when." "." ".$where." "." ".$note;
					  
	                      
					  
			
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986


              
                if (isset($_POST['send'])) //to insert data in a table 
<<<<<<< HEAD
    {
          if(!empty($contact))   
        {     
               if(!empty($contact) && !empty($what) && !empty( $when) && !empty($where))
         
         {
               
                    if($what !="Dear Parents:")
                    {  
             /* place ur api here and enjoy */

              $count = 0;
               
             /* place ur api here and enjoy */
             $times = 0;

             if($count_num <= 100)
             {

              $times = 1;

             }


             else if($count_num <= 200)
             {

              $times = 2;

             }


             else if($count_num <= 300)
             {

              $times = 3;

             }

              for($i=1; $i<=$times; $i++)
             {

        

        
                   $mobileNumber = NULL;
                   $authKey = "4545AaVEvTlYRiW5569a313";


//Multiple mobiles numbers separated by comma

   if($i == 1)
   {                
$mobileNumber = $cont_100;

echo "First";



  }

  

 if($i == 2)
   {                
$mobileNumber = $cont_200;

echo "second";

  }
 if($i == 3)
   {                
$mobileNumber = $cont_300;
echo "third";



  }

  echo $mobileNumber;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "LILSOL";

//Your message to send, Add URL encoding here.
$message = urlencode($full_message);




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



             



  
            
              echo '<article class="col-md-offset-2 col-md-5"><div style="margin-top:-16%; font-size:15px;color:rgb(0,0,220)"><div class="centered"><h4>Message Sent Succesfully</h4> </div></div></article>' ;
                  
           


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

       else

    {

      echo '<article class="col-md-offset-2 col-md-10"><div style="margin-top:-7%; font-size:15px;color:rgb(248,98,98)"><div class="centered"><h4>Warning::No contact Number selected.Please Select Contacts</h4></div></div> </article>' ;
                   


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
                       <textarea class="form-control"  rows="5" name="contact" required><?php 



                        if(isset($_POST['classes']))
                        {

                                     $class = $_POST['classes'];

                                     $no_cls = NULL;
                          

                          if($class[0] == "All")


        {

                
            


                  $query= "SELECT * FROM  student_info WHERE `class` LIKE 'KG-II' OR `class` LIKE 'Playgroup' OR `class` LIKE 'Crech' OR `class` LIKE 'KG-I' OR `class` LIKE 'Nursery'";
                                       
=======
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
                         
                         

         if($class == "All")

        {
                            echo "Selected"." ".$class." "."Classes"."\n";
            

                  $query= "SELECT * FROM  student ORDER BY `class`";
                           
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
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
<<<<<<< HEAD


                      echo "Selected"." ".$class[0]." "."Classes"." "." "; echo "Total Contacts Selected::";
                                      $num = mysql_num_rows($query_run);

                                

                                      echo $num."\n";

=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                                while($i<mysql_num_rows($query_run))
                                    {
                                    $contact =mysql_result($query_run,$i,'contact');

                                    $class = mysql_result($query_run,$i,'class');

                                    $stud =mysql_result($query_run,$i,'student');

                                    echo "$stud"."[".$class."]"."=>".$contact." ".",";
                                    
                                    $i=$i+1;
<<<<<<< HEAD
                      
                                  
=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                                    }
                              }
              }

<<<<<<< HEAD
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
                                              
                              
    
                               

                            $query="SELECT `student`,`contact`,`class` from student_info  where class='".$class[0]."';";
                            
                            if(mysql_query($query)){
                              $query_run=mysql_query($query);
                              if(mysql_num_rows($query_run)==NULL){
                                echo 'no contacts found';
                              }
                              else{
                                $i=0;


                                      echo "Total Contacts Selected::";
                                      $num = mysql_num_rows($query_run);

                                  

                                      echo $num;

                                      echo " "." ". " " . " ";
                      
         
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
                                              
                              
    

                            $query="select `student`,`contact`,`class` from student_info  where class='$m' OR class = '$n'";
                            
                            if(mysql_query($query)){
                              $query_run=mysql_query($query);
                              if(mysql_num_rows($query_run)==NULL){
                                echo 'no contacts found';
                              }
                              else{
                                $i=0;

                                  
                                      echo "Total Contacts Selected::";
                                      $num = mysql_num_rows($query_run);

                              

                                      echo $num;

                                      echo " "." ". " " . " ";
                      
         
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
                                              
                              
    

                            $query="select `student`,`contact`,`class` from student_info where class='$m' OR class = '$n' OR class='$o'";
                            
                            if(mysql_query($query)){
                              $query_run=mysql_query($query);
                              if(mysql_num_rows($query_run)==NULL){
                                echo 'no contacts found';
                              }
                              else{
                                $i=0;


                      
                                    
                                      echo "Total Contacts Selected::";
                                      $num = mysql_num_rows($query_run);

                                      $num++;

                        

                                      echo " "." ". " " . " ";

                                      echo " "." ". " " . " ";
         
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
                                              
                              
    

                            $query="select `student`,`contact`,`class` from student_info where class='$m' OR class = '$n' OR class='$o' or class='$p'";
                            
                            if(mysql_query($query)){

                              $query_run=mysql_query($query);

                              if(mysql_num_rows($query_run)==NULL){
                                echo 'no contacts found';
                              }
                              else{
                                $i=0;
                                 echo "Total Contacts Selected::";
                                      $num = mysql_num_rows($query_run);

                                      $num++;

                                

                                      echo " "." ". " " . " ";

                                    
         


                      
         
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


                     <div class="form-group">
                                            <label class="col-sm-1 col-sm-1 control-label"><h5>Route</h5></label>

                      <article class="col-sm-3 col-md-offset-1">

                  
                          <select name="route" class="form-control round-form">
                                       
                                        <option>Transactional</option>
                                         <option >Promotional</option>
                               
            
                                        
                                             </select>

                  
                   
                            
                      </article>  

                                                                                  
                                           </div>

                                        
                       
                       
                                                            <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"><h5>What</h5></label>
                                             <div class="col-sm-10">
                                             <input id="field"  onkeyup="countChar(this)" type="text" class="form-control round-form"  name ="what" rows = "2" value ="Dear Parents:">
                                               
                                           <span class="help-block">What is the event</span>
                                            </div>
                                           </div>
                       
                        <div class="form-group">
                                           <label class="col-sm-2 col-sm-2 control-label"><h5>Where</h5></label>
                                         <div class="col-sm-10">
                   <input type="text"  id="field1" onkeyup="countChar2(this)" class="form-control round-form" name ="where" value="Venue:Little Soldiers campus" />
                                         
                                         <span class="help-block">Venue/place of the event</span>
                                          </div>
                                             </div>
                      
                      <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"><h5>When</h5></label>
                                          <div class="col-sm-3">
                                          <input type="text" name ="when" id="datepicker"   class="form-control round-form" required/>
                                    
                                             <span class="help-block">Date of the event</span>
                                              
                                               </div>
                                           </div>

                         


                             
                             <div class="form-group">
                                         <label class="col-sm-2 col-sm-2 control-label"><h5>Note:</h5></label>
                                         <div class="col-sm-10">  
             <input id="field2" onkeyup="countChar3(this)" type="text"  class="form-control round-form" name ="note" value="Note:none" >
                                         <span class="help-block">Any notice related to event.This Filed is optional can be left empty</span><br>
                                    
                                         
                                        </div>
                                       

                       
    
                  

           


                    <div class="col-sm-offset-3">
                    <input type="submit" class="btn btn-lg btn-info" name ="send" value="Send" onmouseover="ct()">
                    <span class="col-md-offset-3">    <span  id="tot" style="margin-left:-120px;margin-bottom:5px;"> </span>  <span class="col-md-offset-3"><input type="reset" class="btn btn-lg btn-danger" name ="reset" value ="Clear"></span></span>
           

                
                      

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
=======
        }
            
              else if($class != "ALL")
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

                                                          
                                   echo "Class Selected=>".$class."\n"."All Contacts::";
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
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
   </section>

  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

      
  <?php
  include 'layout2.php';

  ?>
<<<<<<< HEAD
 
=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
  
  </body>
</html>
