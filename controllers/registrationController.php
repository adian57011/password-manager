<?php
require_once("../models/userModel.php");

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "")
    {
        echo "Username cannot be empty";
    }
    else
    {
        if($password == "")
        {
            echo "Password cannot be empty";
        }

        else
        {
            if(checkUsername($username))
            {
                echo "Username already exist";
            }
            else
            {
                $hash = password_hash($password,PASSWORD_DEFAULT);

                $status = registration($username,$hash);
                if(!$status)
                {
                    echo "Registartion failed";
                }
                else
                {
                    echo "Registration Successfull";
                }

            }
        }
    }
}

else
{
    echo "Unauthorize Access!";
}

?>