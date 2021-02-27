<?php include "../auth/auth.php"; ?>
<?php include"../db.php";?>
<?php include "admin_header.php"; ?>

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

                </div>

            </div>
            <!-- End Breadcrumb-->

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body">


                            <?php

//       FINALLY UPDATE USER IN EDIT_USERPHP   FUNCTION.PHP EDIT_USER

 update_user();
?>
                            <div class="card-title">Edit User Details</div>
                            <hr>
                            <form action="edit_user.php" method="post">

                                <!--DATA GETTIGN FROM ADMIN_INDEx EDIT USER LINK	-->

                                <?php         
    
     if(isset($_GET['id'])){                
    $user_id = $_GET['id'];
                     
    $query = "SELECT * FROM users WHERE user_id='$user_id'";
    $specific_user = mysqli_query($connection,$query); 
    
    while($row = mysqli_fetch_array($specific_user)){
        
         $user_name = $row['user_name']; 
         $user_email = $row['user_email']; 
         $department = $row['department']; 
         $user_role = $row['user_role']; 
  
 
    ?>


                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="username" class="sr-only">username</label>
                                        <input type="text" value="<?php echo $user_name; ?>" id="user_name" name="user_name" class="form-control form-control-rounded" placeholder="username">

                                        <div class="]\form-control-position">

                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="text" value="<?php echo $user_email; ?>" id="user_email" name="user_email" class="form-control form-control-rounded" placeholder="email">
                                        <div class="]\form-control-position">
                                            <i class="icon-email"></i>
                                        </div>
                                    </div>
                                </div>



                                <!--			               DEPARTMENT-->
                                <div class="form-group">
                                    <label for="department">Departmanet</label>
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputPassword" class="sr-only">Department</label>


                                        <div class="radio">
                                            <input type="radio" name="department" id="department" value="web Developement" <?php if($row['department']=='web Developement'){echo "checked" ; } ?>>
                                            Web Developer
                                        </div>



                                        <div class="]\form-control-position">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputPassword" class="sr-only">SEO</label>


                                        <div class="radio">
                                            <input type="radio" name="department" id="department" value="seo" <?php if($row['department']=='seo'){echo "checked" ; } ?>>
                                            SEO
                                        </div>

                                        <div class="]\form-control-position">

                                        </div>
                                    </div>
                                </div>

                                <!--			  		    USER ROLE HERE-->

                                <div class="form-group">
                                    <label for="department">ROLE</label>
                                    <div class="position-relative has-icon-right">
                                        <label for="admin" class="sr-only">Admin</label>
                                        <div class="radio">
                                            <input type="radio" name="user_role" id="user_role" value="Admin" <?php if($row['user_role']=='Admin'){echo "checked" ; } ?>>
                                            Admin
                                        </div>
                                        <div class="]\form-control-position">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputPassword" class="sr-only"></label>

                                        <div class="radio">
                                            <input type="radio" name="user_role" id="user_role" value="employee" <?php if($row['user_role']=='employee'){echo "checked" ; } ?>>
                                            employee
                                        </div>


                                        <div class="]\form-control-position">

                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="user-checkbox1" checked="" />
                                        <label for="user-checkbox1">Remember me</label>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <input type="submit" name="update" value="update" class="btn btn-primary ">
                                </div>

                            </form>
                            <?php   }} ?>
                        </div>

                    </div>
                </div>

                <div class="text-center pt-3">

                </div>


                <?php include "admin_footer.php"; ?>
