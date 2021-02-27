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
      
           
<!--     REgister user php code function.php           -->
                     
     <?php 
    register_user_admin();
      
     ?>
                               
                                                                                      
                                                                                                     
                                                                                                               
<!--           REGISTER USER FORM HERE-->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Register User</div>
                            <hr>
                            <form action="sign_up.php" method="post" onsubmit="return form_validation();">


                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="username" class="sr-only">username</label>
                                        <input type="text" id="user_name" name="user_name" class="form-control form-control-rounded" placeholder="username">
                                        <div class="]\form-control-position">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="text" id="user_email" name="user_email" class="form-control form-control-rounded" placeholder="email">
                                        <div class="]\form-control-position">
                                            <i class="icon-email"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputPassword" class="sr-only">Password</label>
                                        <input type="text" id="user_password" name="user_password" class="form-control form-control-rounded" placeholder="Password">
                                        <div class="]\form-control-position">

                                        </div>
                                    </div>
                                </div>


                                <!--			               DEPARTMENT-->
                                <div class="form-group">
                                    <label for="department">Departmanet</label>
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputPassword" class="sr-only">Department</label>
                                        <div class="radio">
                                            <input type="radio" name="department" id="depart" value="web Developement" checked="">
                                            Web Development

                                        </div>
                                        <div class="]\form-control-position">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputPassword" class="sr-only">SEO</label>
                                        <div class="radio">
                                            <input type="radio" name="department" id="depart" value="seo" checked="">
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
                                            <input type="radio" name="user_role" id="user_role" value="Admin" checked="">
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
                                            <input type="radio" name="user_role" id="user_role" value="employee" checked="">
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


                                    <input type="submit" name="submit" value="sign up" class="btn btn-primary ">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <script src="../assets/jquery-3.4.1.min.js"></script>
                <script type="text/javascript">
                    function form_validation() {
                        var user_name = $('#user_name').val();
                        var user_email = $('#user_email').val();
                        var user_password = $('#user_password').val();

                        if (user_name == '') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Username Should Not be Empty!',

                            })
                            return false;
                        }

                        if (user_email == '') {

                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Email Should Not be Empty!',

                            })
                            return false;

                        }

                        if (user_password == '') {

                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'password Should Not be Empty!',

                            })
                            return false;

                        }


                        if (user_password.length < 5) {

                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Password must be 6 character',

                            })
                            return false;
                        }
                    }
                </script>

                <div class="text-center pt-3">

                </div>

                <?php include "admin_footer.php"; ?>
