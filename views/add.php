<?php
session_start();

if($_SESSION["id"] == null && $_SESSION["username"] == null)
{
    echo "Unauthorize access";
}
else{
?>

<html>
    <head>
        <title>Add</title>
    </head>
    <body>
        <h1>Welcome <?php $_SESSION['username'];?></h1>

        <a href="add.php">Add password directory</a>
        <a href="view.php">View All</a>
        <a href="../controllers/logout.php">Logout</a>

        <div class = "container">
            <form action="../controllers/addController.php" method="POST">
                <label for="websites">Websites: </label>
                <input type="text" name = "websites" placeholder="Website Name">
                
                <br>
                <label for="username">Username: </label>
                <input type="text" name = "username" placeholder = "Enter username">

                <br>
                <label for="password">Password: </label>
                <input type="password" name = "password" placeholder = "Enter password" onsubmit="return confirm('Are you sure about the password?')">

                <br>
                <input type="submit" name="submit" value="Add">

            </form>
        </div>
    </body>
</html>

<?php
}
?>