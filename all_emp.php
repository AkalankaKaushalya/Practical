<?php include_once 'config.php'; ?>
<?php include_once 'security.php'; ?>
<?php include_once 'operations/all_emp_op.php'; ?>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">All Employees</h4>
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <a href="add_emp.php" class="btn btn-outline-primary">Add Employees</a>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>First name</th>
                                                <th>Last Name</th>
                                                <th>Company Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>

                                            <tbody>
                                            <?php echo $employees; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <?php echo $pageing; ?>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
            </div> <!-- end page content -->
        </div><!-- end page-wrapper -->
    <!-- Scripting -->
        <?php include_once 'include/footer.php'; ?>
    <!-- end Scripting-->
    </body>
</html>