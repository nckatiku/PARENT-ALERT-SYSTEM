
             <?php
include 'connect.php';


             if(isset($_POST['type'])&& isset($_POST['name']) && isset($_POST['date'])) 

            {
                   

              $type = $_POST['type'];

              $name = $_POST['name'];

              $date = $_POST['date'];

          

              if(!empty($type) && !empty($name) && !empty($date))
              {

                $qu = "INSERT INTO events(`name`,`type`,`date`) values('$type','$name','$date')";

            ;

                if($qu_run = mysql_query($qu))
                {
                  echo "yoyo";
                }

                else
                {
                  echo "error";
                }
              }

            }
            ?>


             <form action ="evententer.php" class="form form-horizontal style-from" method="POST">

                                    <br>
                                     <div class="form-group">
                            
                                                <label class="col-sm-1 col-sm-1 control-label"> Type </label>
                                    
                                            <div class="col-md-2">

                                    
                                                <select name="type" class="form-control">
                                              <option >  Choose</option>
                                         <option >  Social</option>
                                        <option  >Cultural</option>
                                         <option>National</option>
                          
                                                <option>Personal</option>
                                       
                                        
                                             </select>

                         </select>
                                        
                            
                        </div>  

             <div class="form-group">
                                 <label class="col-sm-1 col-sm-1 control-label">Name</label>
                                   <div class="col-md-3">
                                        <input type="text" class="form-control round-form" name ="name" required>

                                         
                                    </div>
                                    <div class="form-group">
                                            <label class="col-sm-1 col-sm-1 control-label">Date</label>
                                          <div class="col-md-2">
                                    <input name ="date" id="datepicker"   class="form-control round-form" required/>
                    
                                        
                                               </div>
                                               <div class="col-sm-1">
                                        <input type="submit" class="btn" name =" Insert" value="Add">
                                        </div>
                                           </div>


                                        </div>

                                  


                            </div>



                                          
                                         

                                          </form>  