<?php
require_once('../models/userModel.php');
session_start();
const KEY = "57011";

if(isset($_POST['submit']))
{
    $website = $_POST['websites'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_SESSION['id'];

    if($website == null)
    {
        echo "Website is empty";
    }
    else
    {
        if($username == null)
        {
            echo "username is empty";
        }
        else
        {
            if($password == null)
            {
                echo "password is empty";
            }
            else
            {
                $status = add($website,$username,$password,$id);

                if(!$status)
                {
                    return "add failed";
                }
                else
                {
                    header('location: ../views/userDashboard.php');
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