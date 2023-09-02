<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Edit Quota</title>
  </head>
  <body>

  <?php include_once("header.php"); ?>
  
  <?php 
        include("conn.php");
        $ID = $_GET['id'];
        $Record = mysqli_query($conn, "SELECT * FROM `daily_quota` WHERE id = $ID");
        $data = mysqli_fetch_array($Record);
    ?>

    <div id="edit_quota">
        <div class="container">
          <div class="row">
            <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="edit_quota_content">
                  <form action="edit_quota.php" method="POST" class="edit_quota_form">
                      <div class="back_btn">
                        <a href="axie_daily_quota_panel.php"><i class="fa-solid fa-circle-chevron-left"></i> Back</a>
                      </div>
                      <h1>Edit Quota <i class='fa-solid fa-pen-to-square'></i></h1>
                      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                      <input type="date" name="date" placeholder="Date" value="<?php echo $data['date'] ?>" required><br>
                      <input type="text" name="slp_gain" placeholder="SLP Gain" value="<?php echo $data['slp_gain'] ?>" required><br>
                      <input type="text" name="mmr" placeholder="MMR" value="<?php echo $data['mmr'] ?>" required><br>
                      <input type="submit" value="Edit Quota" id="edit_quota_btn" name="edit_quota_btn"> 
                  </form>
                </div>
              </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
