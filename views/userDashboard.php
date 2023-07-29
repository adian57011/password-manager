<?php
session_start();
if($_SESSION["username"] == null && $_SESSION["id"] == null)
{
    echo "Unauthorize access";
}
else{
?>

<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
         <h1>Welcome <?php echo  $_SESSION['username'];?></h1>

         <a href="add.php">Add password directory</a> <br>
         <a href="views.php">View All</a> <br>
         <a href="../controllers/logout.php">Logout</a> <br>
    
    </body>
</html>
<?php
}
?>
