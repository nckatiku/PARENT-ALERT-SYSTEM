<?php
include 'connect.php';	

include 'mygraph.php';		

session_start();

if(!$_SESSION['id'])
{
header("Location:index.php");
}
  include 'layout.php';
?> 	

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /

    <title>Admin Panel-Little Soldiers School</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet"> 

    <!-- Morris Charts CSS -->
    

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    

<!DOCTYPE HTML>
<html>

<head>


  <script type="text/javascript">
  window.onload = function x() {

    

  
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme3",
      title:{
        text: "Messages - per month"
      },
      animationEnabled: true,
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
        
      },
      axisY:{
        includeZero: false
        
      },
      data: [
      {        
        type: "column",
        //lineThickness: 3,        
        dataPoints: [
        { x: new Date(2012, 00, 1), y: <?php echo $_SESSION['jan']; ?> },
        { x: new Date(2012, 01, 1), y: <?php echo $_SESSION['feb']; ?> },
        { x: new Date(2012, 02, 1), y: <?php echo $_SESSION['mar']; ?>},
        { x: new Date(2012, 03, 1), y: <?php echo $_SESSION['apr']; ?>},
        { x: new Date(2012, 04, 1), y: <?php echo $_SESSION['may']; ?> },
        { x: new Date(2012, 05, 1), y: <?php echo $_SESSION['jun']; ?> },
        { x: new Date(2012, 06, 1), y: <?php echo $_SESSION['jul']; ?> },
        { x: new Date(2012, 07, 1), y: <?php echo $_SESSION['aug']; ?> },
        { x: new Date(2012, 08, 1), y: <?php echo $_SESSION['sep']; ?> },
        { x: new Date(2012, 09, 1), y: <?php echo $_SESSION['oct']; ?> },
        { x: new Date(2012, 10, 1), y: <?php echo $_SESSION['nov']; ?> },
        { x: new Date(2012, 11, 1), y: <?php echo $_SESSION['dec']; ?> }
        
        ]
      }
      
      
      ]
    });

chart.render();
}
</script>
<script type="text/javascript" src="canvasjs.min.js"></script>




  
<script type="text/javascript">
    
    function newev()

    {

        document.getElementById("b").style.visibility = "visible";
        document.getElementById("b").style.height = "50px";
        document.getElementById("b").style.width = "100%";
        return true;
    }
</script>

<script type="text/javascript">
    
    function newev2()

    {

        document.getElementById("b").style.visibility = "hidden";
          document.getElementById("b").style.height = "1px";
        document.getElementById("b").style.width = "100%";
        return true;
    }
</script>

<script type="text/javascript">
    
    function view_form()

    {

        document.getElementById("form_vs").style.visibility = "visible";
      
        return true;
    }
</script>

<script type="text/javascript">
    
    function hide_form()

    {

        document.getElementById("form_vs").style.visibility = "hidden";
         
        return true;
    }
</script>



</head>

<body>

    <div id="wrapper">
  <header class="row">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <br>
                <div style="font-size:23px;color:rgb(255,255,255)"><b>LIITLE SOLDIERS SCHOOL</b></div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            
                <li class="dropdown">
                    <a  href="index.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <!-- /.navbar-collapse -->
        </nav>
</header>

<aside>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                <br>
                    <li class="active">
                  <a href="adminpage.php" class="active" style="color:rgb(22,200,210)"> <i class="li li_user"></i> Admin Page</a>
                
                    </li>


                    <li>
                        <a href="myhome.php" style="color:rgb(22,200,210)"><i class="glyphicon glyphicon-home"> </i> Home</a>
                    </li>
                   
                    <li>
                        <a href="report.php" style="color:rgb(22,200,210)"><i class="glyphicon glyphicon-home"> </i> Deleivery Report</a>
                    </li>
                   
                
                    
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
</aside>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><br>
                            Parent Alert Syestem <small>Admin Panel</small><br>
                             
                        </h1>


                         <div class="row">


    <div class="centered"><h3 style="color:rgb(110,110,110);">Monthly Analysis of Messages transactions </h3> <br></div>

        
   

   </div>


   

    <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
  

               

      



  
  </div>



          <hr>

          </div>
          <div class="row">
                  <div class="centered"> <h3 style="color:rgb(110,110,110);"> Message Count </h3> <br> </div>
                
                    <div class="centered"> <h4 style="color:rgb(110,110,110);">Transactional Message Count </h4> <br> </div>

                       <div class="col-sm-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="panel-title">Total Message Credits</div>
                            </div>

  

                            <div class="panel-body">
                                30,000
                            </div>
                        </div>
                    </div>
                          
                       <div class="col-sm-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Message Credits Left</h3>
                            </div>
                            <div class="panel-body">
                     
                       <?php

include 'connect.php';


$q = "SELECT  `aki` FROM `texas` WHERE `sno` = 1";

$rn = mysql_query($q);

$val = mysql_result($rn, 0,'aki');



$otp = "$val";
$route = 4;
//Prepare you post parameters
$postData = array(
    'authkey' => $otp,
    'type' => $route,
    
);

//API URL
$url="http://sms.bulk24sms.com/api/balance.php";

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

$_SESSION['count'] = $output;


?>

                            </div>
                        </div>
                    </div>
                            <div class="col-sm-4">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title">Messages Sent</h3>
                            </div>
                            <div class="panel-body">
                     <?php $c = 30000; echo $c - $_SESSION['count']; ?>
                            </div>
                        </div>
                    </div>
        
        
                 

                 </div>

                 
                 <div class="row">
                    <div class="centered"> <h4 style="color:rgb(110,110,110);">Promotional Message Count </h4> <br> </div>

                       <div class="col-sm-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="panel-title">Total Message Credits</div>
                            </div>

  

                            <div class="panel-body">
                                10,000
                            </div>
                        </div>
                    </div>
        
                       <div class="col-sm-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Message Credits Left</h3>
                            </div>
                            <div class="panel-body">
                     
                       <?php

include 'connect.php';


$q = "SELECT  `aki` FROM `texas` WHERE `sno` = 1";

$rn = mysql_query($q);

$val = mysql_result($rn, 0,'aki');



$otp = "$val";
$route = 1;
//Prepare you post parameters
$postData = array(
    'authkey' => $otp,
    'type' => $route,
    
);

//API URL
$url="http://sms.bulk24sms.com/api/balance.php";

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

$_SESSION['count2'] = $output;


?>

                            </div>
                        </div>
                    </div>
                    
                                              <div class="col-sm-4">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title">Messages Sent</h3>
                            </div>
                            <div class="panel-body">
                     <?php $c = 10000; echo $c - $_SESSION['count2']; ?>
                            </div>
                        </div>
                    </div>
         </div>
        
                     <br><br>

                        
               
                    
                   
                  <div class="centered"> <h3 style="color:rgb(110,110,110);">Number Of Students </h3><br> </div>
                
                  <div class="row">
             
                    
                    <div class="col-md-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> 
                                       <div>
                                        <?php
                                        include 'connect.php';

                                        $query= "SELECT * FROM  student_info where `class` = 'playgroup'";
                           
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);

                               echo mysql_num_rows($query_run);

                              
              }

          ?>
          </div>
</div>

                                        <div>PLAYGROUP</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                                        <div class="col-md-2">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">                                    <div>
                                        <?php

                                        require 'connect.php';

                                        $query= "SELECT * FROM  student_info where `class` = 'crech'";
                           
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);

                               echo mysql_num_rows($query_run);

                              
              }

          ?>
          </div></div>
                                        <div>CRECH</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    

                

                    <div class="col-md-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">                                    <div>
                                        <?php

                                        include 'connect.php';

                                        $query= "SELECT * FROM  student_info where `class` = 'Nursery'";
                           
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);

                               echo mysql_num_rows($query_run);

                              
              }

          ?>
          </div></div>
                                        <div>NURSERY</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    


                    <div class="col-md-2">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">                                    <div>
                                        <?php

                                        include 'connect.php';

                                        $query= "SELECT * FROM  student_info where `class` = 'KG-I'";
                           
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);

                               echo mysql_num_rows($query_run);

                              
              }

          ?>
          </div></div>
                                        <div>KG-I</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">                                    <div>
                                        <?php

                                        require 'connect.php';

                                        $query= "SELECT * FROM  student_info where `class` = 'KG-II'";
                           
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);

                               echo mysql_num_rows($query_run);

                              
              }

          ?>
          </div></div>
                                        <div>KG-II</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                   
                    <div class="col-md-2">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><div>
                                        <?php

                                        $query= "SELECT * FROM  student_info WHERE class != 'Alumini'";
                           
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);

                               echo mysql_num_rows($query_run);

                              
              }

          ?>
          </div></div>
                                        <div>TOTAL STUDENTS</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                 

                </div>

                          



          <hr>
             <div class="row">

   <div class="centered"><h3 style="color:rgb(110,110,110)">Yearly Events And Holidays </h3> <br></div>
            
           <div class="col-sm-3">
                        <div class="list-group">
              
                            <p href="#" class="list-group-item active">Social</p>           

                            <?php

                        $query="SELECT * FROM `events` WHERE `type` = 'social'";
    
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);
                             
                              if(mysql_num_rows($query_run)==NULL)
                             {
                                 echo '<div class="list-group-item">No events found</div>';
                              }
                              else
                              {
                                $i=0;

                                   while($i<mysql_num_rows($query_run))
                                    {
                                    $name  = mysql_result($query_run,$i,'name');
                                    $date  = mysql_result($query_run,$i,'date');

                             echo "<div class='list-group-item'> $name:--:$date</div>";
                                    $i=$i+1;
                                    }
                              }
              } ?>
                            

                        

                           
                             
                       
                            
                        </div>
                    </div>
                   

                         <div class="col-sm-3">
                        <div class="list-group">
                            <p class="list-group-item active">Cultural</p>
                            
                          <?php

                        $query="SELECT * FROM `events` WHERE `type` = 'cultural'";
    
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);
                             
                              if(mysql_num_rows($query_run)==NULL)
                             {
                                 echo '<div class="list-group-item">No events found</div>';
                              }
                              else
                              {
                                $i=0;

                                   while($i<mysql_num_rows($query_run))
                                    {
                                    $name  = mysql_result($query_run,$i,'name');
                                    $date  = mysql_result($query_run,$i,'date');

                             echo "<div class='list-group-item'> $name:--:$date</div>";
                                    $i=$i+1;
                                    }
                              }
              } ?>
                            

                        
                     </div>
                    </div>
                   


                         <div class="col-sm-3">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">National</a>
                                                     <?php

                                      

                        $query="SELECT `name`,`date` FROM `events` WHERE `type` = 'national'";
    
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);
                             
                              if(mysql_num_rows($query_run)==NULL)
                             {
                                echo '<div class="list-group-item">No events found</div>';
                              }
                              else
                              {
                                $i=0;

                                   while($i<mysql_num_rows($query_run))
                                    {
                                    $name  = mysql_result($query_run,$i,'name');
                                    $date  = mysql_result($query_run,$i,'date');

                             echo "<div class='list-group-item'> $name:--:$date</div>";
                                    $i=$i+1;
                                    }
                              }
              } ?>
                            

                        </div>
                    </div>
                   
                        <div class="col-sm-3">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">Personal</a>
                       
                           
                            <?php



                        $query="SELECT * FROM `events` WHERE `type` = 'personal'";
    
                            if(mysql_query($query))
             {
                              $query_run=mysql_query($query);
                             
                              if(mysql_num_rows($query_run)==NULL)
                             {
                                 echo '<div class="list-group-item">No events found</div>';
                              }
                              else
                              {
                                $i=0;

                                   while($i<mysql_num_rows($query_run))
                                    {
                                    $name  = mysql_result($query_run,$i,'name');
                                    $date  = mysql_result($query_run,$i,'date');

                             echo "<div class='list-group-item'> $name:--:$date</div>";
                                    $i=$i+1;
                                    }
                              }
              } ?>
                            

                        
                        </div>
                    </div> 



             </div>

             </div>


              <div id ="a"   onclick="newev()" ondblclick="newev2()" class="btn btn-success">Add  An  Event </div><br><br>

             <?php
             include 'connect.php';




             if(isset($_POST['type'])&& isset($_POST['name']) && isset($_POST['date'])) 

            {
                   

              $type = $_POST['type'];

              $name = $_POST['name'];

              $date = $_POST['date'];

          

              if(!empty($type) && !empty($name) && !empty($date))
    {


                $chk = "SELECT * FROM `events` WHERE `type` = '$type' AND `name` = '$name'";

                if($chk_qr = mysql_query($chk))
                {
                  $num = mysql_num_rows($chk_qr);
                }


                  if($num == 0)
        {

                if(isset($_POST['insert']))
                 {   


                $qu = "INSERT INTO events(`id`,`name`,`type`,`date`) values('','$name','$type','$date')";

            

                if($qu_run = mysql_query($qu))
                {
                  echo "Event added";
                }

                else
                {
                  echo "error";
                }
    
    }

    }
              

              
            

            }
          }
?>



                 <div id="b" style="visibility:hidden;height:1px;"> <form method ="POST" action ="adminpage.php" class="form form-horizontal style-from" style="background-color:rgb(91,130,181)">

                                    <br>
                                     <div class="form-group">
                            
                                                <label class="col-sm-1 col-sm-1 control-label"> Type </label>
                                    
                                            <div class="col-md-2">

                                    
                                                <select  name="type" class="form-control style-form">
                                              <option >  Choose</option>

                                         <option>  Social</option>

                                        <option>Cultural</option>
                                         <option>National</option>
                          
                                                <option>Personal</option>
                                       
                                        
                                             </select>

                         </select>
                                        
                            
                        </div>  

             <div class="form-group">
                                 <label class="col-sm-1 col-sm-1 control-label">Name</label>
                                   <div class="col-md-3">
                                        <input type="text" class="form-control round-form" name = "name" required>

                                         
                                    </div>
                                    <div class="form-group">
                                            <label class="col-sm-1 col-sm-1 control-label">Date</label>
                                          <div class="col-md-2">
                                    <input name ="date" id="datepicker"   class="form-control round-form" required/>
                    
                                        
                                               </div>
                                               <div class="col-sm-1">
                                        <input type="submit" class="btn" name = "insert" value="Add">
                                    

                                        </div>
                                         
            
                                           </div>


                                        </div>

                                  


                            </div>



                                          
                                         

                                          </form>    </div>

                



                <br><br><br> <br>
                   
                 

                 </div>

       <?php
             include 'connect.php';


             if(isset($_POST['cn'])&& isset($_POST['cp']) && isset($_POST['nn']) && isset($_POST['np'])) 

            {
                   

              $cn = $_POST['cn'];

              $cp = $_POST['cp'];

            

              $nn = $_POST['nn'];

              $nk = $_POST['np'];

              $np = md5($nk);

          

             if(!empty($cn) && !empty($cp) && !empty($nn)&&!empty($np))
              {

                $q = "SELECT FROM `admin` WHERE `id` = '$cn' AND `password` = '$cp'";
                
                $q_rn = mysql_query($q);
                
                $num = mysql_num_rows($q_rn);
                
                if($num == 1)
                
                {
       
            
               $qut = "UPDATE `admin` SET `id`='$nn',`password`='$np' WHERE `id` = '$cn' AND `password` = '$cp'";

               $qut_run = mysql_query($qut);
            

                if($qut_run = mysql_query($qut))
                {
                  echo '<div style="color:green;font-size:18px;"><b>Sub-user name and password changed successfully</b></div>';
                   echo '<div style="color:green;font-size:18px;"><b>New Subuser Name:: '.$nn.' '.' '.' '.' &&'.' '.' '.'New Subuser Password:: '.$np.'</b></div>';
                }

                else if(!$qut_run = mysql_query($qut))
                {
     echo '<div style="color:red;font-size:18px;"><b>Sub-user name and password chnges Unsuccessful</b></div>';


    
                }
              

            }

            else{

                 echo '<div style="color:red;font-size:18px;"><b>Sub-user name and password chnges Unsuccessful</b></div>';

            }
            
          
      }
      
                             echo '<div style="color:red;font-size:18px;"><b>Currrent Sub-user name or password doesnt match</b></div>';


      
      }
      


            
            ?> 



    

                  <div class="centered" style="padding:5px;background-color:rgb(91,130,181);"><h4>Change Sub-User</h4> </div>



                 <div id="form_vs"  style="background-color:rgb(200,200,200)"> <form method ="POST" action ="adminpage.php" class="form form-horizontal style-from" >

                                    <br>
                                   

                                    <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Current Sub-user Name</label>
                                          <div class="col-md-3">
                                    <input name ="cn" id="datepicker"   class="form-control round-form" value="">
                    
                                        
                                               </div>

                                                        <label class="col-sm-3 col-sm-3 control-label">Current Sub-user Password</label>
                                          <div class="col-md-3">
                                    <input name ="cp"   class="form-control" value=" ">
                    
                                        
                                               </div>


                                   
                                   


                                        </div>

                              <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">New    Sub-user Name</label>
                                          <div class="col-md-3">
                                    <input name ="nn"   class="form-control" required/>
                    
                                        
                                               </div>

                                                <label class="col-sm-3 col-sm-3 control-label">New     Sub-user Password</label>
                                          <div class="col-md-3">
                                    <input name ="np"   class="form-control" required/>

                                               </div>


                                        </div>

                                        
                                    <div class="centered">

                                               <input name ="Change" value="Change Sub-user" type="submit"  class="btn">

                                  
                                 </div>
                                        

                                  




                                          
                                         

                                          </form>    </div>

                




                  
                   

  </div>

            


                   
                <!-- /.row -->

               
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Booptstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


  

    <!-- Morris Charts JavaScript -->
  </body>

</html>