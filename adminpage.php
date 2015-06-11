

    <?php

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

    <script type="text/javascript" src="canvasjs.min.js"></script>

<!DOCTYPE HTML>
<html>

<head>

  
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme2",
      title:{
        text: "Earthquakes - per month"
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
        { x: new Date(2012, 00, 1), y: 450 },
        { x: new Date(2012, 01, 1), y: 414},
        { x: new Date(2012, 02, 1), y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle"},
        { x: new Date(2012, 03, 1), y: 460 },
        { x: new Date(2012, 04, 1), y: 450 },
        { x: new Date(2012, 05, 1), y: 500 },
        { x: new Date(2012, 06, 1), y: 480 },
        { x: new Date(2012, 07, 1), y: 480 },
        { x: new Date(2012, 08, 1), y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
        { x: new Date(2012, 09, 1), y: 500 },
        { x: new Date(2012, 10, 1), y: 480 },
        { x: new Date(2012, 11, 1), y: 510 }
        
        ]
      }
      
      
      ]
    });

chart.render();
}
</script>

<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>

<script type="text/javascript">

function viewline(){
  document.getElementById("chartContainer").style.visibility = "visible";

}
  </script>
  

  <script type="text/javascript">

function hideline(){
  document.getElementById("chartContainer").style.visibility = "hidden";
}
  </script>
  
<script type="text/javascript">
    
    function newev()

    {

        document.getElementById("b").style.visibility = "visible";
        return true;
    }
</script>

<script type="text/javascript">
    
    function newev2()

    {

        document.getElementById("b").style.visibility = "hidden";
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
                <div style="font-size:23px;color:#fff"><b>LIITLE SOLDIERS SCHOOL</b></div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
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
                  <a href="Adminpage.php" class="active"> <i class="fa  fa-dashboard"></i>     Admin Page</a>
                
                    </li>


                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-tasks"></i>Back To home</a>
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

   <h3 style="color:rgb(110,110,110);">Monthly Analysis of Messages transactions </h3> <br>

   </div>
               

        

              <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>




           </div>
                     

                   
                   <h3 style="color:rgb(110,110,110);">Number Of Students </h3><br>
                
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

                                        $query= "SELECT * FROM  student where `class` = 'playgroup'";
                           
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
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
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

                                        $query= "SELECT * FROM  student where `class` = 'Nursery'";
                           
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
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
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

                                        $query= "SELECT * FROM  student where `class` = 'KG-I'";
                           
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
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
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

                                        $query= "SELECT * FROM  student where `class` = 'KG-II'";
                           
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
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                   
                    <div class="col-md-3">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><div>
                                        <?php

                                        $query= "SELECT * FROM  student";
                           
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
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                 

                </div>

                          




             <div class="row">

   <h3 style="color:rgb(110,110,110);">Yearly Events And Holidays </h3> <br>
            
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


              <div id ="a"   onclick="newev()" ondblclick="newev2()" class="btn btn-success">Add New Event </div><br><br>

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
                $qu = "INSERT INTO events(`id`,`name`,`type`,`date`) values('','$name','$type','$date')";

            

                if($qu_run = mysql_query($qu))
                {
                  echo "";
                }

                else
                {
                  echo "error";
                }
              }

            }
          }
            ?>



                 <div id="b" style="visibility:hidden"> <form method ="POST" action ="adminpage.php" class="form form-horizontal style-from" style="background-color:rgb(91,130,181)">

                                    <br>
                                     <div class="form-group">
                            
                                                <label class="col-sm-1 col-sm-1 control-label"> Type </label>
                                    
                                            <div class="col-md-2">

                                    
                                                <select name="type" class="form-control">
                                              <option >  Choose</option>
                                         <option >  Social</option>
                                        <option  >Cultural</option>
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
                                        <input type="submit" class="btn" name = "Insert" value="Add">
                                        </div>
                                           </div>


                                        </div>

                                  


                            </div>



                                          
                                         

                                          </form>  </div>

                



    
                   <div class="row">
                    <h3 style="color:rgb(110,110,110);">Message Count </h3> <br>

                       <div class="col-sm-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="panel-title">Total Message Credits</div>
                            </div>
                            <div class="panel-body">
                                100000
                            </div>
                        </div>
                    </div>
        
                                  <div class="col-sm-4">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title">Messages Sent</h3>
                            </div>
                            <div class="panel-body">
                                1000
                            </div>
                        </div>
                    </div>
        
                       <div class="col-sm-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Message Credits Left</h3>
                            </div>
                            <div class="panel-body">
                                9000
                            </div>
                        </div>
                    </div>
        
                 

                 </div>


                  <hr>
                   

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
