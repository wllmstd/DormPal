<?php
include_once 'functions/authentication.php';
include_once 'functions/connection.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reports - DormPal</title>
    <meta name="description" content="Boarding House Rental Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Change-Password-floating-Label.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">
    <link rel="icon" type="image/png" href="assets/img/icons/Logo.png">

</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper" style="background: rgb(255,255,255);">
            <nav class="navbar navbar-expand-lg shadow py-3 border mb-4 navbar-light">
                <div class="container-fluid"><img src="assets/img/icons/Logo.png"
                        class="bs-icon-md   border-primary-subtle d-flex justify-content-center align-items-center me-2 bs-icon"
                        alt="House Icon">
                    <!-- This links to point to the dashboard -->
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <img src="assets/img/icons/Dormpal1.png" alt="DormPal Image"
                            style="max-width: 200px; height: auto;" title="Go to Dashboard">
                    </a>

                    <button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"
                        style=" color:white;border-color:#ff9220;"><span class="visually-hidden">Toggle
                            navigation</span><span class="fas fa-bars fa-s" style="color:#ff9220;"></span></button>
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
                            style=" color:#ffffff;background-color: #e74a3b">Log Out</a>
                    </div>
                </div>
            </nav>
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" style="font-weight: 700">Reports</h3>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="m-0 fw-bold" style="color:#ff9220;">Payments</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid"
                                aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Boarders</th>
                                            <th>Room</th>
                                            <th>Type</th>
                                            <th>Rent</th>
                                            <th>Total</th>
                                            <th>Amount</th>
                                            <th>Start date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include_once 'functions/views/reports.php' ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"
            style="background-color: #ff9220; color: #ffffff"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "lengthChange": false,
                dom: 'Blfrtip',
                buttons: [{
                    extend: 'excel',
                    className: 'btn btn-primary'
                },
                {
                    extend: 'pdf',
                    className: 'btn btn-primary'
                },
                {
                    extend: 'print',
                    className: 'btn btn-primary'
                }
                ]
            });
        });
    </script>
</body>

</html>