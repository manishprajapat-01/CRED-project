<?php
// session_start();
if(isset($_SESSION["islogin"])){
   return true;
}else{
  
    $_SESSION["loginfirst"]='<div class="alert alert-danger alert-dismissible fade show" >
    Please login first..!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';


    header("location:index.php");
}
?>