
<?php include"../db.php";?>
<?php include "admin_header.php"; ?>

<?php 


// UPDATE USER  QUERY /////////
function update_user(){

global $connection;
  
    
    if(isset($_POST['update'])){
    
      $user_id = $_POST['user_id']; 
          $user_name = $_POST['user_name']; 
          $user_email = $_POST['user_email']; 
        $user_role =$_POST['user_role']; 
          $department = $_POST['department']; 

    
  $query = "UPDATE users SET ";
    $query .="user_name='{$user_name}',"; 
  
    
    $query .="user_email= '{$user_email}', ";
     $query .="user_role = '{$user_role}', "; 
     $query .="department = '{$department}' "; 
     $query .="WHERE user_id  = '{$user_id}'"; 
          
          
    $update_user_query = mysqli_query($connection,$query);
        
   
       echo "
       
       <div class='alert alert-success alert-dismissible' role='alert'>
				    <button type='button' class='close' data-dismiss='alert'>&times;</button>
				    <div class='alert-icon contrast-alert'>
					 <i class='icon-check'></i>
				    </div>
				    <div class='alert-message'>
				      <span><strong>Success!</strong>User successfully Updated</span>
				    </div>
                  </div> 
          
       "; 
           
    if(!$update_user_query){
      die("QUERY FAILED" . mysqli_error($connection));  
        
 }
        
    }
    
}

function register_user_admin(){
    global $connection;
    
    
   if(isset($_POST['submit'])){
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_password =md5($_POST['user_password']);
$user_role =$_POST['user_role'];
$department = $_POST['department'];

$insert_query = "INSERT INTO `users`(`user_id`, `user_name`, `user_email`, `user_password`,`user_role`, `department`) VALUES ('','$user_name','$user_email','$user_password','$user_role','$department') ";

$insert_result = mysqli_query($connection,$insert_query);

$_SESSION['success']="Data insert successfully";


if(!$insert_result){

die("QUERY FAILED" . mysqli_error($connection));
}

} 
    
  
}






function assign_leave(){
    
    global $connection;
    
    
    
    
    if(isset($_POST['v_form'])){
$v_form = $_POST['v_form'];
$v_to = $_POST['v_to'];
$e_leave = $_POST['e_leave'];
$m_leave = $_POST['m_leave'];
$c_leave = $_POST['c_leave'];
$assign_by=$_POST['assign_by'];
$emplist = $_POST['emp'];


// HAMIN CHECKBOX DATA SELECTED USER KA CHAIYE ISILIYE FOREACH LOOP emp ko variable main convert kiya humne
foreach($emplist as $emp){


$insert_leave = "INSERT INTO `assign_leave`(`id`, `v_form`, `v_to`, `e_leave`, `m_leave`, `c_leave`,`assign_to`, `assign_by`) VALUES('','$v_form','$v_to','$e_leave','$m_leave','$c_leave','$emp','$assign_by') ";

$leave_result = mysqli_query($connection,$insert_leave);


if(!$leave_result){
die("QUERY FAILED" . mysqli_error($connection));
}


}

}
    
    
    
    
    
    
}



// APPROVE LEAVe BY ADMIN

function approve_leave(){
    
    global $connection;
    
       if(isset($_GET['id'])){
    $id = $_GET['id'];

    
    $query ="UPDATE applied_leave SET status ='approve' WHERE id ='$id'";
  
    $show_approve = mysqli_query($connection,$query);
          
   if($show_approve){
             $_SESSION['success']="leave approve successfully";
    header('Location:all_applied_leaves.php'); 
       
   }    
       

  
}
}




function reject_leave(){
    
    global $connection;
    
        
    
   if(isset($_GET['rej'])){
    $id = $_GET['rej'];

    
    $reject_query ="UPDATE applied_leave SET status ='reject' WHERE id ='$id'";
  
    $reject_status = mysqli_query($connection,$reject_query);
       
       if($reject_status){
       
              
       $_SESSION['rejected']="leave Rejected";
    header('Location:all_applied_leaves.php');    
           
           
       }
       
       

}
    
    
    
}





?>