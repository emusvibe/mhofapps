<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Hello, world!</title>
</head>

<body>

  <div class="container">
    <!-- Login Form Start -->
    <div class="row justify-content-center wrapper" id="login-box">
      <div class="col-lg-10 my-auto">
        <div class="card-group myShadow">
          <div class="card rounded-left p-4" style="flex-grow:1.4;">
            <h1 class="text-center font-weight-bold text-primary">Sign Into Account</h1>
            <hr class="mg-3">
            <form action="#" id="login-form" method="POST" class="px-3">
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-1">
                    <i class="far fa-envelope fa-lg"></i>
                  </span>
                </div>
                <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-Mail" required>
              </div>
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-1">
                    <i class="fas fa-key fa-lg"></i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password" required>
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox float-left">
                  <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                  <label for="custom-Check" class="custom-control-label">Remember Me</label>
                </div>
                <div class="forgot float-right">
                  <a href="#" id="forgot-link">Forgot Password?</a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <input type="submit" value="Sign In" id="login-btn" class="btn btn-primary btn-lg btn-block myBtn">
              </div>
            </form>
          </div>
          <div class="card justify-content-center rounded-right myColor p-4">
            <h1 class="text-center font-weight-bold text-white">Greetings User!</h1>
            <hr class="my-3 bg-light myHr">
            <p class="text-center font-weight-bolder text-light lead">Enter Your Personal Details</p>
            <button class="btn btn-outline-light btn-lg align-self-center font-width-bolder mt-4 myLinkBtn" id="register-link">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Form End -->

    <!-- Register Form Start -->
    <div class="row justify-content-center wrapper" id="register-box" style="display: none;">
      <div class="col-lg-10 my-auto">
        <div class="card-group myShadow">
          <div class="card justify-content-center rounded-left myColor p-4">
            <h1 class="text-center font-weight-bold text-white">Welcome Back!</h1>
            <hr class="my-3 bg-light myHr">
            <p class="text-center font-weight-bolder text-light lead">To stay connected please login with your personal info</p>
            <button class="btn btn-outline-light btn-lg align-self-center font-width-bolder mt-4 myLinkBtn" id="login-link">Sign In</button>
          </div>
          <div class="card rounded-right p-4" style="flex-grow:1.4;">
            <h1 class="text-center font-weight-bold text-primary">Create Account</h1>
            <hr class="mg-3">
            <form action="#" id="register-form" method="POST" class="px-3">
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-1">
                    <i class="far fa-user fa-lg"></i>
                  </span>
                </div>
                <input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Full Name" required>
              </div>
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-1">
                    <i class="far fa-envelope fa-lg"></i>
                  </span>
                </div>
                <input type="email" name="email" id="remail" class="form-control rounded-0" placeholder="E-Mail" required>
              </div>
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-1">
                    <i class="fas fa-key fa-lg"></i>
                  </span>
                </div>
                <input type="password" name="password" id="rpassword" class="form-control rounded-0" placeholder="Password" required minlength="5">
              </div>
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-1">
                    <i class="fas fa-key fa-lg"></i>
                  </span>
                </div>
                <input type="password" name="cpassword" id="cpassword" class="form-control rounded-0" placeholder="Confirm Password" required minlength="5">
              </div>

              <div class="form-group">
                <input type="submit" value="Sign Up" id="register-btn" class="btn btn-primary btn-lg btn-block myBtn">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>


    <!-- Register Form End -->

    <!-- Forgot Password Start-->
    <div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
      <div class="col-lg-10 my-auto">
        <div class="card-group myShadow">
          <div class="card justify-content-center rounded-left myColor p-4">
            <h1 class="text-center font-weight-bold text-white">Reset Password</h1>
            <hr class="my-3 bg-light myHr">
            <!-- <p class="text-center font-weight-bolder text-light lead">Enter Your Personal Details</p> -->
            <button class="btn btn-outline-light btn-lg align-self-center font-width-bolder mt-4 myLinkBtn" id="back-link">Back</button>
          </div>
          <div class="card rounded-right p-4" style="flex-grow:1.4;">
            <h1 class="text-center font-weight-bold text-primary">Forgot Password</h1>
            <hr class="mg-3">
            <p class="lead text-center text-secondary">Enter Registered Email To Receive Reset Instructions</p>
            <form action="#" id="forgot-form" method="POST" class="px-3">
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-1">
                    <i class="far fa-envelope fa-lg"></i>
                  </span>
                </div>
                <input type="email" name="email" id="femail" class="form-control rounded-0" placeholder="E-Mail" required>
              </div>
              <div class="form-group">
                <input type="submit" value="Reset Password" id="forgot-btn" class="btn btn-primary btn-lg btn-block myBtn">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- Forgot Password End -->

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> -->
  <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#register-link").click(function() {
        $("#login-box").hide();
        $("#register-box").show();
      });
      $("#login-link").click(function() {
        $("#register-box").hide();
        $("#login-box").show();
      });
      $("#forgot-link").click(function() {
        $("#login-box").hide();
        $("#forgot-box").show();

      });
      $("#back-link").click(function() {
        $("#login-box").show();
        $("#forgot-box").hide();
      });

    });
  </script>

  </script>
</body>

</html>