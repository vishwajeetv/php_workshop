<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "password";
    $dbname = "workshop";

    $connection = mysqli_connect ($dbHost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_error())
    {
        echo 'MySQL Error: ' . mysqli_connect_error();

        die('Could not connect to the database');
    }


?>