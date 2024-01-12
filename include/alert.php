<?php

if(isset($_SESSION["success"])){  
echo $_SESSION["success"];
unset($_SESSION["success"]);
}
if(isset($_SESSION["error"])){
    echo $_SESSION["error"];
    unset($_SESSION["error"]);
}
if(isset($_SESSION["out"])){
    echo $_SESSION["out"];
    unset($_SESSION["out"]);
} 
if(isset($_SESSION["delete"])){
    echo $_SESSION["delete"];
    unset($_SESSION["delete"]);
} 
if(isset($_SESSION["loginfirst"])){
    echo $_SESSION["loginfirst"];
    unset($_SESSION["loginfirst"]);
    
} 

?>