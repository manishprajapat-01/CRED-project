<?php


include("./config/database.php");

if(isset($_GET["id"])){
    $sql="select * from user where id=". $_GET["id"];
    $res=$conn->query($sql);
    if($res->field_count>0){
        $row= $res->fetch_assoc();
        extract($row);
        
    }

}

include("./include/header.php");
include("./include/navbar.php");
?>

<body>
    <div id=box  class="p-3 mt-5"  style="height:350px;">
        <h3 class="center mb-4">All Information <?php echo $username;?></h3>
        <div class="card " style="width: auto;">
          <ul class="list-group list-group-flush">
            <div class="card-header">
                UserName = <?php echo $username;?>
            </div>
            <li class="list-group-item">Id - <?php echo $id;?></li>
            <li class="list-group-item">Email - <?php echo $email;?></li>
            <li class="list-group-item">Password - <?php echo $password;?></li>
            <li class="list-group-item">Register Date & Time - <?php echo $date;?></li>
          </ul>
        </div> 
        <div class="mt-3">

            <a class="btn btn-dark ms-2 me-4" href="edituser.php?id=<?php echo $row["id"]?>">edit</a>
            <a class="btn btn-danger ms-2 me-4" href="delete.php?id=<?php echo $row["id"]?>" >Delete</a> 
            <a class="btn btn-info ms-2 me-4" href="userdata.php" >All data</a> 
        </div>  



    </div>

</body>