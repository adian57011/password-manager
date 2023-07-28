<?php
require_once("../models/userModel.php");
session_start();

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST["password"];

    if($username == null)
    {
        echo "Enter name";
    }
    else
    {
        if($password == null)
        {
            echo "Enter password";
        }

        else
        {
          $res = login($username);
          if(!$res)
          {
            echo "invalid credentials";
          }
          else
          {
            $id = $res['id'];
            $hash = $res['password'];
            
            $verify = password_verify($password,$hash);

            if(!$verify)
            {
                echo "Invalid Credentials";
            }

            else
            {
                echo "Login Successfull";
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                header("location:../views/userDashboard.php");
            }
          }
        }
    }

}

else
{
    echo "Unauthorize Access";
}
?>