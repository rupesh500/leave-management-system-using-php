<?php include "../auth/auth.php"; ?>
<?php include"../db.php";?>

<!DOCTYPE html>
<html lang="en">

<?php include"admin_header.php"; ?>

<body>

    <!--               ADMIN LETF SIDEBAR HERE-->


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
                <h6 class="text-uppercase">All leaves:</h6>

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
                                        <th scope="col">valid form</th>
                                        <th scope="col">valid to</th>
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
                      
 $show_users = "SELECT * FROM assign_leave t1 join users t2 on t1.assign_to=t2.user_id";
                      
    $showall=mysqli_query($connection,$show_users);
   
     $count = mysqli_num_rows($showall);
                      
        if($count>0){
                              
while($row = mysqli_fetch_array($showall)){
    
      $user_id = $row['user_id'];
     $user_name = $row['user_name'];
      $e_leave = $row['e_leave'];
     $m_leave = $row['m_leave'];
      $c_leave = $row['c_leave'];
      $v_form = $row['v_form'];
       $v_to = $row['v_to'];


      ?>

                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $user_name; ?></td>
                                        <td><?php echo $e_leave; ?></td>
                                        <td><?php echo $m_leave; ?></td>
                                        <td><?php echo $c_leave; ?></td>
                                        <td><?php echo $v_form; ?></td>
                                        <td><?php echo $v_to; ?></td>

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
