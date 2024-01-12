<?php
//database connection 

$servername="localhost";
$username="root";
$password="";
$dbname="phpt";
$conn=@ new mysqli(
    $servername,
    $username,
    $password,
    $dbname);
// echo "<pre>"; print_r($conn);
if($conn->connect_error){
    echo "error has accored".$conn->connect_error;

}
session_start();
// session_destroy();
?>