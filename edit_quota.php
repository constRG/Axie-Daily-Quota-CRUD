<?php 
    include("conn.php");

    if(isset($_POST['edit_quota_btn'])) {
        $ID = $_POST['id'];
        $date = $_POST['date'];
        $slp_gain = $_POST['slp_gain'];
        $mmr = $_POST['mmr'];

        mysqli_query($conn, "UPDATE `daily_quota` SET `date`='$date',`slp_gain`='$slp_gain',`mmr`='$mmr' WHERE id = $ID");
        header("location: axie_daily_quota_panel.php");
    }
?>