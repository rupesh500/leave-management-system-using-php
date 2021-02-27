<?php include "../auth/auth.php"; ?>
<?php include"../db.php";?>
<!DOCTYPE html>
<html lang="en">

<?php include"admin_header.php"; ?>
<?php include"function.php"; ?>



<body>
    <!--approve leave function.php-->
    <?php approve_leave();   ?>


    <!--reject leave function.php-->
    <?php 
    reject_leave();
    ?>


    <!--               ADMIN LETF SIDEBAR HERE-->
    <!-- Start wrapper-->


    <?php include"navigation.php"; ?>
    <!--End header top bar -->


    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

            <div class="row mt-3">


            </div>
            <!--End Row-->

            <!--End Dashboard Content-->



            <div class="col-lg-12">



                <h6 class="text-uppercase">All applied leaves:</h6>
                <?php 
      if(isset($_SESSION['success']))
      {
       echo  $_SESSION['success'];
           unset($_SESSION['success']);
          
      }   
            
            
       if(isset($_SESSION['rejected']))
      {
       echo  $_SESSION['rejected'];
           unset($_SESSION['rejected']);
          
      }      
                   
             
      ?>


                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-warning">
                                    <tr>
                                        <th scope="col">SR No</th>
                                        <th scope="col">employee name</th>
                                        <th scope="col">Earning leave</th>
                                        <th scope="col">medical leave</th>
                                        <th scope="col">casual leave</th>
                                        <th scope="col">from</th>
                                        <th scope="col">to</th>
                                        <th scope="col">status</th>
                                        <th scope="col">approve</th>
                                        <th scope="col">reject</th>
                                        <!--
                      <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
-->
                                    </tr>
                                </thead>
                                <tbody>

                                    <!--                   AHOW ALL TASK DATA HERE QUERY -->
                                    <?php 
          $i =1; 
                      
//        table join ka use karenge kyunki assign leave main userka name nahi hain so ASign _leavea nd users ko join denge              
                      
 $show_users = "SELECT * FROM applied_leave t1 join users t2 on t1.apply_by=t2.user_id";
                      
    $showall=mysqli_query($connection,$show_users);
   
     $count = mysqli_num_rows($showall);
                      
        if($count>0){
            
                      
                      
while($row = mysqli_fetch_array($showall)){
      $user_id = $row['user_id'];
     $user_name = $row['user_name'];
      $e_leave = $row['e_leave'];
     $m_leave = $row['m_leave'];
      $c_leave = $row['c_leave'];
      $i_from = $row['i_from'];
       $i_to = $row['i_to'];
      $status = $row['status'];


      ?>

                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $user_name; ?></td>
                                        <td><?php echo $e_leave; ?></td>
                                        <td><?php echo $m_leave; ?></td>
                                        <td><?php echo $c_leave; ?></td>
                                        <td><?php echo $i_from; ?></td>
                                        <td><?php echo $i_to; ?></td>
                                        <td><?php echo $status; ?></td>




                                        <td> <a class="" href="all_applied_leaves.php?id=<?php echo $row['id']; ?>">approve</a>
                                        </td>

                                        <input type="hidden" name="id" value="<?php echo $id; ?>">



                                        <td> <a class="" href="all_applied_leaves.php?rej=<?php echo $row['id']; ?>">reject</a>


                                    </tr>

                                        <?php
                                        $i++;

                                        }} else{

                                        echo "no Records Found";    
                                        } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->

    <?php include"admin_footer.php"; ?>


</body>

</html>
