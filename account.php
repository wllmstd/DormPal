<?php
include_once 'functions/authentication.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>My Account - DormPal</title>
    <meta name="description" content="Boarding House Rental Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Change-Password-floating-Label.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">
    <link rel="icon" type="image/png" href="assets/img/icons/Logo.png">

    <!-- Add this script inside the <head> tag of your HTML -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#updateForm').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting normally

                // Serialize the form data
                var formData = $(this).serialize();

                // Send an AJAX request to update-account.php
                $.ajax({
                    type: 'POST',
                    url: 'functions/update-account.php',
                    data: formData,
                    success: function (response) {
                        // Display the response as an alert
                        alert(response);

                        // Reload the page regardless of success or failure
                        location.reload();
                    }
                });
            });
        });
    </script>


</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper" style="background: rgb(255,255,255);">
            <!-- Navbar -->
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
            <!-- Admin Profile Content -->
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" style="font-weight: 700">My Account</h3>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"
            style="background-color: #ff9220; color: #ffffff"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body border"
                            style="border-color:#ff9220 !important; border-width:3px !important;">
                            <div class="text-center d-flex flex-column align-items-center">
                                <!--Profile Box-->
                                <img class="rounded-circle" src="assets/img/dogs/image2.jpeg" alt="Admin" width="150">
                                <div class="mt-2">
                                    <h4>DormPal Admin</h4>
                                    <p class="text-secondary mb-1">Administrator</p>
                                    <p class="text-muted font-size-sm">Iloilo City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile Details -->
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <?php
                            include_once 'functions/connection.php'; // Include your DB connection
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            $stmt = $db->prepare("SELECT fullname, email, address, phone FROM users WHERE id = ?");
                            $stmt->execute([$_SESSION['id']]);
                            $userData = $stmt->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <span><?php echo htmlspecialchars($userData['fullname']); ?></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <span><?php echo htmlspecialchars($userData['email']); ?></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <span><?php echo htmlspecialchars($userData['address']); ?></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 the mb-0>Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <span><?php echo htmlspecialchars($userData['phone']); ?></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12"><button class="btn btn-info" type="button" data-bs-target="#edit"
                                        data-bs-toggle="modal"
                                        style="background-color:#e84e1c;color:#ffffff; border-color:#e84e1c;">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Logs-->
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="m-0 fw-bold" style="color:#ff9220;">Users Logs</p>
            </div>
            <div class="card-body">

                <table class="table table-striped my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Type</th>
                            <th>Logs</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once 'functions/views/activity.php' ?>
                    </tbody>
                    <tfoot>
                        <tr></tr>
                    </tfoot>
                </table>

            </div>
        </div>

        <!-- Edit Profile Account-->
        <div class="modal fade" role="dialog" tabindex="-1" id="edit">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color:#ff9220; font-weight: 700;">Edit Profile</h4>
                        <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="functions/update-account.php" id="updateForm"
                            onsubmit="return false;">
                            <div class="container">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        placeholder="Full Name" required=""
                                        value="<?php echo htmlspecialchars($userData['fullname']); ?>">
                                    <label for="fullname">Fullname</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email"
                                                value="<?php echo htmlspecialchars($userData['email']); ?>">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Address"
                                                value="<?php echo htmlspecialchars($userData['address']); ?>">
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone" required=""
                                                value="<?php echo htmlspecialchars($userData['phone']); ?>">
                                            <label for="phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="new_password"
                                                name="new_password" placeholder="New Password" required="">
                                            <label for="new_password">New Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="confirm_password"
                                                name="confirm_password" placeholder="Confirm Password" required="">
                                            <label for="confirm_password">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit"
                                        style="background-color:#1CC88A;color:#ffffff; border-color:#1CC88A;">Save</button>
                                </div>
                        </form>
                    </div>
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

        <!-- For sorting of the logs by ID/Date -->
        <script>
            $(document).ready(function () {
                // Check if the DataTable instance already exists
                var existingTable = $.fn.dataTable.isDataTable('#dataTable');
                if (existingTable) {
                    // If it exists, destroy it
                    $('#dataTable').DataTable().destroy();
                }

                // Initialize the DataTable
                $('#dataTable').DataTable({
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "lengthChange": false,
                    dom: 'Blfrtip',
                    buttons: [
                        { extend: 'excel', className: 'btn btn-primary' },
                        { extend: 'pdf', className: 'btn btn-primary' },
                        { extend: 'print', className: 'btn btn-primary' }
                    ],
                    "columnDefs": [
                        { "orderable": true, "targets": 0 },
                        { "orderable": true, "targets": 4 }
                    ],
                    "order": [[0, 'asc']]
                });
            });
        </script>


</body>

</html>