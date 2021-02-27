<?php include "../auth/auth.php"; ?>
<?php include"../db.php";?>


<!DOCTYPE html>
<html lang="en">

<?php include"employees_header.php"; ?>


<body>



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
                <h6 class="text-uppercase">applied leaves Status:</h6>


                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-warning">
                                    <tr>
                                        <th scope="col">SR No</th>
                                        <!--                      <th scope="col">employee name</th>-->
                                        <th scope="col">Earning leave</th>
                                        <th scope="col">medical leave</th>
                                        <th scope="col">casual leave</th>
                                        <th scope="col">valid form</th>
                                        <th scope="col">valid to</th>
                                        <th scope="col">applied_date</th>
                                        <th scope="col">status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!--                   AHOW ALL TASK DATA HERE QUERY -->
                                    <?php 
          $i =1; 

                      
                      
   $user_id = $_SESSION['user_id'];
                      
 $show_users_applied = "SELECT * FROM applied_leave WHERE apply_by=$user_id ";
                      
    $showall=mysqli_query($connection,$show_users_applied);
   
     $count = mysqli_num_rows($showall);
                      
        if($count>0){
            
                      
                      
while($row = mysqli_fetch_array($showall)){
    
      $id = $row['id'];
     $i_from = $row['i_from'];
      $i_to = $row['i_to'];
     $e_leave = $row['e_leave'];
     $m_leave = $row['m_leave'];
      $c_leave = $row['c_leave'];
      $applied_date = $row['applied_date'];
       $status = $row['status'];


      ?>

                                    <tr>

                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $e_leave; ?></td>
                                        <td><?php echo $m_leave; ?></td>
                                        <td><?php echo $c_leave; ?></td>

                                        <td><?php echo $i_from; ?></td>
                                        <td><?php echo $i_to; ?></td>
                                        <td><?php echo $applied_date; ?></td>
                                        <td><?php echo $status; ?></td>


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

    <?php include"employees_footer.php"; ?>


</body>

</html>
