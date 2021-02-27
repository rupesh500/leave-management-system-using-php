<?php include "../auth/auth.php"; ?>
<?php include"../db.php";?>
<?php include "admin_header.php"; ?>
 <?php include"function.php"; ?>

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
            <?php 
if(isset($_SESSION['success']))
{
echo  $_SESSION['success'];
unset($_SESSION['success']);

}       

?>
                    </div>

                </div>

            </div>
            <!-- End Breadcrumb-->

<!--       assign leave php code function.php in assign_leave    -->
           
   <?php
 assign_leave();   
            
            
            ?>        
           
       
           
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Assign leave


                            </div>


                            <hr>
                            <form action="assign_leave.php" method="post"onsubmit="return check();">

                                <input type="hidden" name="assign_by" value="<?php echo $_SESSION['user_id'];?>">


                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">


        <!-- SHOW ALL CHECKBOX IN DATABASE HERE IN  assign_leave.PHP  QUERY-->

                                            <?php 
    
                      
 $show_users = "SELECT * FROM users WHERE user_role='employee' order by user_id DESC ";
                      
    $showall=mysqli_query($connection,$show_users);
   
  
while($row = mysqli_fetch_array($showall)){
    
    $user_id = $row['user_id'];
      $user_name = $row['user_name'];
      $user_email = $row['user_email'];
      $department = $row['department'];
      ?>

                                            <div class="form-check">
                                                <input class="form-check-input"id="checkuser" name="emp[]" type="checkbox" value="<?php echo $user_id; ?>">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    <?php echo $user_name; ?>
                                                </label>
                                            </div>

                                            <br>



                                            <?php } ?>



                                        </div>

                                        <!--   LEFT SIDE END HERE -->

                                        <div class="col-sm">

                                            <div class="form-group">
                                                <div class="position-relative has-icon-right">
                                                    <label for="inputemail" class="sr-only">valid form:</label>
                                                    <b>Valid form:</b> <input type="date" name="v_form" placeholder="dd/mm/yyyy" class="form-control">

                                                    <div class="]\form-control-position">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="position-relative has-icon-right">
                                                    <label for="inputemail" class="sr-only">valid to:</label>
                                                    <b>Valid To:</b> <input type="date" name="v_to" placeholder="dd/mm/yyyy" class="form-control">

                                                    <div class="]\form-control-position">

                                                    </div>
                                                </div>
                                            </div>

                                            <!--          LEAVE TYPE FORM HERE-->

                                            <div class="form-group">
                                                <div class="position-relative has-icon-right">
                                                    <label for="inputemail"id="eleave" class="sr-only">Earning leave:</label>
                                                    <b>Earning leave:</b> <input type="text" name="e_leave" placeholder="number Leave" class="form-control">

                                                    <div class="]\form-control-position">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="position-relative has-icon-right">
                                                    <label for="inputemail"id="mleave" class="sr-only">medical leave:</label>
                                                    <b>medical leave:</b> <input type="text" name="m_leave" placeholder="number of leave" class="form-control">

                                                    <div class="]\form-control-position">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="position-relative has-icon-right">
                                                    <label for="inputemail"id="cleave" class="sr-only">casual leave:</label>
                                                    <b>casual:</b> <input type="text" name="c_leave" placeholder="Mumber Leave" class="form-control">

                                                    <div class="]\form-control-position">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">


                                                <input type="submit" name="submit" value="submit" class="btn btn-primary ">
                                            </div>

                                            <!--    right side end here-->
                                        </div>

                                    </div>

                                </div>
             