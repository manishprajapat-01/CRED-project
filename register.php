<?php
include("./config/database.php");

if(isset($_POST["submit"])){

    if(empty($_POST["username"])){
        echo "username is empty <br>";
    }elseif(empty($_POST["email"])){
        echo "email is empty";
    }elseif(empty($_POST["password"])){
        echo "password is empty";
    }else{
        extract($_POST);
        $date=date("Y-m-d h:i:s");
        $sql="insert into user (username,email,password,date)
        values ('$username','$email','$password','$date')";
        $res=$conn->query(($sql));
        if($res){
            // $_SESSION["success"]="inset data sussesfully";
            $_SESSION['islogin']=true;
            $_SESSION["success"]='<div class="alert alert-info alert-dismissible fade show" >
            Registeration sussesfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }else{
            $_SESSION["out"]='<div class="alert alert-warning alert-dismissible fade show" role="alert">
            SOmething WENT wrong
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        header("location:userdata.php");
    };
};
?>

<?php include("./include/header.php")?>
<!-- html code -->
<body>
<?php include("./include/navbar.php");?>
    <div id=box class="mt-3">
    <h3 class="center p-3 bg-primary-subtle mt-3 border border-primary-subtle rounded-3">Registeration form </h3>
        <div class= "mt-5 p-3 border border-primary-subtle rounded-3">
            <form  action="" method="post">
                <div class="mb-3 mt-3">
                    <label class="form-lable" for="name">Username</label>
                    <input class="form-control " type="text" name="username" id="name" placeholder="username">
                </div>
                <div class="mb-3">
                    <label class="form-lable" for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="email">
                </div>
                <div class="mb-3">
                    <label class="form-lable" for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="password">
                </div>
                <div>
                    <input  class="btn btn-primary" type="submit" name="submit"  >
                </div>
            </form>

        </div>
    
       
        
    </div>
    
</body>

<?php


//update query

// $date=date("Y-m-d h:i:s");
// echo $date;
// $sql="insert into user (username,password,time)
// values ('manish','1234ewq','$date')";
// $sql="select * from user";
// $sql="update user set username='rahul' where id=2";
// $sql="delete from user where id=4";
// $result=$conn->query(($sql));
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         echo "<pre>";
//         print_r($row);
//         echo "</pre>";
//     };
// };
?>