 <?php
 include 'connect.php';

 include 'layout.php';

         
   
      
         $x =  $_SESSION['st_name'];




       $query1 = "UPDATE  `staff` SET `status` = 'inactive'  WHERE `teacher` = '$x'";

                    $query_run = mysql_query($query1);

 

                                       if($query_run)
                       
                                            {
                
                                              echo '<article class="col-md-offset-4 col-md-4"><div class ="centered"><div class="alert alert-danger">Deleted Staff '.$x.' From Records</div></div></article>';
                                       }
                                    

                 
              
?>