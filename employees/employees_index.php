<?php include "../auth/auth.php"; ?>


<?php 

$connection = mysqli_connect('localhost','root','','lms');

if(!$connection){

die("QUERY FAILED" . mysqli_error($connection));
    
}




?>




<!DOCTYPE html>
<html lang="en">

<?php include"employees_header.php"; ?>

<body>

<!--               ADMIN LETF SIDEBAR HERE-->
<!-- Start wrapper-->

<?php include"navigation.php"; ?>

<div class="clearfix"></div>
	
	
	
  <div class="content-wrapper">

   
    <div class="container-fluid">


   
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->

<?php include"employees_footer.php"; ?>


</body>

</html>
