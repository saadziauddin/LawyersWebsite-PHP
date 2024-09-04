<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../AdminPanel/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../AdminPanel/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../AdminPanel/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../AdminPanel/css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="AdminPanel/images/favicon.png" /> -->
</head>

<body>

  <form action="../coding.php" method="POST">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <!-- <div class="brand-logo"><img src="AdminPanel/images/logo.svg" alt="logo"></div> -->
              <h4>New here?</h4>
              <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
              <form class="pt-3">
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-dark"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" name="name" required placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="far fa-envelope-open text-dark"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0" name="email" required placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-solid fa-key text-dark"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="password" required placeholder="Password">                        
                  </div>
                </div>

                <div class="form-group">
                  <label>Repeat Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-solid fa-key text-dark"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="repeatpassword" required placeholder="Repeat Password">                        
                  </div>
                </div>

                <div class="form-group">
                  <label>Contact</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-solid fa-phone text-dark"></i>
                      </span>
                    </div>
                    <input type="number" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="contact" required placeholder="Enter Your Contact">                        
                  </div>
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-solid fa-location-dot text-dark"></i>
                      </span>
                    </div>
                    <input type="textarea" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="address" required placeholder="Enter Your Address">                        
                  </div>
                </div>

                <div class="form-group">
                  <label>City</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-solid fa-city text-dark"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="city" required placeholder="Enter Your City">                        
                  </div>
                </div>

                <div class="form-group">
                  <label>Country</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-solid fa-city text-dark"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="country" required placeholder="Enter Your Country">                        
                  </div>
                </div>

<!--<div class="form-group">
                  <label>Upload Picture</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-solid fa-file"></i>
                      </span>
                    </div>

                   <input type="file" class="form-control form-control-md border-left-2" id="customFile" name="c_p_upload" />

                  </div>
                </div> -->

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn" name="register">Register</button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Are you a Lawyer? <a href="lawyersregister.php" class="text-dark">Register</a>
                </div>
                                
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-dark">Login</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</form>




  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../AdminPanel/vendors/js/vendor.bundle.base.js"></script>
  <script src="../AdminPanel/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../AdminPanel/js/off-canvas.js"></script>
  <script src="../AdminPanel/js/hoverable-collapse.js"></script>
  <script src="../AdminPanel/js/misc.js"></script>
  <script src="../AdminPanel/js/settings.js"></script>
  <script src="../AdminPanel/js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:54 GMT -->
</html>
