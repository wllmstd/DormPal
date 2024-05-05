<?php
include_once 'functions/authentication.php';
include_once 'functions/connection.php';
include_once 'functions/views/dashboard-chart.php';
include_once 'functions/views/dashboard-count.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - DormPal</title>
    <meta name="description" content="Boarding House Rental Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Change-Password-floating-Label.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Check if the page was reloaded
            if (performance.navigation.type === 1) {
                // Redirect to splash.html
                window.location.href = 'loading.html';
            }
        });
    </script>
    <link rel="icon" type="image/png" href="assets/img/icons/Logo.png">

</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper" style="background: rgb(255,255,255);">
            <nav class="navbar navbar-expand-lg shadow py-3 border mb-4 navbar-light">
                <div class="container-fluid">
                    <img src="assets/img/icons/Logo.png"
                        class="bs-icon-md border-primary-subtle d-flex justify-content-center align-items-center me-2 bs-icon"
                        alt="House Icon">
                    <!-- This links to point to the dashboard -->
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <img src="assets/img/icons/Dormpal1.png" alt="DormPal Image"
                            style="max-width: 200px; height: auto;" title="Go to Dashboard">
                    </a>

                    <button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"
                        style="color:white;border-color:#ff9220;">
                        <span class="visually-hidden">Toggle navigation</span>
                        <span class="fas fa-bars fa-s" style="color:#ff9220;"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom"
                                    href="index.php" style="color:#393939;" title="Here you can see your Dashboard."><i
                                        class="fas fa-th-list"></i>&nbsp;Dashboard</a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom"
                                    href="boarders.php" style="color:#393939;"
                                    title="Here you can view and manage the boarders."><i
                                        class="fas fa-users"></i>&nbsp;Boarders</a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom"
                                    href="rooms.php" style="color:#393939;"
                                    title="Here you can view and manage the rooms."><i
                                        class="fas fa-home"></i>&nbsp;Rooms</a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom"
                                    href="rentals.php" style="color:#393939;"
                                    title="Here you can view and transact payments."><i
                                        class="fas fa-credit-card"></i>&nbsp;Rentals</a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-original-title="Here you can see your Sales &amp; Transactions."
                                    data-bs-placement="bottom" href="reports.php" style="color:#393939;"
                                    title="Here you can view, export and print the sales reports."><i
                                        class="fas fa-chart-pie"></i>&nbsp;Reports</a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-original-title="Here you can manage your account."
                                    data-bs-placement="bottom" href="account.php" style="color:#393939;"
                                    title="Here you can manage your account."><i class="fas fa-user-shield"></i>&nbsp;My
                                    Account</a></li>

                        </ul><a class="btn btn-light shadow" role="button"
                            data-bs-original-title="Here you can logout your acccount." data-bs-placement="left"
                            data-bs-toggle="tooltip" data-bss-tooltip="" href="functions/logout.php"
                            style=" color:#ffffff; background-color: #e74a3b">Log Out</a>
                    </div>
                </div>
            </nav>
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h2 class="text-dark mb-0" style="font-weight: 700">Dashboard</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2" style="background-color: #ffebd3">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="fw-bold text-xs mb-1" style="color: #ff9220"><span>EARNINGS
                                                    (MONTHLY)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0">
                                                <span>₱<?= number_format(calculateMonthlyEarnings()) ?></span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x"
                                                style="color: #ff9220"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2" style="background-color: #ffebd3">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="fw-bold text-xs mb-1" style="color: #ff9220"><span>EARNINGS
                                                    (ANNUAL)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0">
                                                <span>₱<?= number_format(calculateYearlyEarnings()) ?></span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x"
                                                style="color: #ff9220"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2" style="background-color: #ffebd3">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="fw-bold text-xs mb-1" style="color: #ff9220">
                                                <span>BOARDERS</span>
                                                <div class="text-dark fw-bold h5 mb-0">
                                                    <span><?= countTotalBoarders() ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x"
                                                style="color: #ff9220"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2" style="background-color: #ffebd3">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="fw-bold text-xs mb-1" style="color: #ff9220"><span>ROOMS</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?= countTotalRooms() ?></span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-comments fa-2x"
                                                style="color: #ff9220"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="fw-bold m-0" style="color:#ff9220">Monthly Earnings</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle"
                                            aria-expanded="false" data-bs-toggle="dropdown" type="button"><i
                                                class="fas fa-ellipsis-v" style="color:#ff9220;"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                            <p class="text-center dropdown-header" style="color:#ff9220;">dropdown
                                                header:</p><a class="dropdown-item" href="#">&nbsp;Edit</a><a
                                                class="dropdown-item" href="#">&nbsp;Sort By</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><?= month_chart() ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="fw-bold m-0" style="color:#fecd00">Annual Earnings Overview</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle"
                                            aria-expanded="false" data-bs-toggle="dropdown" type="button"><i
                                                class="fas fa-ellipsis-v" style="color:#fecd00;"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                            <p class="text-center dropdown-header" style="color:#fecd00;">dropdown
                                                header:</p><a class="dropdown-item" href="#">&nbsp;Edit</a><a
                                                class="dropdown-item" href="#">&nbsp;Sort By</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><?= yearly_chart() ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"
            style="background-color: #ff9220; color: #ffffff"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>