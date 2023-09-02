<?php 
    include("conn.php");
    if(isset($_POST['add_quota_btn'])) {
        $date = $_POST['date'];
        $slp_gain = $_POST['slp_gain'];
        $mmr = $_POST['mmr'];

        mysqli_query($conn, "INSERT INTO `daily_quota` (`date`, `slp_gain`, `mmr`) VALUES ('$date','$slp_gain', '$mmr')");
        header("location: axie_daily_quota_panel.php");
    } 

?>