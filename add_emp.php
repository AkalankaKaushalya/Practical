
<?php include_once 'config.php'; ?>
<?php include_once 'security.php'; ?>
<?php include_once 'operations/add_emp_op.php'; ?>
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
                                <h2 class="" style="text-align: center;">Add Employee</h2>
                                <form class="p-4" action="" method="POST" enctype="multipart/form-data" name="from_employee" onsubmit="return validateForm()">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="first_name">First Name</label>
                                                <input class="form-control" type="text" name="first_name" id="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="last_name">Last Name</label>
                                                <input class="form-control" type="text" name="last_name" id="last_name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mt-2" >
                                            <label class="">Select Employee Company</label>
                                            <select id="company" name="company">
                                                <option value="">Select Company</option>
                                                <?php echo $list_company; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="mb-3">
                                                <label for="emp_email">Emp Email</label>
                                                <input class="form-control" type="email" name="emp_email" id="emp_email">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="mb-3">
                                                <label for="emp_mobile">Emp Mobile</label>
                                                <input class="form-control" type="number" name="emp_mobile" id="emp_mobile">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" name="add_emp"  class="btn btn-success px-4">Add Employee</button>
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
        new Selectr("#company");
    </script>
<script>
    function validateForm() {
        var fname = document.forms["from_employee"]["first_name"].value;
        var lname = document.forms["from_employee"]["last_name"].value;
        var email = document.forms["from_employee"]["emp_email"].value;
        var mobile = document.forms["from_employee"]["emp_mobile"].value;
        var comp = document.forms["from_employee"]["company"].value;

        if (fname == "" || lname == "" || email == "" || mobile == "" || comp == "") {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'All fields must be filled out',
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
                title: 'Invalid Email',
                text: 'Please check the following',
                timer: 2500
            });
            return false;
        }
    }
</script>
</html>

