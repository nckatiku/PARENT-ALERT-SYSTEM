
<?php
   
   include 'connect.php';

   include 'login.php';


	
         
           

	if(isset($_POST['id']) && isset($_POST['password']))
           

           {
		
                      $id =$_POST['id'];
                     $password =$_POST['password'];
		  
		       


              
                if (isset($_POST['login'])) //to insert data in a table 
	{
				     
		            if(!empty($id) && !empty($password))
               
        {
                             echo "hello";

                                
                        $query="SELECT * FROM `admin` WHERE `id` = '$id' AND `password` = '$password'"; 
				
        

                      
				
                         if($query_run = mysql_query($query))
                       
                          {
                            $query_num_rows =  mysql_num_rows($query_run);


                                            if($query_num_rows == 1)
                              {

                                          
                                       $_SESSION['id'] = $id;                        
                                    
                                               
				if($id == "admin" && $password = "admin")                    
                                    
                                               {
                    
                                    echo "<script> window.open('little-soldiers.com/myhome.php','_self') </script>";
                                        }

                                    else

                                 {
                           echo "<script> window.open('userhome.php','_self') </script>";
                                 }   
                                
                                    
        
                               }

                          

                            else
                                  
                              { 
                                   echo "<script> alert('ID or password is incorrect')</script>"; 
                               }
        										
                            }		
																
																		
				
                  
		  }

       else
                                  
        { 
         echo "<script> alert('Either ID or Password Field Left Empty')</script>"; 
                               
        }

				

        }
		
 }


 ?>
