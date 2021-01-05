
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- fontawsome css -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="../css/custom.css">
    <title>
        <?php echo TITLE ?>
    </title>
</head>
<body>
     <!-- Top Navbar -->
     <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
        <a href="Requesprofile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">OSMS</a>
    </nav>

    <!-- Side bar -->
    <div class="container-fluid">
        <div class="row py-5">
            <nav class="col-sm-2 bg-light shadow py-5 sidebar d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link  <?php if(PAGE == 'dashboard.php'){echo 'active';}?>">
                                <i class="fas fa-user"></i>
                                Dasboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="workoder.php" class="nav-link  <?php if(PAGE == 'workoder.php'){echo 'active';}?>">
                                <i class="fab fa-accessible-icon"></i>
                                Work Order
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="request.php" class="nav-link <?php if(PAGE == 'request.php'){echo 'active';}?>">
                                <i class="fas fa-align center"></i>
                                Request
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="asset.php" class="nav-link <?php if(PAGE == 'asset.php'){echo 'active';}?>">
                                <i class="fas fa-key"></i>
                                Assets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="technicain.php" class="nav-link <?php if(PAGE == 'technicain.php'){echo 'active';}?>">
                                <i class="fas fa-key"></i>
                                technicain
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="requester.php" class="nav-link <?php if(PAGE == 'requester.php'){echo 'active';}?>">
                                <i class="fas fa-key"></i>
                                Requester
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sellReport.php" class="nav-link <?php if(PAGE == 'sellReport.php'){echo 'active';}?>">
                                <i class="fas fa-key"></i>
                                Sell Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="workReport.php" class="nav-link <?php if(PAGE == 'workReport.php'){echo 'active';}?>">
                                <i class="fas fa-key"></i>
                                Work Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="changepassword.php" class="nav-link <?php if(PAGE == 'changepassword.php'){echo 'active';}?>">
                                <i class="fas fa-key"></i>
                                Change Password
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../loguot.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Start Profile Area -->
           
            
            <!-- End Profile Are -->
    