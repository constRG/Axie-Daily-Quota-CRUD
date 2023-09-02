<?php 
    include("conn.php");
    $query = "SELECT COUNT(id) AS days_played FROM `daily_quota`";
    $query_result =  mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($query_result))
    {
        $days_played = "Days Played: "." ".$row['days_played'];
    }

?> 