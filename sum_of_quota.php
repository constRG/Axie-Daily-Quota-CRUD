<?php 
    include("conn.php");
    $query = "SELECT SUM(slp_gain) AS sum FROM `daily_quota`";
    $query_result =  mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($query_result))
    {
        $total_slp_gain = "Total SLP Gain: "." ".$row['sum'];
    }
?>