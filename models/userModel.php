<?php
require_once('db.php');


function checkUsername($username)
{
    $con = connection();
    $sql = "SELECT * 
            FROM users
            WHERE username = '$username'";
    
    $query = mysqli_query($con,$sql);

    if(!$query)
    {
        return false;
    }
    return true;
}

function registration($username,$password)
{
    $con = connection();
    $sql = "INSERT INTO
    users(username,password)
    VALUES('$username','$password')";
    
    $query = mysqli_query($con,$sql);

    if(!$query)
    {
        return false;
    }
    return true;
}


//this login function returns user if user found.False if user is not found!
function login($username)
{
    $con = connection();

    $sql = "SELECT * 
    FROM users
    WHERE username = '$username'";

    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) > 0)
    {
        $row = mysqli_fetch_assoc($query);     
        return $row;
    }
    
    return false;
}

function add($website,$username,$password,$id)
{
    $con = connection();
    $sql = "INSERT INTO 
            lists(website,username,password,userId)
            VALUES('$website','$username','$password','$id')";
    
    $query = mysqli_query($con,$sql);

    if(!$query)
    {
        return false;
    }
    return true;
}

function all($userId)
{
    $con = connection();
    $sql = "SELECT *
            FROM lists
            WHERE userId = '$userId'";
    
    $query = mysqli_query($con,$sql);
    return $query;
}

?>