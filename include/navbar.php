    <?php
    include("./include/header.php")
    ?>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-Warning  bg-primary-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Home</a>
                <div class="collapse navbar-collapse" >
                    <div class="navbar-nav d-flex">
                        <a class="nav-link active" aria-current="page" href="userdata.php">Show All Data</a>
                        
                    </div>
                </div>
            </div> 
            <div class="collapse navbar-collapse" >
                <div class="navbar-nav d-flex">
                 <?php   
                    if(isset($_SESSION["islogin"])){   ?>     
                      <a href="logout.php" class="nav-link  btn btn-Warning ">logout</a>    
                    <?php } else{?>        
                        <a href="login.php"  class="nav-link  btn btn-secondary">login</a>
                        <a href="register.php"  class="nav-link btn btn btn-secondary ">Register</a>        
                    <?php } ?>        
                </div>  
            </div>
   </nav>
    </header>
