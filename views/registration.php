<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <form action="../controllers/registrationController.php" method = "POST">
            <label for="username">Username</label>
            <input type="text" name = 'username' placeholder="Enter username"><br>
            
            <label for="password">Password</label>
            <input type="password" name = 'password' placeholder="Enter Password"><br>

            <input type="submit" name = 'submit' value="registration"><br>
        </form>

        <a href="login.php">Login now?</a>
    </body>
</html>