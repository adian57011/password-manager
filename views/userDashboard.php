<?php
session_start();
if($_SESSION["username"] != null)
{
    echo "Unauthorize access";
}
?>

<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
         <h1>Welcome <?php $_SESSION['username'];?></h1>

         <a href="add.php">Add password directory</a>
         <a href="view.php">View All</a>
         <a href="logout.php">Logout</a>
    
    </body>
</html>
