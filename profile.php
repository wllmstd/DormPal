<?php
include_once 'functions/authentication.php';
include_once 'functions/connection.php';
include_once 'functions/views/boarder-profile.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - DormPal</title>
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
                            style=" color: #ffffff; background-color: #e74a3b;">Log Out</a>
                    </div>
                </div>
            </nav>
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" style="font-weight: 700;">Profile <?= $fullname ?></h3>
                    </div>
                    <div class="main-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body border"
                                        style="border-color: #ff9220 !important; border-width: 3px !important;">
                                        <div class="text-center d-flex flex-column align-items-center"><img
                                                class="rounded-circle" src="functions/<?= $profile_picture ?>"
                                                alt="Admin" width="150">
                                            <div class="mt-2" style="color:#393939;">
                                                <h4><?= $fullname ?></h4>
                                                <p class="mb-1" style="color:#393939;"><?= $type ?></p>
                                                <p class="font-size-sm" style="color:#393939;"><?= $address ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><span><?= $fullname ?></span></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Room & Rent</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><span>Room #<?= $room ?> |
                                                    ₱<?= number_format($rent) ?></span></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><span><?= $address ?></span></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><span><?= $phone ?></span></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12"><a class="btn btn-info" type="button"
                                                    href="functions/<?= $proof_of_identity ?>"
                                                    style="background-color:#e84e1c; color:#ffffff; border-color:#e84e1c;">View
                                                    Proof of Identity</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <?php
                                        $sql = 'SELECT boarders.*, rooms.id as room, rooms.rent as rent, payments.total, payments.amount
                                            FROM boarders
                                            INNER JOIN rooms ON boarders.room = rooms.id
                                            INNER JOIN payments ON boarders.id = payments.boarder WHERE boarders.id = ' . $id . '';
                                        $stmt = $db->prepare($sql);
                                        $stmt->execute();
                                        $results = $stmt->fetchAll();

                                        foreach ($results as $row) {
                                            ?>
                                            <tr>
                                                <td><img class="rounded-circle me-2" width="30" height="30"
                                                        src="functions/<?= $row['profile_picture'] ?>"><?= $row['fullname'] ?>
                                                </td>
                                                <td>Room # <?= $row['room'] ?></td>
                                                <td><?= $row['type'] ?></td>
                                                <td>₱<?= number_format($row['rent'], 2) ?></td>
                                                <td>₱<?= number_format($row['total'], 2) ?></td>
                                                <td>₱<?= number_format($row['amount'], 2) ?></td>
                                                <td><?= $row['start_date'] ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
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
            style="background-color: #ff9220; color:#ffffff"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Allowance</h4><button class="btn-close" type="button" aria-label="Close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-floating mb-3"><input class="form-control form-control" type="number"
                                placeholder="Allowance" name="allowance"><label class="form-label"
                                for="floatingInput">Amount</label></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
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
</body>

</html>