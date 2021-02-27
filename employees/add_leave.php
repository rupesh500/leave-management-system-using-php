<?php include "../auth/auth.php"; ?>
<?php include"../db.php";?>
<?php include "employees_header.php"; ?>
<?php include "function.php"; ?>



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

  
<!--  functionn add_leave-->
   <?php add_leave(); ?>        

           
           
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">add leave</div>
                            <hr>

                            <!--     EMPLOYEE APPLY LEVE HERE AND CODE EMP_APPLY_LEAVE.php PE HAIN-->

                            <form action="add_leave.php" method="post">

                                <input type="hidden" name="assign_by" value="<?php echo $_SESSION['user_id'];?>">


                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">


                                            <!--        SHOW ALL CHECKBOX IN DATABASE HERE IN  assign_leave.PHP  QUERY-->

                                            <?php 
    
                      
 $show_users = "SELECT * FROM users WHERE user_role='employee' order by user_id DESC ";
                      
    $showall=mysqli_query($connection,$show_users);
   
  
while($row = mysqli_fetch_array($showall)){
    
    $user_id = $row['user_id'];
      $user_name = $row['user_name'];
      $user_email = $row['user_email'];
      $department = $row['department'];
 

      ?>


                                            <?php } ?>

                                        </div>

                                        <!--   LEFT SIDE END HERE -->

                                        <div class="col-sm">

                            </form>



                            <!--          LEAVE TYPE FORM HERE-->

                            <!--
   
   	 <form action="emp_apply_leave.php"method="post">
					
				<input type="hidden"name="assign_by"value="<?php// echo $_SESSION['user_id'];?>">  
   
-->

                            <div class="form-group">
                                <div class="position-relative has-icon-right">
                                    <label for="inputemail" class="sr-only">leave from:</label>
                                    <b>leave form:</b> <input type="date" name="i_from" placeholder="dd/mm/yyyy" class="form-control">

                                    <div class="]\form-control-position">

                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="position-relative has-icon-right">
                                    <label for="inputemail" class="sr-only">leave to:</label>
                                    <b>leave to:</b> <input type="date" name="i_to" placeholder="dd/mm/yyyy" class="form-control">

                                    <div class="]\form-control-position">

                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="position-relative has-icon-right">
                                    <label for="inputemail" class="sr-only">Earning leave:</label>
                                    <b>Earning leave:</b> <input type="text" name="e_leave" placeholder="number Leave" class="form-control">

                                    <div class="]\form-control-position">

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="position-relative has-icon-right">
                                    <label for="inputemail" class="sr-only">medical leave:</label>
                                    <b>medical leave:</b> <input type="text" name="m_leave" placeholder="number of leave" class="form-control">

                                    <div class="]\form-control-position">

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="position-relative has-icon-right">
                                    <label for="inputemail" class="sr-only">casual leave:</label>
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










                <div class="text-center pt-3">

                </div>


                <?php include "employees_footer.php"; ?>
