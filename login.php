<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<?php include "header.php"; ?>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">
        <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="assets/images/logo-icon.png">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Sign In</div>


                    <!--        TELL USER DATA INSERTED SUCCESFULLY USING SESSION-->
                    <div class="text-center pt-3">
                        <?php 
      if(isset($_SESSION['success']))
      {
       echo  $_SESSION['success'];
          unset($_SESSION['success']);
          
      }  
             
       if(isset($_SESSION['error']))
      {
       echo  $_SESSION['error'];
             unset($_SESSION['error']);
          
      }       
             
      ?>
                    </div>

                    <br>
                    <!--        LOGIN FORM STRAT HERE-->

                    <form action="login_account.php" method="post" onsubmit="return validation();">
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="user_email" class="sr-only">email</label>
                                <input type="text" id="user_email" name="user_email" class="form-control form-control-rounded" placeholder="email">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="user_password" class="sr-only">Password</label>
                                <input type="password" id="user_password" name="user_password" class="form-control form-control-rounded" placeholder="Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mr-0 ml-0">
                            <div class="form-group col-6">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="user-checkbox" checked="" />
                                    <label for="user-checkbox">Remember me</label>
                                </div>
                            </div>
                            <div class="form-group col-6 text-right">

                            </div>
                        </div>
                        <input type="submit" name="login" value="login" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">

                    </form>

                    <!--			                   LOGIN FORM END HERE            -->

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="assets/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
            function validation() {

                var user_email = $('#user_email').val();
                var user_password = $('#user_password').val();


                if (user_email == '') {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Email id can not be emty',

                    })
                    return false;

                }


                if (user_password == '') {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Enter a password!',

                    })
                    return false;

                }




            }

        </script>
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
    </div>
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
