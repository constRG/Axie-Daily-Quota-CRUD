<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `daily_quota` WHERE id = $id");
    header("location: axie_daily_quota_panel.php");
?>