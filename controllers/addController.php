<?php

const KEY = "57011";

if(isset($_POST['submit']))
{
    $website = $_POST['website'];
    $username = $_POST['username'];
    $password = $_POST['password'];

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
                //openssl ekta encrypt method. cipher algo ekta encryption algorithm. iv ekta codejeita algoritm er size wise nite hoi. option diya kisu ekta hoi
                //main jinish hoitese key. jeita decprytion e lagbe. good luck!
                $cipher_algo = "AES-256-CBC";
                $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));

                $encrypt = base64_encode(openssl_encrypt($password,$cipher_algo,KEY,0,$iv));

                $status = add($website,$username,$encrypt,$_SESSION['id']);

                if(!$status)
                {
                    return "add failed";
                }
                else
                {
                    echo "Added!";
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