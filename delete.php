<?php
include("./config/database.php");
// delete query
if(isset($_GET["id"])){
    $sqlD="delete from user where id='$_GET[id]'";
    $deleted=$conn->query($sqlD);
    if($deleted){
        $_SESSION["delete"]='<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>deleted user data</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }else{
        $_SESSION["error"]='<div class="alert alert-warning alert-dismissible fade show" role="alert">
            something went wrong
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    };
    header("location:userdata.php");
    // header("location:userdata.php");
    
}
echo"deleted";
?>