<?php 

$connection = mysqli_connect('localhost','root','','lms');

if(!$connection){

die("QUERY FAILED" . mysqli_error($connection));
    
}




?>