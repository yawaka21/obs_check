<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "obs_db";

    $conn = new mysqli($host,$username,$password,$db_name);

    if($conn)
    {
    
    }
    else
    {
        echo 'Error';
    }

?>