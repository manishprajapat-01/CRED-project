<?php
include("./config/database.php");


if(isset($_POST["submit"])){
    extract($_POST); 
    if(empty($email)){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Please Enter email!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }elseif(empty($password)){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Please Enter password!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

    }else{
        // check data in database
        $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
        $res=$conn->query($sql);

        if($res->num_rows>0){
            $row =$res->fetch_assoc();
            $_SESSION['islogin']=true;
            $_SESSION["userdata"]=$row;
            $_SESSION["success"]="<h3 class='alert alert-success'>welcome $row[username] </h3>";
            // $_SESSION["success"]='<div class="alert alert-success alert-dismissible fade show" role="alert">
            // welcome $row["username"]
            // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            header("location:userdata.php"); 
        }else{
            $_SESSION["out"]='<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>User not found!</strong> Please enter vaild email and password
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
        }

    };
};

?>

<?php include("./include/header.php")?>
<body>
    <!-- include navbar -->
    <?php include("./include/navbar.php")?>
    <!-- include session alert -->
    <?php  if(isset($_SESSION["out"])){
        include("./include/alert.php");
    };
    ?>
    <!-- html code -->
  <div id=box class="mt-3">
    <h1 class="center p-3 bg-primary-subtle mt-3 border border-primary-subtle rounded-3">login form </h1>
    <!-- form -->
    <div class= "mt-5 p-3 border border-primary-subtle rounded-3">
        <form  action="" method="post">
                <div class="mb-3 mt-3">
                    <label class="form-lable" for="email">Email</label>
                    <input class="form-control " type="email" name="email" id="email" placeholder="email">
                </div>
                <div class="mb-3">
                    <label class="form-lable" for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="password">
                </div>
                <div>
                    <input  class="btn btn-outline-primary" type="submit" name="submit"  >
                </div>
            </form>
    </div>

    </div>
</body>

    

