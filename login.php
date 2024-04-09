<?php include_once 'config.php'; ?>
<?php include_once 'operations/login_op.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Practical Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Practical Admin Personal Website" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Sweet Alert -->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/animate.css/animate.min.css" rel="stylesheet" type="text/css">

     <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body id="body" class="auth-page" style="background-image: url('assets/images/p-1.png'); background-size: cover; background-position: center center;">
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="login.php" class="logo logo-admin">
                                            <img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Practical Web</h4>
                                        <p class="text-muted  mb-0">Sign in to continue to Admin.</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" action="" method="POST" enctype="multipart/form-data" name="login_from" onsubmit="return validateForm();">
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="email" class="form-control"  name="email" placeholder="Enter email">
                                        </div><!--end form-group--> 
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">                            
                                        </div><!--end form-group--> 
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit" name="btn_login" >Login</button>
                                                </div>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- Sweet-Alert  -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweet-alert.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        function validateForm() {
            var email = document.forms["login_from"]["email"].value;
            var password = document.forms["login_from"]["password"].value;
            if (email == "") {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Email must be filled out',
                    text: 'Please check the following',
                    timer: 2500
                });
                return false;
            }
            if (password == "") {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Password must be filled out',
                    text: 'Please check the following',
                    timer: 2500
                });
                return false;
            }
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)){
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Invalid email format',
                    text: 'Please check the following',
                    timer: 2500
                });
                return false;
            }
        }
    </script>
</body>
</html>
<?php include 'include/alert_php.php'; ?>