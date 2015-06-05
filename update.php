<?php

 require 'connect.php';

 session_start();

if(!$_SESSION['id'])
{
header("Location:index.php");
}

	
	
 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <?php

    include 'layout.php';

   ?>

    <script>

    function validate() 
    {
     var num = document.myform.new.value;

     var re =  document.myform.reent.value;




     if(isNaN(num))

     {
        document.getElementById("numloc").style.padding = "8px";

        

      document.getElementById("numloc").innerHTML = "Wrong value entered Enter only Numeric Value";

      return false;

     }


     else
     {

      var count = 0; 
      var len = num.length;

      var num2 = num.split("");

      var i = 0;

      for(i = 0; i < len ; i++)

      {

         count = count + 1;

      }

                  if(count > 10 || count < 10 )
                        {
                            document.getElementById("numloc").style.padding = "8px";

                         
                        
                            document.getElementById("numloc").innerHTML = " Entered" + " " +count+" "+ "digits Contact Number must be of 10 digits only";
                           
                            
                            return false;
                        }

                   else {

                               if(num != re){

                                document.getElementById("span2").style.padding = "8px";


                            document.getElementById("span2").innerHTML = " Entered New Contact And Renter Contact Fileds with diffrent Values.Please Renter";
                              
                    

                                return false;

                                  }

                                  else{
                                    return true;
                                  }
                         }
     }

    }

    </script>


   
  
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
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
                 	 
              	  	
                  <li class="mt">
                      <a  href="myhome.php">
                          <i class="li_shop"></i>
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
                      <a class ="active" href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Contact</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="newcontact.php">New Contact</a></li>
						    <li class="active"><a  href="classselect.php">Update Contact</a></li>
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
              <li><a  href="selectstaff.php">Update Staff Contact</a></li>
 
                 
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>


      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
       <section id="main-content">
          <section class="wrapper">
 
                          

    <div class="row mt">

      <div>
          <?php

    

         
           

  if(isset($_POST['contact']) && isset($_POST['new']) && isset($_POST['reent']))
     {

          
            
                     
                      $contact  =   $_POST['contact'];
            $new  =       $_POST['new'];
                      $reent   =    $_POST['reent'];

                         $j = str_split($new);

                      $count = NULL;

                   foreach ($j as  $value) {

                      

                     if(is_numeric($value))
                    {

                     $count = $count + 1;
                    }

            
                        } 

              if(is_numeric($new))

       {
             
             if($count == 10)

             { 



                          if (isset($_POST['enter'])) //to insert data in a table 
               {
             
                                      if(!empty($contact) && !empty($new) && !empty($reent))
               
                   {

                    
                                                  if($new == $reent)
           
                      {

                                
                                                      $query="UPDATE `student` SET `contact`='$new' WHERE `contact` ='$contact'"; 
        
        

                      
        
                                                                     if($query_run = mysql_query($query))
                       
                                                                    {
                              
            echo '<div class="col-md-10"><div class="col-md-offset-4"><div class="alert alert-info alert-dismissable" ><div class="centered">Contact Updated Sucessfully..</div></div> </div></div>';
                    
                                                         }
              
              
                                                        }
            
                    
                                                        else 
            
                                                    {
                       
                      echo '<article class="col-md-9 col-md-offset-3"><div class="alert alert-danger alert-dismissable"><div class="centered">Warning:: You filled new contact and reenter contact with diffrent values Please Renter</div></div></article>';
                               
                                                       }
                  

            
            }
                    
                
                                  else
                                  
                                { 
                                             echo '<div class="alert alert-danger alert-dismissable"><div class="centered">Warning:: Any Field  is Left Empty ... Please Re-enter</div></div>';
                                        
                                 }

                    
            }

       }     

       

         else
 {

    echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger alert-dismissable"><div class="centered">WARNING::You enter '."$count".' digits only  10 digits required in the new  contact number field.Please Renter</div></div></article>';
               
 }
   

    }

 else
 {

    echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger alert-dismissable"><div class="centered">WARNING::Invalid Contact Number entered.Please Renter</div></div></article>';
               
 }

 
               
    
    
    
 }

 ?>
 </div>


          <article class="col-md-10 col-md-offset-2">

        
				<!-- FORM --------------------FORM-------------------------FORM------------------------FORM --------------------------FORM-->
                    
                        <form name= "myform" class="form-horizontal style-form" action ="update.php" method="POST"  onsubmit="return validate()">


                                  
                          <div class="form-panel">
	
       <div style ="padding:10px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-5"><span style="color:white">Update Student Record</span></div></div></h4><br><br>
									
	
                <?php

                        if(isset($_POST['st_name']))
   
         {

                                $stu =$_POST['st_name'];

                            


                        
                          
                        
                                $query="select `class`,`student`,`class` from `student_info` where `student` ='".$stu."';";

                                $query_run=mysql_query($query);

                                $v = mysql_num_rows($query_run);

                                $i = 0;


                            if($v == 1)
                               {
                      
                        





                                  $student =mysql_result($query_run,$i,'student');

                                  $class =mysql_result($query_run,$i,'class');

                            echo '<div class="centered"><div class="btn btn-lg btn-info" style="border-top-right-radius:20px;border-top-left-radius:20px;border-bottom-right-radius:20px;

border-bottom-left-radius:20px; ">Class::'.$class.' </div></div>';

              

                                 

                                 echo '<div class="btn btn-warning" style="border-top-right-radius:20px;border-top-left-radius:20px;border-bottom-right-radius:20px;

border-bottom-left-radius:20px;">Student Name::'.$student.' </div>';

                      }
                          
                            
                          

                    }

                          
                          
                          
   
              
                          ?>
                                            
                <br><br>

                   

                   

                        <div class="form-group">
                  
                        <label class="col-sm-3 col-sm-3 control-label"><h4>Exixsting Contact</h4> </label>
                    
                      <div class="col-sm-5">

             
                         <input type="text" class="form-control round-form" name= "contact" class="form-control"  value= "<?php 

                           if(isset($_POST['st_name']))
   
         {

                                $stu =$_POST['st_name'];

                            


                        
                                $v = 0;
                        
                                $query="select `contact` from `student_info` where `student` ='".$stu."';";

                                $query_run=mysql_query($query);

                                $v = mysql_num_rows($query_run);

                                $i = 0;

                                 if($v == 0)
                               {
                      
                        

                              

                                  
                                   echo "No Student Name selected select again";
                              }
                          
                            
                          



                            if($v == 1)
                               {
                      
                        

                                  $contact =mysql_result($query_run,$i,'contact');

                                  
                                   echo $contact;
                              }
                          
                            
                          

                    }

                          
                          
                          
   
              
                          ?>">
        
                         
                      
                            <span class="help-block"><p class="col-md-offset-1">Existing Contact of the student</p></span>
          
                      </div>  
                      </div>
                    
                    


                          
                    
                    


                              <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>New Contact</h4></label>
                                   <div class="col-sm-5">
                                        <input type="text" class="form-control round-form" name = "new" required>
                                        <span class="help-block"><p class="col-md-offset-1">Enter the new contact of the student</p></span> 
                                    <span style= "color:white;background-color:rgb(244,80,81)" id="numloc"> </span>

 
                                    </div>
                            </div><br>

                              <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Renter Contact</h4></label>
                                   <div class="col-sm-5">
                                    <input type="text" class="form-control round-form" name = "reent" required>
                         <span class="help-block"><p class="col-md-offset-1">Again Enter the new contact of the student</p></span> 
                                    </div><br><br><br><br>

             <span class="col-md-offset-5" style= "color:white;  background-color:rgb(244,80,81)" id="span2"> </span> 

                  <div class="centered">  <input type="submit" class="btn btn-lg btn-success" value="Update" name="enter"><span class="col-md-offset-3">

                     <input type="reset" class="btn btn-lg btn-danger" value="Clear" name="clear"> </span>
                   </div>

                            </div>

                
                     
						 
						 
							</div> 
						 
		
                      </form>
                
				
				
				
		<!------FORM-------------------------FORM------------------------FORM-------------------FORM-->		
				
				
			
          </article>         <!-- col-lg-12-->       
    </div><!-- /row -->
            
     
    </section>          <!--wrapper -->
      </section>   
            

      
      <!--footer end-->-2
  </section>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>

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
      
  
  

