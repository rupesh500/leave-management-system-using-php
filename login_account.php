<?php session_start(); ?>
<?php include "db.php"; ?>



<!--   LOGIN ACCOUNT PROCESS-->
<?php

if(isset($_POST['login'])){
    
 $user_email = $_POST['user_email'];
    $user_password =md5($_POST['user_password']);
    
    $login_query = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
    
    $insert_result=mysqli_query($connection,$login_query);
    $count = mysqli_num_rows($insert_result);
    
     $row=mysqli_fetch_array($insert_result);  
    if($count==1)
    {
        
        
        
//         IF SESSION ACTIVE ID GOES TO AUTH PHP FILE AND REDIRECTED LOGIN
    $session_id = session_id(); 
        
    $_SESSION['auth'] = $session_id;
        
//       or user id use time imp hain jis time task assign karenge user ko tab pata chalega ki is user ne task assign kiya hain 
         $_SESSION['user_id'] = $row['user_id'];
         
        
        ///////////////////////////////////////////////////////////////

      $user_role = $row['user_role'];  
      
     if($user_role=='Admin'){
         
         header('Location:admin/admin_index.php');   
         
     }
        
     
     elseif($user_role=='employee'){
         header('Location:employees/leave.php');   
         
     }else{
           
        $_SESSION['error']="Email id or password Wrong!";
        header('Location:login.php');  
         
     } 
         
        

    }
    
   
    
    
    else{
        
        $_SESSION['error']="Email id or password Wrong!";
        header('Location:login.php');
      
    }
    
   
    
 
}


?>
