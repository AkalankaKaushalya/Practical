<?php include_once 'config.php'; ?>
<?php include_once 'security.php'; ?>
<?php include_once 'operations/add_comp_op.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php include_once 'include/header.php'; ?>
</head>
    <body id="body">
        <!-- sidebar -->
        <?php include_once 'include/slider.php'; ?>
        <!-- end sidebar-->
        <!-- navbar Start -->
        <?php include_once 'include/navbar.php'; ?>
        <!-- navbar End -->
        <div class="page-wrapper">
            <div class="page-content-tab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6"></div>
                        <div class="col-md-6 col-sm-6">
                            <div class="card mt-5">
                                <h2 class="" style="text-align: center;">Add Company</h2>
                                <form class="p-4" action="" method="POST" enctype="multipart/form-data" name="add_company_form" onsubmit="return validateForm()">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="company_name">Company Name</label>
                                                <input class="form-control" type="text" name="company_name" id="company_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="company_email">Comapny Email</label>
                                                <input class="form-control" type="email" name="company_email" id="company_email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="company_logo">Company Logo</label>
                                                <input class="form-control" type="file" name="company_logo" id="company_logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" name="add_company" class="btn btn-success px-4">Add Company</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-md-3 col-sm-6"></div>
                    </div><!--end row-->
                </div><!-- container -->
            </div> <!-- end page content -->
        </div><!-- end page-wrapper -->
    <!-- Scripting -->
        <?php include_once 'include/footer.php'; ?>
    <!-- end Scripting-->
    </body>
<script>
    function validateForm() {
        var cname = document.forms["add_company_form"]["company_name"].value;
        var cemail = document.forms["add_company_form"]["company_email"].value;
        var clogo = document.getElementById('company_logo');

        if (cname == "") {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Company Name must be filled out',
                text: 'Please check the following',
                timer: 2500
            });
            return false;
        }
        if (cemail == "") {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Company Email must be filled out',
                text: 'Please check the following',
                timer: 2500
            });
            return false;
        }
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(cemail)){
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Invalid Email',
                text: 'Please check the following',
                timer: 2500
            });
            return false;
        }

        var file = clogo.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            var image = new Image();
            image.src = e.target.result;
            image.onload = function() {
                if (image.width < 100 || image.height < 100) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'warning',
                        title: 'Logo size must be at least 100x100 pixels',
                        text: 'Please check the following',
                        timer: 2500
                    });
                    return false;
                }
                document.forms["add_company_form"]['add_company'].submit();
            };
        };
        reader.readAsDataURL(file);
    }
</script>
</html>

