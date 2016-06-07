<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/site.css')}}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>


<body>
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4" >
          <div class="account-wall">
              <img class="thumbnail img-responsive" src="{{ asset('assets/img/logo-agiltech.png')}}"
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
  <script src="{{ asset('js/jquery-2.2.3.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/jasny-bootstrap.min.js')}}"></script>
</body>
</html>