<?php
include('../controllers/viewController.php');
session_start();

if($_SESSION["id"] == null)
{
    echo "Unauthorize action";
}
else
{
    $id = $_SESSION['id'];
    $data = view($id);
?>

<html>
    <head>
        <title> View All</title>
    </head>
    
    <body>

        <h1>Welcome <?php echo  $_SESSION['username'];?></h1>

        <a href="add.php">Add password directory</a> <br>
        <a href="views.php">View All</a> <br>
        <a href="../controllers/logout.php">Logout</a> <br>

        <table>
            <tr>
                <th>Website</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($data)) {?>
            <tr>
                <td> <?php echo  $row['website']?></td>
                <td> <?php echo  $row['username']?></td>
                <td> <?php echo  $row['password']?></td>
                
            </tr>
            <?php } ?>
        </table>

        
    </body>
</html>

<?php
}
?>

