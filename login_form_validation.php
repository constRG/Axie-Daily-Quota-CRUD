<?php
    include("conn.php");

    if(isset($_POST['login_btn'])) {

        $query = "SELECT * FROM `user` WHERE username = '$_POST[username]' AND user_password = '$_POST[user_password]'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['status'] = $_POST['username'];
            header("location: axie_daily_quota_panel.php");
        }
        else {
            header("location: index.php?error=Incorrect Username Or User Password!");
            exit();
        }
    }
?>