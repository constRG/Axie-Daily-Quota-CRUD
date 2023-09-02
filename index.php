
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Axie Daily Quota Login Form</title>
  </head>
  <body>
      
    <div class="login_panel">
        <div class="container">
          <div class="row">
            <div class="col-lg-4"></div>
              <div class="col-lg-4">
                <div class="login_panel_content">
                  <form action="login_form_validation.php" method="POST" class="login_panel_form">
                    <img src="assets/img/axie_infinity_logo.png" alt="axie_infinity_logo">
                    <h1 class="login_panel_title">Axie Daily Quota by RG</h1>
                    <input type="text" placeholder="Username" name="username" required><br>
                    <input type="password" placeholder="User Password" name="user_password" required><br>
                    <input type="submit" class="login_btn" value="Login" name="login_btn">
                  </form>
                </div>
              </div>
            <div class="col-lg-4"></div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>