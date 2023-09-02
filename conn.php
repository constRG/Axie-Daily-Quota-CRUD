<?php 
    $server = "localhost";
    $username = "root";
    $password = "05242001";
    $database = "axie_daily_quota_db";

    $conn = new mysqli ($server, $username, $password, $database);

    if($conn -> connect_error)
    {
        die ("Connection Failed" . $conn -> connect_error);
    }
    // else 
    // {
    //      echo "connected";
    // }
?>