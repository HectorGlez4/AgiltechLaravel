<?php?>

<!doctype html>
<html>

<?php 
  $pageTitle = "Login";
  include_once("inc/head.php");
 ?>
<link rel="stylesheet" href="../../css/login.css">
<body>
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4" >
          <div class="account-wall">
              <img class="thumbnail img-responsive" src="../../assets/img/logo-agiltech.png"
                  alt="" >
              <form class="form-signin">
              <input type="text" class="form-control" placeholder="Email" required autofocus>
              <input type="password" class="form-control" placeholder="Password" required>
              <a href="interventions.php"><button class="btn btn-lg btn-primary btn-block" type="button" href="interventions.php">
                  Log in</button></a>
              
              </form>
          </div>
      </div>
    </div>
  </div>
<?php include_once("inc/footer.php"); ?>
</body>
</html>