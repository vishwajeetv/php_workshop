<?php

    require 'validation.php';
    require 'database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $error = array();

        $username = checkIfEmpty($_POST['username']);
        $password = checkIfEmpty($_POST['password']);

        if(!$username)
        {
            $error['usernameError'] = 1;

        }
        if(!$password)
        {
            $error['passwordError'] = 1;

        }

        if($error)
        {
            header("location:login.php");
        }
        else
        {
            doLogin($username,$password );
        }
    }

    function doLogin($username, $password )
    {
        $loginQuery="SELECT * FROM user WHERE username='$username' and password='$password'";

        $result = mysqli_query( $GLOBALS['connection'], $loginQuery);

        $count = mysqli_num_rows ( $result );

        // If result matched $username and $password, table row must be 1 row
        if($count==1)
        {
            session_start();
            $_SESSION['username'] = $username;
            header("location:newsFeed.php");
        }
        else
        {
            echo "Wrong Username or Password";
        }
    }