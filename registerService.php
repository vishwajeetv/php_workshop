<?php

require 'validation.php';
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $error = array();

    $username = checkIfEmpty($_POST['username']);
    $password = checkIfEmpty($_POST['password']);
    $confPassword = checkIfEmpty($_POST['password']);
    $email = checkIfEmpty($_POST['email']);

    if(!$username)
    {
        $error['usernameError'] = 1;


    }
    if(!$password)
    {
        $error['passwordError'] = 1;

    }

    if($confPassword)
    {
        if($password != $confPassword)
        {
            $error['confPasswordError'] = 1;

        }
    }
    else{
        $error['confPasswordError'] = 1;

    }

    if(!email)
    {
        $error['emailError'] = 1;

    }

    if($error)
    {
        header("location:register.php");
    }
    else
    {
        doRegister($username, $password, $email );
    }
}

function doRegister($username, $password, $email )
{
    $registerQuery="INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    $result = mysqli_query( $GLOBALS['connection'], $registerQuery);



    // If result matched $username and $password, table row must be 1 row
    if($result)
    {
        session_start();
        $_SESSION['username'] = $username;
        header("location:newsFeed.php");
    }
    else
    {
        echo "Registration Failed";
    }
}