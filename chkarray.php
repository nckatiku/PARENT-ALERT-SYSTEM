  

  <?php

include 'connect.php';

  $cur_mon = NULL;

  $cur_mon = date("m");

  $v = 0;

       $mon = " ";



                            $get_query = "SELECT * FROM `msg_count`";

                            $get_run = mysql_query($get_query);

                            $count_value = array();

                         

                             for($i=1;$i<=12;$i = $i + 1)
                             {

                              if($i == 01)
                            
                            {
                                   $mon = "msg_jan";

                            }
                             else if($i == 02)
                            
                            {
                                   $mon = "msg_feb";

                            }

                            else if($i == 03)
                            
                            {
                                   $mon = "msg_mar";

                            }
                           
                            else if($i == 04)
                            
                            {
                                   $mon = "msg_apr";

                            }


                           else if($i == 05)
                            
                            {
                                   $mon = "msg_may";

                            }


                             else if($i == 06)
                            
                            {
                                   $mon = "msg_jun";

                            }


                            else if($i == 07)
                            
                            {
                                   $mon = "msg_jul";

                            }

                            else if($i == 08)
                            
                            {
                                   $mon = "msg_aug";

                            }

                            else if($i == 09)
                            
                            {
                                   $mon = "msg_sep";

                            }


                            else if($i == 10)
                            
                            {
                                   $mon = "msg_oct";

                            }

                            else if($i == 11)
                            
                            {
                                   $mon = "msg_nov";

                            }

                            else if($i == 12)
                            
                            {
                                   $mon = "msg_dec";

                            }

                            $m = mysql_result($get_run,$v,$mon);

                    


                        

                            array_push($count_value,$m);

                      

                           
                        

      
                           }

                      

                           for($i=0;$i<12;$i = $i + 1) {

                            echo $count_value[$i];


             

                      

                
                             # code...
                           }



                            

                     

                          
?>

</script>