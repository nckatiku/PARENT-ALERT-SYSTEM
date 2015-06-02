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
     <?php

    include 'layout.php';

   ?>
  
</head>
<body>



<section id="container" >
  <!--header start-->
    <header class="row">
           
      
      <nav class ="navbar navbar-inverse navbar-fixed-top navbar-default  role = "navigation">
       <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
      
      <!--logo start-->
            <a class="logo"  ><b>Little Soldiers School</b></a>
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
             <p class="centered"><img src="imgs/im5.jpg"class="img-circle"  width="250" height = "180"></p>
          <li class="mt">
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span> Home</span>
                      </a>
                  </li>
          <li>
          
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
                      <a href="javascript:;" >
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
      

      <div class="row mt">
          <div class="col-md-offset-2">
          <div class="col-lg-12">
          <br><br>
          <form  class="form-horizontal style-form"  method="POST" action="updateallinfo.php">
                  <div class="form-panel">
    

       <div style ="padding:10px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-5"><span style="color:white">Update Student Record</span></div></div></h4><br>
                  
                  
                    <br><br>
                    <div class="form-group">
                      <div class="col-sm-6">
                        <label class="label-control"><h4>Student Name</h4> </label>
                      </div>
                      <div class="col-sm-6">
                                            
        <select name="st_name" class="form-control">
                         
                          <option value="0">Select Student Name </option>
                          <?php 
                              if(isset($_POST['class']))
                          {
                            $class=$_POST['class'];
                            $query="select `student` from student where class='".$class."';";
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
                                $count = 0;
                        
                                while($i<mysql_num_rows($query_run))
                                {
                                    $student=mysql_result($query_run,$i,'student');
                                    $take_stu[$i] = $student;
                                    $i=$i+1;
                                    $count = $count + 1;
                                }
                              }
                          
                            }
                          }

                                     
                          
                          
                          
                                 
                                    $i = 0;
                          
                                while($i<=$count){
                                    $class=mysql_result($run_query,$i,'class');
                                    echo '<option value="'.$take_stu[$i].'">'.$take_stu[$i].'</option>';
                                    $i=$i+1;
                                }
              
                          ?>
                        </select>

                        </div>
                        </div>
                         <br><br>



                    <div class="col-sm-offset-3">
      <input type="submit" class="btn btn-lg btn-info" name ="Delete" value="Proceed to update" onclick="myfn()">
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
    <!--footer start-->
  
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
