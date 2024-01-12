<?php
// edit and update
include("./config/database.php");

// find data in database and put in input 
$sql="select * from user where id=". $_GET["id"];
$res=$conn->query($sql);
if($res->field_count>0){
    $row= $res->fetch_assoc();
    extract($row);
};

// post req and update user data 
if(isset($_POST["submit"])){
    $update="update user set username='$_POST[username]' ,email='$_POST[email]', password='$_POST[password]' where id=$_GET[id]";
    $updatesuccess=$conn->query($update);   
    if($updatesuccess){
         $_SESSION["success"]='<div class="alert alert-primary alert-dismissible fade show" role="alert">
         <B> Upadated Succesfully</B>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }else{
        $_SESSION["error"]='<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Something went worng
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
    header("location:userdata.php");
};
?>
<?php include("./include/header.php")?>
<body>
<?php include("./include/navbar.php");?>
<div id=box>
    <h1 class="p-2 bg-dark-subtle mt-3 border border-primary-subtle rounded-3">Edit User </h1>
    <div class= "mt-5 p-3 border border-primary-subtle rounded-3">
        <form  action="" method="post">
                <div class="mb-3 mt-3">
                    <label class="form-lable" for="name">username</label>
                    <input class="form-control" value="<?php echo $username?>" type="text" name="username" id="name" >
                </div>
                <div class="mb-3">
                    <label class="form-lable" for="email">Email</label>
                    <input class="form-control" value="<?php echo $email?>" type="email" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label class="form-lable" for="password">password</label>
                    <input class="form-control" value="<?php echo $password?>" type="password" name="password" id="password" >
                </div>
                <div>
                    <input  class="btn btn-outline-primary" type="submit" name="submit"  >
                </div>
                
            </form>
    </div>
</div>

</body>
