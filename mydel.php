

      <?php
 include 'connect.php';

 include 'layout.php';

         
   
      
         $v =  $_SESSION['st_name'];

         $count_st = count($v);

           $i = NULL;

     for($i = 1; $i <= $count_st; $i++)

     {

     	$k = $i - 1;


       $query1 = "UPDATE  `student_info` set `class` = 'Alumini' WHERE `student` = '$v[$k]'";

                    $query_run = mysql_query($query1);

 

                                       if($query_run)
                       
                                            {
                
                                              echo '<div class ="centered"><div class="alert alert-danger">Deleted Student '.$v[$k].' From Records</div></div>';
                                       }
                                    

      }           
              
?>