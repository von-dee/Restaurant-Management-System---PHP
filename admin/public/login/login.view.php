<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/prebuilt-pages/default-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 15:05:41 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Kweyi Foods - Admin</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="media/vendors/iconic-fonts/flat-icons/flaticon.css">
  <link href="media/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="media/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="media/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="media/css/style.css" rel="stylesheet">
  <link href="media/css/main_style.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="media/favicon.ico">

  <link href="media/img/favicon.png" rel="icon">
</head>

<body class="ms-body ms-primary-theme ms-logged-out">
 
    <?php if(isset($attempt_in)){?>
        <div class="alert-danger">
            <?php
                if($attempt_in < 3){
                    $msg =  'Invalid user name or password.';
                }else if($attempt_in =='11'){
                    $msg = 'Invalid Code entered.';
                }else if($attempt_in =='120'){
                    $msg = 'Suspended account.';
                }else if($attempt_in =='140'){
                    $msg = 'Locked. Wait for 5min and try again.';
                }else if($attempt_in =='110'){
                    $msg = 'User account locked.';
                }
            ?>   
        </div>
    <?php }  $token= generateFormToken(); ?>

  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->

  <main class="body-content">

    <div class="ms-content-wrapper ms-auth">
      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form class="needs-validation" action="index.php?action=index&pg=1" method="post" enctype="application/x-www-form-urlencoded" name="myform" id="loginForm" autocomplete="off">
              <img src="media/img/logo.png" alt="logo">
              <br><br><br>
              <h5>Login</h5>
              <p>Please enter your email and password to continue</p>

                <?php echo (($msg))?'<div class="errormsg">'.$msg.'</div>':''; ?>
                <input id="token" name="token" value="<?php echo $token ; ?>" type="hidden" />  

              <div class="mb-3">
                <label for="validationCustom08">Email Address</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="uname" name="uname" placeholder="Email Address" required="">
                  <div class="invalid-feedback">Please provide a valid email.</div>
                </div>
              </div>
              <div class="mb-2">
                <label for="validationCustom09">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required="">
                  <div class="invalid-feedback">Please provide a password.</div>
                </div>
              </div>
              <div class="form-group">
                <label class="ms-checkbox-wrap">
                  <input class="form-check-input" type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                </label> <span> Remember Password </span>
                <label class="d-block mt-3"><a href="#" class="btn-link" data-toggle="modal" data-target="#modal-12">Forgot Password?</a>
                </label>
              </div>
              
              <input type="hidden" name="doLogin" id="doLogin" value="systemPingPass" />
              
              <button class="btn btn-primary mt-4 d-block w-100" type="submit"  onclick="document.myform.submit();">Sign In</button> 
              
              <p class="mb-0 mt-3 text-center">Don't have an account? <a class="btn-link" href="default-register.html">Create Account</a> 
              </p>


            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Forgot Password Modal -->
    <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
      <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button> <i class="flaticon-secure-shield d-block"></i>
            <h1>Forgot Password?</h1>
            <p>Enter your email to recover your password</p>
            <form method="post">
              <div class="ms-form-group has-icon">
                <input type="text" placeholder="Email Address" class="form-control" name="forgot-password" value=""> <i class="material-icons">email</i>
              </div>
              <button type="submit" class="btn btn-primary shadow-none">Reset Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="media/js/jquery-3.3.1.min.js"></script>
  <script src="media/js/popper.min.js"></script>
  <script src="media/js/bootstrap.min.js"></script>
  <script src="media/js/perfect-scrollbar.js">
  </script>
  <script src="media/js/jquery-ui.min.js">
  </script>
  <!-- Global Required Scripts End -->
  <!-- Costic core JavaScript -->
  <script src="media/js/framework.js"></script>
  <!-- Settings -->
  <script src="media/js/settings.js"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/prebuilt-pages/default-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 15:05:42 GMT -->
</html>