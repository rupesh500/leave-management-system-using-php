<?php include "../auth/auth.php"; ?>
<?php include"../db.php";?>
<!DOCTYPE html>
<html lang="en">

<?php include"admin_header.php"; ?>

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
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card border-info border-left-sm">
                        <div class="card-body">
                            <div class="media">


                                <?php include "widget.php"; ?>


                                <!--TABLE DATA HERE IN ADMIN_INDEX>HTML PAGE-->

                                <div class="col-lg-12">
                                    <h6 class="text-uppercase">All Employees</h6>
                                    <hr>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-warning">
                                                        <tr>
                                                            <th scope="col">SR No</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Department</th>
                                                            <th scope="col">Edit</th>
                                                            <th scope="col">Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!--                   AHOW ALL USERS DATA HERE QUERY -->
                                                        <?php 
          $i =1; 
                      
 $show_users = "SELECT * FROM users";
                      
    $showall=mysqli_query($connection,$show_users);
   
     $count = mysqli_num_rows($showall);
                      
        if($count>0){
            
                      
                      
while($row = mysqli_fetch_array($showall)){
    
    $user_id = $row['user_id'];
      $user_name = $row['user_name'];
      $user_email = $row['user_email'];
      $department = $row['department'];
//      $user_id = $row['user_id'];
//      $user_id = $row['user_id'];
    

      ?>

                                                        <tr>
                                                            <th scope="row"><?php echo $i; ?></th>
                                                            <td><?php echo $user_name; ?></td>
                                                            <td><?php echo $user_email; ?></td>
                                                            <td><?php echo $department; ?></td>


                                                            <td> <a class="btn btn-outline-primary btn-round waves-effect waves-light s-1" href="edit_user.php?id=<?php echo $row['user_id']; ?>">edit</a>
                                                            </td>

                                                            <td> <a class="btn btn-outline-danger btn-round waves-effect waves-light s-1" href="delete_user.php?delete=<?php echo $user_id; ?>">Delete</a>
                                                            </td>
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

                                <!--   table data in index.php page here-->

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
