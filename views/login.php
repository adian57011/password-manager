<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="../controllers/loginController.php" method = "POST">
            <label for="username">Username</label>
            <input type="text" name = 'username' placeholder="Enter username"><br>
            
            <label for="password">Password</label>
            <input type="password" name = 'password' placeholder="Enter Password"><br>

            <input type="submit" name = 'submit' value="Login">
        </form>
        <br>
        <a href="registration.php">Register now?</a>
    </body>
</html>