<?php
include 'connect.php';			

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
                            </button>            	</ul>
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
                <div style="margin-top:-3%"> 	 <p class="centered"><img src="imgs/im6.jpg" class="img-circle"  width="250" height = "180"></p> </div>	
              	  	
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
                      <a  href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Contact</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="newcontact.php">New Contact</a></li>
						    <li ><a  href="classselect.php">Update Contact</a></li>
							   <li ><a  href="delete.php">Delete Contact</a></li>
							   
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="li_pen"></i>
                          <span> Class Operations</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="updateclass.php">Update Whole Class</a></li>
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
           	
	<article class="col-md-offset-2 col-md-10"><div class="alert alert-warning"><div class="centered"><b>Alert::Be very Careful while updating choose right class in both the  fields else data will be messed up and students may have wrong class inserted and  Update KG-I TO KG-II only after deleting whole class KG-II after end of session</b></div></div></article>
			<div>
			<?php

	

         
           

	if(isset($_POST['old_class']) && isset($_POST['new_class']))
     {
		        
                     
                      $old_class  =   $_POST['old_class'];
					  $new_class  =       $_POST['new_class'];
					  
					
                  
					  
			
                 
                                  
		                           
                                if (isset($_POST['update'])) 
		                          {
				                         
		                                  if(!empty($old_class) && !empty($new_class))
               
                                            {
                                             
                    
					                                    if($old_class != $new_class)
					 
					                                            {

                                
                                                        $query="UPDATE `student` SET `class`='$new_class' WHERE `class` ='$old_class'"; 
				
        

                      
				
                                                                     if($query_run = mysql_query($query))
                       
                                                                    {
						                    
		 echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-dismissable alert-info "><div class="centered">Class '.$old_class.' Updated to '.$new_class.' Successfully</div></div></aricle>';
		                                     
									  
						                                             }
						  
						  
				                                                }
						
						        
                            				                    else 
						
						                                        {
						           
			echo '<div class="alert alert-danger alert-dismissable">Warning:: You filled current class and promoting class with Wrong values Please Renter</div>';
                               
					                                             }
         					                              

            
			                                } 
										
							  
					                        else
                                  
						                    { 
                  echo '<article class="col-md-offset-2 col-md-10"><div class="alert alert-danger alert-dismissable"><div class="centered">Warning:: Any Field  is Left Empty ... Please Re-enter</div></div></article>';
		                                     }

                                                      
                                

		   }       
               
		
		                        
		
 
 }

 ?>
 </div>
    <div class="row mt">
          <article class="col-lg-10 col-md-offset-2">
               
				
				<!-- FORM --------------------FORM-------------------------FORM------------------------FORM --------------------------FORM-->
                    
                        <form class="form-horizontal style-form" action ="updateclass.php" method="POST">
                         
                       <div class="form-panel">  

	
       <div style ="padding:7px;background-color:rgb(100,100,100);margin-left:-1.2%;margin-right:-1.2%;margin-top:-1%"><h4><div class="col-md-offset-5"><span style="color:white">Update Class After End Of Session</span></div></div></h4><br>
														   

                             <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4>Current Class </h4> </label>
                                    
						       
                                   <div class ="col-md-offset-3">
								   <article class="col-md-8 col-md-offset-1">
								   
								<select name="old_class" class="form-control ">
											   
										
                                       
										 <option > </option>
                                        <option  >Playgroup</option>
                                              <option>Crech</option>
			
										<option> Nursery</option>
										<option>KG-I</option>
                                        
						
                                        
									    </select>
										</article>
										</div>
										
																										
                                 
                            </div> 
							<div class ="col-md-offset-5"><span class="help-block">Enter the current/existing class</span>
                       <span class="help-block">For eg. The Yearly session is over and Your class KG-I promoted to KG-II </span>		
                         <span class="help-block">So,choose KG-I here and KG-II in next box </span>		
                     					   </div><br><br><br>


                 
							
							
                          
						  
						    <div class="form-group">
                                 <label class="col-sm-3 col-sm-3 control-label"><h4> Promoted class </h4> </label>
                                    
									  <div class ="col-md-offset-3">
								   <article class="col-md-8 col-md-offset-1">
								   
								<select name="new_class" class="form-control ">
				
						  
                                 
                                       
										 <option > </option>
                                   
							
										<option>Nursery</option>
										<option>KG-I</option>
                                        <option>KG-II</option>
						
                                        
									    </select>
				
														
                                 
                            </div> 
							 

                               </div>
							   <div class = "col-md-offset-5">Enter the Updated or promoted class.<br><br>
							                   For eg. If U entered current class KG-I then here promoted class is KG-II</div><br><br>


							   
                       <div class="col-md-offset-4"> <input type="submit" class="btn btn-lg btn-success" value="Update Class" name="update"></div>
                     
                         </div>					 
                                      
					 </form>
                
				
				
				
		<!------FORM-------------------------FORM------------------------FORM-------------------FORM-->		
				
				
			
          </article>         <!-- col-lg-12-->       
    </div><!-- /row -->
            
     
    </section>          <!--wrapper -->
      </section>   
            

      
      <!--footer end-->-2
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
      
  <?php
  include 'layout2.php';

  ?>
  
  </body>
</html>
