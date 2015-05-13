<?php 

include 'connect.php';


 ?>

<html>

<head>




<body>

 <div>
<script type ="text/javascript">

function myfn() {

    




  var k = confirm("Confirm delete contact");

    
    if(k == true)

    {
           
            document.write("done");
  

    	document.write("<?php  

                   if(isset($_POST['st_name']))

                   {

                      $m = $_POST['st_name'];

                      echo $m;

    	                     $x = 'as';

    	             

                       


                                          $query1= "DELETE FROM `soldiers` WHERE `student` = '$m' "; 
				
                                       
                                         if($query_run = mysql_query($query1))
                       
                                            {
								
					                                    echo "deleted";
					                                   }
                                    

					                  
						  
					   }?>"); 

    	  alert("deleted");

    	     
    }

    else
    {
      document.write("none");
    }

}

  </script>

</div>

  <form action= "deletion.php" method ="POST">
  <select name="st_name">
                         
                          <option value="0">Select Student Name </option>
                          <?php 
                              if(isset($_POST['class']))
                          {
                            $class=$_POST['class'];
                            $query="select `student` from soldiers where class='".$class."';";
                            if(mysql_query($query))
                            {
                              $query_run=mysql_query($query);
                              if(mysql_num_rows($query_run)==NULL)
                              {
                                echo 'no contacts found';
                              }
                              else
                              {
                                $i=0;
                                $count = 0;
                        
                                while($i<mysql_num_rows($query_run))
                                {
                                    $student=mysql_result($query_run,$i,'student');
                                    $take_stu[$i] = $student;
                                    $i=$i+1;
                                    $count = $count + 1;
                                }
                              }
                          
                            }
                          }

                                     
                          
                          
                          
                                 
                                    $i = 0;
                          
                                while($i<=$count){
                                    $class=mysql_result($run_query,$i,'class');
                                    echo '<option value="'.$take_stu[$i].'">'.$take_stu[$i].'</option>';
                                    $i=$i+1;
                                }
              
                          ?>
                        </select>


  <input type ="submit" onclick="myfn()">

  </form>

       
  </form>

 

  </body>

  </html>