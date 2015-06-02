   <?php
 include 'connect.php';

 include 'layout.php';

         
   
      
       




       $query1 = "UPDATE  `student` set `class` = 'Alumini' WHERE `class` = 'KG-II'";

                    $query_run = mysql_query($query1);

 

                                       if($query_run)
                       
                                            {
                
                                              echo '<div class ="centered"><div class="alert alert-danger">Deleted ALL KG- II Records</div></div>';
                                       }
                                    

                 
              
?>