<div class="leftbar-tab-menu" style="background-color: #ff3636;">
    <div class="main-icon-menu" style="background-color: #ff3636;">
        <a href="index.html" class="logo logo-metrica d-block text-center">
            <span>
                <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->  
                </ul>
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->
    </div>
    <!--end main-icon-menu-->
    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span>
                    <h2 class="logo-sm"><span class="text-danger">Admin</h2>
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane active show" role="tabpanel" aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>
                </div>
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#comp" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="comp">
                                Company's
                            </a>
                            <div class="collapse " id="comp">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="add_comp.php" class="nav-link ">Add Company</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="all_comp.php?page=1" class="nav-link ">All Company</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#emp" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emp">
                                Employess
                            </a>
                            <div class="collapse " id="emp">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="add_emp.php" class="nav-link ">Add Employess</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="all_emp.php" class="nav-link ">All Employess</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </ul>
            </div><!-- end Dashboards -->
        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>