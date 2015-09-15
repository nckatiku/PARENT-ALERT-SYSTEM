<?php
include 'connect.php';			

session_start();

if(!$_SESSION['id'])
{
header("Location:index.php");
}


?> 	


<!DOCTYPE html>
<html lang="en">
  <head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/mycss.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/custom.css">

  
   </head>
<body style="background-color:rgb(300,300,300)">
<section id="container" >
	<!--header start-->
		

    <section id="main-content">
		<section class="wrapper">
				
	
			<div class="row mt">
         <?php $class=$_POST['class']; ?>
					<div>
    
                  
                         <br> <br>
                    <div style="font-family:Algerian;" class="col-md-offset-5"><?php echo "<h3>$class</h3>";?> </div>

                   <div > <h3 style="font-family:Algerian" class="col-md-offset-5">Class Details</h3></div>

                  
                  <div class="col-md-offset-1">

	<table  border ="2" class="table table-hover" style="font-family:century-schoolbook;width:1200px;color:rgb(30,30,30);font-size:16px;">
				
									<?php 

                      $serial = 1;
											
													if(isset($_POST['class']))


								{


														$class=$_POST['class'];
                        
                         if($class != "All")

                         {

														$query="SELECT * from student_info where class ='".$class."' ORDER BY `student`;";
														if(mysql_query($query))
								{
															$query_run=mysql_query($query);
															if(mysql_num_rows($query_run)==NULL){
																echo '<h4>No contacts found</h4>';
															}
															else{
															    $count = 0;
																$i=0;
																while($i<mysql_num_rows($query_run)){
																
																if($count == 0)
																{
                                  
											
                    
                      echo '<tr style="font-size:20px;color:rgb(46,55,169);"> <td>S.NO.</td><td>Student</td><td>Contact</td> <td>Contact#2</td><td>Class</td><td>Fathers Name</td><td>Mothers Name</td><td>Guardian</td></tr>'; 
                               				 
															    $count = $count + 1;
																
																}


																
																else{
																    
																		$contacts=mysql_result($query_run,$i,'contact');
                                           $contact2=mysql_result($query_run,$i,'contact2');
																		$student=mysql_result($query_run,$i,'student');
																		$class=mysql_result($query_run,$i,'class');
																		$father=mysql_result($query_run,$i,'father');
																		$mother=mysql_result($query_run,$i,'mother');
																		$guardian=mysql_result($query_run,$i,'guardian');
						 
              echo "<tr><td>".$serial."</td><td>".$student."</td><td>".$contacts."</td><td>".$contact2."</td><td>".$class."</td><td>".$father."</td><td>".$mother."</td><td>".$guardian."</td></tr> "; 
     												
																		$i=$i+1;
                                    $serial = $serial + 1;
																}
																}
															}
														}

                          }

                          if($class == "All")

                         {

                            $query="SELECT * from student_info";
                            if(mysql_query($query))
                {
                              $query_run=mysql_query($query);
                              if(mysql_num_rows($query_run)==NULL){
                                echo '<h4>No contacts found</h4>';
                              }
                              else{
                                  $count = 0;
                                $i=0;
                                while($i<mysql_num_rows($query_run)){
                                
                                if($count == 0)
                                {
                                  
                      
                      echo '<tr style="font-size:20px;color:rgb(46,55,169);"> <td>S.NO.</td><td>Student</td><td>Contact</td> <td>Contact#2</td><td>Class</td><td>Fathers Name</td><td>Mothers Name</td><td>Guardian</td></tr>'; 
                               
                                  $count = $count + 1;
                                
                                }


                                
                                else{
                                    
                                    $contacts=mysql_result($query_run,$i,'contact');
                                    $contact2=mysql_result($query_run,$i,'contact2');
                                    $student=mysql_result($query_run,$i,'student');
                                    $class=mysql_result($query_run,$i,'class');
                                    $father=mysql_result($query_run,$i,'father');
                                    $mother=mysql_result($query_run,$i,'mother');
                                    $guardian=mysql_result($query_run,$i,'guardian');
                                    
       echo "<tr><td>".$serial."</td><td>".$student."</td><td>".$contacts."</td><td>".$contact2."</td><td>".$class."</td><td>".$father."</td><td>".$mother."</td><td>".$guardian."</td></tr> "; 
                                
                                
                                    
                                    $i=$i+1;
                                    $serial = $serial + 1;
                                }
                                }
                              }
                            }
													}

                        }
													
												?>
                        </div>
				
							</table>
          
			
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
      
  
  

