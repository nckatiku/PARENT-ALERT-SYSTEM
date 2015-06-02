

      <?php
 include 'connect.php';

 include 'layout.php';

         
   
      
         $v =  $_SESSION['st_name'];




       $query1 = "UPDATE  `student` set `class` = 'Alumini' WHERE `student` = '$v'";

                    $query_run = mysql_query($query1);

 

                                       if($query_run)
                       
                                            {
                
                                              echo '<div class ="centered"><div class="alert alert-danger">Deleted Student '.$v.' From Records</div></div>';
                                       }
                                    

                 
              
?>