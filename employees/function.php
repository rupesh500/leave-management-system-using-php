<?php include "../auth/auth.php"; ?>
<?php include "../db.php"; ?>







<?php 

function add_leave(){
    
    global $connection;
    
    if(isset($_POST['i_from'])){
    
    $i_from = $_POST['i_from'];
     $i_to = $_POST['i_to'];
     $e_leave = $_POST['e_leave'];
     $m_leave = $_POST['m_leave'];
     $c_leave = $_POST['c_leave'];
     $apply_by=$_POST['assign_by'];
      $status = "pending";
    

$apply_leave = "INSERT INTO `applied_leave`(`id`, `i_from`, `i_to`, `e_leave`, `m_leave`, `c_leave`,`apply_by`,`status`) VALUES('','$i_from','$i_to','$e_leave','$m_leave','$c_leave','$apply_by','$status') ";
    
   $leave_result = mysqli_query($connection,$apply_leave); 

    
    if($leave_result){
        
                
  $_SESSION['success']="Leave apply successfully";

        if(isset($_SESSION['success']))
      {
       echo  $_SESSION['success'];
           unset($_SESSION['success']);
          
      }        
        
        
        
        
        
    }
    
 
    
}
    
}




?>