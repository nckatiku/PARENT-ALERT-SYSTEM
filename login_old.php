<?php
    include 'connect.php';
	
         
           

	if( isset($_POST['id']) && isset($_POST['password']))
           {
		
                      $id =$_POST['id'];
                     $password=$_POST['password'];
		  
		       


              
                    if (isset($_POST['insert'])) //to insert data in a table 
				{
				     
		if(!empty($id) && !empty($password))
               
     {



                                
$query="SELECT `id` FROM `occupation_organization` WHERE `id` = '$id' AND `password` = '$password'"; 
				
        

                      
				
                       if($query_run = mysql_query($query))
                       
                        {
                            $query_num_rows =  mysql_num_rows($query_run);


                          if($query_num_rows == 1)
                                            {


                                      echo '<b><font color = "red" >Welcome </font></i>';
                                           
                                                   echo "<script> window.location.assign('ho.php'); </script>";

 
				
                                              }
				
		       
		 

                               else
                                  { 
                                   echo '<b>Invalid Username/password Combination</b>';
		                  }

                         }

    } 
				}
		

           }


        
             
          
             

 



         
?>




<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Slick Login</title>
<meta name="description" content="slick Login">

<meta name="author" content="Webdesigntuts+">

<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>

<script type="text/javascript" src="placeholder.js"></script>

</head>

<body>

<form id="slick-login" action="login_old.php" method="POST">


<label for="username">username</label><input type="text" name="id" class="placeholder" placeholder="little_soldier_admin">


<label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="password">



<input type="submit" value="Log In" name = "insert">


</form>


</body>



</html>










        
       


