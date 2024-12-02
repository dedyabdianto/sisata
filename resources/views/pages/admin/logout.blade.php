<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="{{ asset ('pariwisata/admin/assets/images/logo-papsel2.png') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset ('pariwisata/admin/assets/css/bootstrap.min.css') }}" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset ('pariwisata/admin/assets/css/all.min.css') }}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset ('pariwisata/admin/style.css') }}">
      <title>Dinas Pariwisata PS - Login </title>
</head>
<body>
    <div class="login-page" style="background-image: url({{ asset ('pariwisata/admin/assets/images/bg.jpg);') }}">
        <div class="login-from-wrap">
            <form class="login-from">
                <h1 class="site-title">
                    <a href="#">
                        <img style="height: 100px;width: 80px;" src="{{ asset ('pariwisata/admin/assets/images/logo-papsel2.png') }}" alt="">
                    </a>
                </h1>
                <div class="form-group">
                    <label for="first_name1">User Name</label>
                    <input type="text" class="validate">
                </div>
                <div class="form-group">
                    <label for="last_name">Password</label>
                    <input id="last_name" type="password" class="validate">
                </div>
                <div class="form-group">
                    <a class="button-primary" href="dashboard.html">Login</a>
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="{{ asset ('pariwisata/admin/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/canvasjs.min.js') }}"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/dashboard-custom.js') }}"></script>
</body>
</html>