<?php include"../db.php";?>

<!--EDIT USER IN ADMIN PAGE-->
<?php 
     if(isset($_GET['delete'])){
     $user_id = $_GET['delete'];

     $delete_product = "DELETE FROM users WHERE user_id='$user_id'";
     $delete_result = mysqli_query($connection,$delete_product);
     if($delete_result){

     echo "<script>
         window.open('admin_index.php', '_self')
     </script>";
     }

     }
  ?>
