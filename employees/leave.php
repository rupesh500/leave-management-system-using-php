<?php include "../auth/auth.php"; ?>
<?php include"../db.php";?>
<?php include "employees_header.php"; ?>


<!DOCTYPE html>
<html lang="en">

<body>
    <?php include "navigation.php"; ?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">

                    <div class="text-center pt-3">

                    </div>

                </div>

            </div>

            <!-- End Breadcrumb-->


            <?php 
      if(isset($_SESSION['success']))
      {
       echo  $_SESSION['success'];
           unset($_SESSION['success']);
          
      }       
          
         
      ?>
            <br>
            <div class="col-lg-12">


                <h6 class="text-uppercase">All leaves:</h6>

                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-warning">
                                    <tr>
                                        <th scope="col">Name</th>
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


                                    <?php 
          $i =1; 
                  
                      
//        table join ka use karenge kyunki assign leave main userka name nahi hain so ASign _leavea nd users ko join denge   
                      
//    OR                  
  
//    SESSION ID THOUGH JO EMPLOYEE LOGIN HAIN USIKA LEAVE ASSIGN DIKHEGA LEAVE.php PE
   $user_id = $_SESSION['user_id'];                   
                      
                      
 $show_users = "SELECT * FROM assign_leave t1 join users t2 on t1.assign_to=t2.user_id WHERE t2.user_id=$user_id ";
                      
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

                                        echo "No leave here";    
                                        } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include "employees_footer.php"; ?>
