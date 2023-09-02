<?php 
  session_start();
  if($_SESSION['status']){}
  else 
  {
    header("location: index.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Axie Daily Quota Panel</title>
  </head>
  <body>
      
    <?php include_once("header.php"); ?>

    <div id="axie_daily_quota_panel">
        <div class="container">
            <div class="axie_daily_quota_panel_content">
                <div class="axie_daily_quota_table_data_list">
                    <button id="add_quota_btn" data-bs-toggle="modal" data-bs-target="#add_quota_modal">Add Quota <i class="fa-solid fa-plus"></i></button>
                    <button id="view_axie_team_btn" data-bs-toggle="modal" data-bs-target="#axie_team_modal">View Axie Team <i class="fa-solid fa-eye"></i></button>
                    
                    <?php 
                        include_once("sum_of_quota.php");
                        include_once("days_played.php");
                        echo "<span class='total_slp_gain'>$total_slp_gain</span>";
                        echo "<span class='days_played'>$days_played</span>";
                    ?>
                    <table class="axie_daily_quota_table">
                        <thead>
                            <tr>
                                <td>Date</td>
                                <td>SLP Gain</td>
                                <td>MMR</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include("conn.php");
                                $result = mysqli_query($conn, "SELECT * FROM `daily_quota` ORDER by date DESC");
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "
                                       <tr>
                                            <td>$row[date]</td>
                                            <td>$row[slp_gain]</td>
                                            <td>$row[mmr]</td>
                                            <td>
                                            <a href='edit_quota_form.php? id=$row[id]' class='edit_quota_btn'><i class='fa-solid fa-pen-to-square'></i></a>
                                            &emsp;
                                            <a href='delete_quota.php? id=$row[id]' class='delete_quota_btn'><i class='fa-solid fa-trash'></i></a>
                                            </td>
                                       </tr>
                                    ";
                                }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="add_quota_modal">
        <div class="modal-dialog">
            <div class="modal-content add_quota_modal_content">
                <div class="modal-header">
                <h1 class="add_quota_title">Add Quota <i class="fa-solid fa-plus"></i></h1>
                <button type="button" class="close_modal_btn" data-bs-dismiss="modal" aria-label="Close">
                    &times;
                </button>
                </div>
                <div class="modal-body">
                <form action="add_quota.php" method="POST" class="add_quota_form">
                    <input type="date" name="date" required><br>
                    <input type="text" placeholder="SLP Gain" name="slp_gain" required><br>
                    <input type="text" placeholder="MMR" name="mmr" required><br>
                    <input type="submit" value="Add Quota" name="add_quota_btn" id="add_quota_btn">
                </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="axie_team_modal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content axie_team_modal_content">
                <div class="modal-header">
                    <h1 class="axie_team_title">Axie Team: DBP</h1>
                    <button type="button" class="close_modal_btn" data-bs-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="axie_team">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="axie_pet">
                                    <img src="assets/img/dusk_axie_img.jpg" alt="dusk_axie_img">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="axie_pet">
                                    <img src="assets/img/beast_axie_img.jpg" alt="beast_axie_img">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="axie_pet">
                                    <img src="assets/img/plant_axie_img.jpg" alt="plant_axie_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    


    <button id="scroll_to_top_arrow">
        <i class="fas fa-arrow-up"></i>
    </button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>