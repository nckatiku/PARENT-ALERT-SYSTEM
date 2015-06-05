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

   <script>
  $(document).ready(function() {
    $("#datepicker2").datepicker();
  });
  </script>

<<<<<<< HEAD
  
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
    <nav class ="navbar navbar-inverse navbar-default navbar-fixed-top role = "navigation">
       <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
      
      <!--logo start-->
=======
	<!--header start-->
		<nav class ="navbar navbar-inverse navbar-default navbar-fixed-top role = "navigation">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
			
			<!--logo start-->
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
            <a  class="logo"><b><div class ="color">Little Soldiers School</div></b></a>
            <!--logo end-->
            
            <div class="top-menu">
<<<<<<< HEAD
              <ul class="nav pull-right top-menu">
                   
              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
                            </button>               </ul>
            </div>
      </div>
      </nav>
=======
            	<ul class="nav pull-right top-menu">
                   
              <button class="btn btn-warning" type="button">
                          <a href="logout.php"><span style="color:white"> Logout <i class="glyphicon glyphicon-off"> </i></span></a>
                            </button>             	</ul>
            </div>
			</div>
			</nav>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986

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
<<<<<<< HEAD
       
          <li class="mt">
=======
			 
				  <li class="mt">
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                      <a href="userhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li class="sub-menu active">
                      <a href="usermain2.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Message</span>
                      </a>
                   </li>

            
<<<<<<< HEAD
        
           <li class="sub-menu active">
=======
			  
			     <li class="sub-menu active">
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                      <a href="usersimple.php" >
                          <i class="fa fa-dashboard"></i>
                          <span>Back to Compose</span>
                      </a>
                   </li>

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
      <div class="col-md-offset-1">
          <div class="col-lg-12">
          
                  <form class="form-horizontal style-form" action ="usermain2.php"  method="POST">
              
               <div style="margin-top:-3%; margin-left:2%">
          
              <div class="form-panel" style="background:rgb(179,223,247)">
                   
                 <div style="background:rgb(179,223,247)">
       <div style = "margin-top:-3%">

       <div><span style="color:rgb(70,70,70)"><div><h4><div class="centered" style="font-family:colona MT;padding:5px;background-color:rgb(85,85,85);color:white">Simple Message</div></h4></span></div>
=======
			</div>
		</aside>
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
				
			<div class="row mt">
			<div class="col-md-offset-1">
					<div class="col-lg-12">
					
					<form class="form-horizontal style-form" action ="usermain2.php"  method="POST">
					    
               <div style="margin-top:-3%; margin-left:2%">
					
              <div class="form-panel">
                   
							   <div style="background-color:rgb(179,223,247)">
       <div style ="margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%">

       <div><span style="color:rgb(70,70,70)"><div style="margin-left:1.5%"><h4>Simple Message</h4></span></div>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
             

        <?php

 
 
 
  

         
           

<<<<<<< HEAD
  if( isset($_POST['contact']) && isset($_POST['mes']) && isset($_POST['route']))
=======
  if( isset($_POST['contact']) && isset($_POST['mes']) )
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
     {
     

                      $contact = $_POST['contact'];
<<<<<<< HEAD

                       $rou = $_POST['route'];
                      if($rou == "Transactional")
                      {
                        $route = 4;
                      }
                      else
                      {
                        $route = 1;
                      }

      

                      $count_num = 0;

                      $cont_100 = null;
                      $cont_200 = null;
                      $cont_300 = null;
                      $cont_400 = null;

=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                      $m =   $_POST['mes'];
                      $date = " ";

                      $date2 = " ";

                      if(isset($_POST['when'])  && isset($_POST['when2']))
                      {

<<<<<<< HEAD
                            $date = $_POST['when'];

                           $date2 = $_POST['when2'];


                         if(!empty($_POST['when2']) && !empty($_POST['when2']))
                         {

                  

                          $mes = $m. " "."Date:".$date." "."to"." ".$date2;

                      
                       
                          }

                     else if($date2 == NULL)
                         {


                       $mes = $m. " "."Date:".$date;

                      
                
                      }



                 }
=======
                      $date = $_POST['when'];

                       $date2 = $_POST['when2'];

                       $mes = $m. " "."Date:".$date." "."to"." ".$date2;

                      
                      }

                      else if( isset($_POST['when'])  )
                      {

                      $date = $_POST['when'];

                     $mes = $m." "."Date:".$date;

                      
          
                      }

                       else

                       {

                        $mes = $m;
                       }

        
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
=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                    
                    }
            } 

<<<<<<< HEAD


                  if($count_num <= 100)
                  {  

                    echo "under 100";

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

              if( isset($_POST['contact']) && isset($_POST['mes']) && isset($_POST['route']))
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


    
            

    
            
        
          
        
            
         
            
      

           //   stop point        ... dfd
            
              
                if (isset($_POST['send'])) //to insert data in a table 
    {
          if(!empty($contact))   
        {     
               if( !empty($mes))
         
         {

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
        
        
    }
        
      
      
      
       

 
=======
    
            
           
            
  
            
      


              
                if (isset($_POST['send'])) //to insert data in a table 
    {
             
             
               
                    if(!empty($contact) && !empty($mes) )
          
    {
          
                         
             /* place ur api here and enjoy */
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
                           //echo "";
            
                          
                          echo $curlresponse;
              echo '<article class="col-md-offset-2 col-md-10"><div style="margin-top:-2%; font-size:18px; color:rgb(0,0,220)"><div class="centered">Message Sent Succesfully </div> </div> </article>' ;
                         

         } 
           

   }
        else
  {
 echo '<article class="col-md-offset-2 col-md-10"><div style="margin-top:-2%; font-size:15px "><div style="color:rgb(248,81,81)"><div class="centered">Warning::::Blank message or no contact numbers selected please  resend</div></div></div></article>';
        
  }
  
}
       

 }

 

>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
 
 
  
?>
</div>
<<<<<<< HEAD
              
                  <div class="form-group">
                      <div class="col-sm-3" style="margin-left:2%">
                        <label class="control-label">      <h4 class="centered">Contact Numbers<br><br>  
</h4></label>
                      </div>

                      <div class="col-sm-8">
                        <textarea class="form-control"  rows="5" name="contact" required><?php 



                        if(isset($_POST['classes']))
                        {

                                     $class = $_POST['classes'];

                                     $no_cls = NULL;
                          

                         if($class[0] == "All")


        {

                
            

                  $query= "SELECT * FROM  student_info WHERE `class` LIKE 'KG-II' OR `class` LIKE 'Playgroup' OR `class` LIKE 'Crech' OR `class` LIKE 'KG-I' OR `class` LIKE 'Nursery'";
=======
							<br>
									<div class="form-group">
											<div class="col-sm-3" style="margin-left:2%">
												<label class="label-control"><h4>Contact Numbers</h4></label>
											</div>
											<div class="col-sm-8">
												<textarea class="form-control"  rows="3" name="contact">
                        <?php 
													
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

<<<<<<< HEAD
                                    echo "$stud"."[".$class."]"."=>".$contact." ".",";
                                    
                                    $i=$i+1;
                      
                                  
=======
                                    echo "$stud"." "."[".$class."]"."=>".$contact." ".",";
                                    
                                    $i=$i+1;
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                                    }
                              }
              }

        } 

        else if($class != "All")

                              {  
<<<<<<< HEAD


                                   echo "Contacts::";
        
                         if(isset($_POST['classes']))
                       {
                                $class = $_POST['classes'];
     
                              $no_cls = count($class);
      
  
                   

                                                 if($no_cls == 1)
                                                 {
                                              
                              
    
                               

                            $query="SELECT `student`,`contact`,`class` from student_info  where class='".$class[0]."';";
=======
        
                          if(isset($_POST['class']))
                          {
                            $class=$_POST['class'];

                            $query="select `student`,`contact` from student where class='".$class."';";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                            
                            if(mysql_query($query)){
                              $query_run=mysql_query($query);
                              if(mysql_num_rows($query_run)==NULL){
                                echo 'no contacts found';
                              }
                              else{
                                $i=0;
<<<<<<< HEAD


                                      echo "Total Contacts Selected::";
                                      $num = mysql_num_rows($query_run);

                        

                                      echo $num;

                                      echo " "." ". " " . " ";
                      
=======
                                                       echo "Class Selected:".$class."\n"."All contacts::"." ";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
         
                                while($i<mysql_num_rows($query_run)){
                                    $contacts=mysql_result($query_run,$i,'contact');
                                     $student=mysql_result($query_run,$i,'student');
<<<<<<< HEAD
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

                                      echo $num;  $num++;

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
                    
                    <div class="form-group" style="margin-left:1%" >
                                            <label class="col-sm-3 col-sm-3 control-label"><h4 class="centered">Message</h4></label>
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
                                      <label class="col-sm-3 col-sm-3 control-label"><h4 class="centered">Route</h4></label>
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
                                            <label class="col-sm-3 control-label"><h4 class="centered">Date</h4></label>
                                        
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
                      <span class="col-md-offset-3">  <span  id="tot" style="margin-left:-120px;margin-bottom:5px;"> </span> <span class="col-md-offset-1"> <input type="reset" class="btn btn-lg btn-danger" name ="reset" value ="Clear"></span></span>
        
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
=======

                                    echo $student." "."=>".$contacts.", ";

                                    $i=$i+1;
                                }
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
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
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

    
<<<<<<< HEAD
  
  
  <script type="application/javascript">
=======
	
	
	<script type="application/javascript">
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
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
