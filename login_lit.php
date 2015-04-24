<?php

session_start();

?>

<?php
   
   include 'connect.php';
	
         
           

	if( isset($_POST['id']) && isset($_POST['password']))
           {
		
                      $id =$_POST['id'];
                     $password =$_POST['password'];
		  
		       


              
                if (isset($_POST['login'])) //to insert data in a table 
				{
				     
		            if(!empty($id) && !empty($password))
               
                    {



                                
                        $query="SELECT * FROM `admin` WHERE `id` = '$id' AND `password` = '$password'"; 
				
        

                      
				
                         if($query_run = mysql_query($query))
                       
                          {
                            $query_num_rows =  mysql_num_rows($query_run);


                                            if($query_num_rows == 1)
                                               {

                                          
                            $_SESSION['id'] = $id;                        
                                    
                                               
									  
								                    echo "<script> window.open('myhome.php','_self') </script>";
														
																
																		
				
                                              }
				
		       
		 

                               else
                                  
								  { 
                                   echo "<script> alert('ID or password is incorrect')</script>"; 
		                           }

                         }

    } else
                                  
                  { 
                                   echo "<script> alert('Either ID or Password Field Left Empty')</script>"; 
                               }

				

        }
		
 }


 ?>




<!DOCTYPE html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Liitle Soldires Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">


<body>

<!-- Form --------------------------------------FORM------------------------FORM-------------------FORM----------------FORM --> 

<div id="login-page">
	<div class="container">

             <form class="form-login"  action="login_lit.php" method="POST">

                        <h2 class="form-login-heading">Little Soldiers</h2>

                        <div class="login-wrap">


                              <input type="text"  class="form-control" name="id" placeholder="User ID" >

                                  <br>

                                   <br>



                              <input class="form-control"  type="password" name="password" placeholder="password">


                               <br> <br>
                         
						      <input type="submit"  name = "login" class="btn btn-theme btn-block" value ="LOG IN">

    
		                      <br><hr>

                        </div>

            </form>
			
	<!-- Form---------------------------FORM-----------------FORM---------------FORM -->

    </div>

</div>

<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
       $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


</body>



</html>










        
       


