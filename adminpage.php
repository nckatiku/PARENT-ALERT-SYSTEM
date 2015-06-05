

    <?php

    include 'layout.php';



<<<<<<< HEAD
 include  'connect.php';

 session_start();


=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986

   ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

<<<<<<< HEAD
    

  
=======
    var lo = 122;

>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
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
<<<<<<< HEAD
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
=======
        { x: new Date(2012, 00, 1), y: lo },
        { x: new Date(2012, 01, 1), y: 414},
        { x: new Date(2012, 02, 1), y: 520},
        { x: new Date(2012, 03, 1), y: 460 },
        { x: new Date(2012, 04, 1), y: 450 },
        { x: new Date(2012, 05, 1), y: 500 },
        { x: new Date(2012, 06, 1), y: 480 },
        { x: new Date(2012, 07, 1), y: 480 },
        { x: new Date(2012, 08, 1), y: 410 },
        { x: new Date(2012, 09, 1), y: 500 },
        { x: new Date(2012, 10, 1), y: 480 },
        { x: new Date(2012, 11, 1), y: 510 }
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
        
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

<<<<<<< HEAD
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


=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986

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
<<<<<<< HEAD
                <div style="font-size:23px;color:rgb(255,255,255)"><b>LIITLE SOLDIERS SCHOOL</b></div>
=======
                <div style="font-size:23px;color:#fff"><b>LIITLE SOLDIERS SCHOOL</b></div>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            
                <li class="dropdown">
                    <a  href="login_lit.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                    
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
<<<<<<< HEAD
                  <a href="adminpage.php" class="active" style="color:rgb(22,200,210)"> <i class="li li_user"></i> Admin Page</a>
=======
                  <a href="adminpage.php" class="active"> <i class="fa  fa-dashboard"></i> Admin Page</a>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                
                    </li>


                    <li>
<<<<<<< HEAD
                        <a href="myhome.php" style="color:rgb(22,200,210)"><i class="glyphicon glyphicon-home"> </i> Home</a>
                    </li>
                   
                
                    
                   
=======
                        <a href="myhome.php"><i class="fa fa-fw fa-tasks"></i>Back To home</a>
                    </li>
                   
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                   
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
  
               


</form>        

  
  </div>

          <hr>

          </div>
                     

                          
                   
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

<<<<<<< HEAD
                                        $query= "SELECT * FROM  student_info where `class` = 'playgroup'";
=======
                                        $query= "SELECT * FROM  student where `class` = 'playgroup'";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                           
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

<<<<<<< HEAD
                                        $query= "SELECT * FROM  student_info where `class` = 'crech'";
=======
                                        $query= "SELECT * FROM  student where `class` = 'crech'";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                           
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

<<<<<<< HEAD
                                        $query= "SELECT * FROM  student_info where `class` = 'Nursery'";
=======
                                        $query= "SELECT * FROM  student where `class` = 'Nursery'";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                           
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

<<<<<<< HEAD
                                        $query= "SELECT * FROM  student_info where `class` = 'KG-I'";
=======
                                        $query= "SELECT * FROM  student where `class` = 'KG-I'";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                           
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

<<<<<<< HEAD
                                        $query= "SELECT * FROM  student_info where `class` = 'KG-II'";
=======
                                        $query= "SELECT * FROM  student where `class` = 'KG-II'";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                           
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

<<<<<<< HEAD
                                        $query= "SELECT * FROM  student_info WHERE class != 'Alumini'";
=======
                                        $query= "SELECT * FROM  student WHERE class != 'Alumini'";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                           
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

                                      

                        $query="SELECT * FROM `events` WHERE `type` = 'national'";
    
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


<<<<<<< HEAD
              <div id ="a"   onclick="newev()" ondblclick="newev2()" class="btn btn-success">Add / Delete  An  Event </div><br><br>
=======
              <div id ="a"   onclick="newev()" ondblclick="newev2()" class="btn btn-success">Add New Event </div><br><br>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986

             <?php
             include 'connect.php';


<<<<<<< HEAD


=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
             if(isset($_POST['type'])&& isset($_POST['name']) && isset($_POST['date'])) 

            {
                   

              $type = $_POST['type'];

              $name = $_POST['name'];

              $date = $_POST['date'];

          

              if(!empty($type) && !empty($name) && !empty($date))
              {


<<<<<<< HEAD
=======

>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                $chk = "SELECT * FROM `events` WHERE `type` = '$type' AND `name` = '$name'";

                if($chk_qr = mysql_query($chk))
                {
                  $num = mysql_num_rows($chk_qr);
                }


                  if($num == 0)
                  {
<<<<<<< HEAD

                if(isset($_POST['insert']))
                 {   


=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                $qu = "INSERT INTO events(`id`,`name`,`type`,`date`) values('','$name','$type','$date')";

            

                if($qu_run = mysql_query($qu))
                {
<<<<<<< HEAD
                  echo "Event added";
                }

                else
                {
                  echo "error";
                }
              }

              else if(isset($_POST['delete']))
                 {   


                $qu = "DELETE FROM `events` WHERE `name` = `$name`";

            

                if($qu_run = mysql_query($qu))
                {
                  echo "Event Deleted";
=======
                  echo "";
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                }

                else
                {
                  echo "error";
                }
              }
<<<<<<< HEAD
              
            }
=======
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986

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
<<<<<<< HEAD
                                        <input type="submit" class="btn" name = "insert" value="Add">
                                        <input type="submit" class="btn btn-danger" name = "delete" value="Delete">

                                        </div>
                                         
            
=======
                                        <input type="submit" class="btn" name = "Insert" value="Add">
                                        </div>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                                           </div>


                                        </div>

                                  


                            </div>



                                          
                                         

                                          </form>    </div>

                



<<<<<<< HEAD
                <br><br><br> <br>
=======
                <br>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                   <div class="row">
                    <div class="centered"> <h3 style="color:rgb(110,110,110);">Message Count </h3> <br> </div>

                       <div class="col-sm-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="panel-title">Total Message Credits</div>
                            </div>
<<<<<<< HEAD

                            <?php

  $p = 0;

$q = "SELECT *  FROM `msg_count` WHERE `id` = '1'";


$run = mysql_query($q);

for($i = 1; $i <= 12; $i ++)

{

if($i == 1)
{
 $k1 = mysql_result($run, $p, 'msg_jan');





}

else if($i == 2)
{
  $k2 = mysql_result($run, $p, 'msg_feb');

  
   

}



else if($i == 3)
{
 $k3 = mysql_result($run, $p, 'msg_mar');





}

else if($i == 4)
{
  $k4 = mysql_result($run, $p, 'msg_apr');

    

}


if($i == 5)
{
 $k5 = mysql_result($run, $p, 'msg_may');





}

else if($i == 6)
{
  $k6 = mysql_result($run, $p, 'msg_jun');

    
    

}


if($i == 7)
{
 $k7 = mysql_result($run, $p, 'msg_jul');




}

else if($i == 8)
{
  $k8 = mysql_result($run, $p, 'msg_aug');

    
    

}
else if($i == 9)
{
  $k9 = mysql_result($run, $p, 'msg_sep');


}
else if($i == 10)
{
  $k10 = mysql_result($run, $p, 'msg_oct');

    

}
else if($i == 11)
{
  $k11 = mysql_result($run, $p, 'msg_nov');

    
     

}
else if($i == 12)
{
  $k12 = mysql_result($run, $p, 'msg_dec');

    

}


}


 
$k_tot = $k1 + $k2 + $k3+ $k4+ $k5+ $k6+ $k7+ $k8+ $k9+ $k10+ $k11+ $k12;

    ?>    

  

                            <div class="panel-body">
                                40,000
                            </div>
                        </div>
                    </div>
=======
                            <div class="panel-body">
                                100000
                            </div>
                        </div>
                    </div>
        
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                                  <div class="col-sm-4">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title">Messages Sent</h3>
                            </div>
                            <div class="panel-body">
<<<<<<< HEAD
                            <?php echo $_SESSION['k_tot']; ?>
=======
                                1000
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                            </div>
                        </div>
                    </div>
        
                       <div class="col-sm-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Message Credits Left</h3>
                            </div>
                            <div class="panel-body">
<<<<<<< HEAD
                     <?php $c = 40000; echo $c - $_SESSION['k_tot']; ?>
=======
                                9000
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                            </div>
                        </div>
                    </div>
        
                 

                 </div>

<<<<<<< HEAD
                 <br> <br>

                              <?php
             include 'connect.php';


             if(isset($_POST['cn'])&& isset($_POST['cp']) && isset($_POST['nn']) && isset($_POST['np'])) 

            {
                   

              $cn = $_POST['cn'];

              $cp = $_POST['cp'];

              $nn = $_POST['nn'];

              $np = $_POST['np'];

          

              if(!empty($cn) && !empty($cp) && !empty($nn)&&!empty($np))
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


            
            ?> 



    

                  <div class="centered" style="padding:5px;background-color:rgb(91,130,181);"><h4>Change Sub-User</h4> </div>



                 <div id="form_vs"  style="background-color:rgb(200,200,200)"> <form method ="POST" action ="adminpage.php" class="form form-horizontal style-from" >

                                    <br>
                                   

                                    <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Current Sub-user Name</label>
                                          <div class="col-md-3">
                                    <input name ="cn" id="datepicker"   class="form-control round-form" value="<?php $p ="SELECT `id` FROM `admin` WHERE `sno.` = '2'"; $p_run = mysql_query($p); $res = mysql_result($p_run,'0','id'); echo $res;?>">
                    
                                        
                                               </div>

                                                        <label class="col-sm-3 col-sm-3 control-label">Current Sub-user Password</label>
                                          <div class="col-md-3">
                                    <input name ="cp"   class="form-control" value="<?php $p ="SELECT `password` FROM `admin` WHERE `sno.` = '2'"; $p_run = mysql_query($p); $res = mysql_result($p_run,'0','password'); echo $res;?>">
                    
                                        
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

                




                  
=======

                  <hr>
>>>>>>> f0be7880be4e80ad5ab0d4af5c9dce0a7d843986
                   

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
