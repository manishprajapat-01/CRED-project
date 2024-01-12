<?php
include("./config/database.php");
include("middleware.php");

// all user show in table 
$sql="select * from user";
$res=$conn->query($sql);
?>

<!-- html code -->
<?php include("./include/header.php")?>
<body>
    
    <?php if(isset($_SESSION["islogin"])){ 
        include("./include/navbar.php");
        }?>  
    <?php include("./include/alert.php");?>
 
    <div>
        <h2 class="dark mt-3 mb-3 p-1">All Data</h2>
    </div>
    <table class="table table-striped">
        <tr>
            <th >id </th>
            <th>Username</th>
            <th>Email</th>
            <th colspan="2">action</th>
        </tr>
        <?php if ($res->num_rows >0) {
            while($row =$res->fetch_assoc()){  ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["username"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><a class="btn btn-outline-dark " href="edituser.php?id=<?php echo $row["id"]?>">edit</a></td>
                <td><a class="btn btn-outline-danger " href="delete.php?id=<?php echo $row["id"]?>" >Delete</a></td>
                <td><a class="btn btn-outline-success " href="showdata.php?id=<?php echo $row["id"]?>" >show data</a></td>
            </tr>
            
        <?php }}else{
            echo "<tr><td colspan='3'> Something went worng</td></tr>";
        } ?>
    </table>

    
</body>
