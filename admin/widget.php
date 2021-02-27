   <?php
      $query = "SELECT * FROM users";                      
        $show_all_users = mysqli_query($connection,$query);                    
         $user_count = mysqli_num_rows($show_all_users); 

                       ?>

   <div class="media-body text-left">
       <h4 class="text-info"><?php echo $user_count;  ?></h4>
       <span>All users</span>
   </div>
   <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
       <i class="icon-basket-loaded text-white"></i></div>
   </div>
   </div>
   </div>
   </div>
   <div class="col-12 col-lg-6 col-xl-3">
       <div class="card border-danger border-left-sm">
           <div class="card-body">
               <div class="media">


                   <?php

                      $query = "SELECT * FROM applied_leave";                      
                        $show_all_leave = mysqli_query($connection,$query);                    
                         $applied_count = mysqli_num_rows($show_all_leave); 

                       ?>

                   <div class="media-body text-left">
                       <h4 class="text-danger"><?php echo $applied_count;  ?></h4>
                       <span>applied leaves</span>
                   </div>
                   <div class="align-self-center w-circle-icon rounded-circle gradient-bloody">
                       <i class="icon-wallet text-white"></i></div>
               </div>
           </div>
       </div>
   </div>
   
   
   
   
   
   
   <div class="col-12 col-lg-6 col-xl-3">
       <div class="card border-success border-left-sm">
           <div class="card-body">
               <div class="media">


                   <?php

                      $query = "SELECT * FROM assign_leave";                      
                        $show_a_leave = mysqli_query($connection,$query);                    
                         $assign_count = mysqli_num_rows($show_a_leave); 

                       ?>

                   <div class="media-body text-left">
                       <h4 class="text-success"><?php echo $assign_count;?></h4>
                       <span>Assign leaves</span>
                   </div>
                   <div class="align-self-center w-circle-icon rounded-circle gradient-quepal">
                       <i class="icon-pie-chart text-white"></i></div>
               </div>
           </div>
       </div>
   </div>

   </div>
   <!--End Row-->

   <!--End Dashboard Content-->