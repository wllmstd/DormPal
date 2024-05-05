<?php
include_once 'functions/authentication.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Rooms - DormPal</title>
    <meta name="description" content="Boarding House Rental Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
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
                <div class="container-fluid"><img src="assets/img/icons/Logo.png" class="bs-icon-md   border-primary-subtle d-flex justify-content-center align-items-center me-2 bs-icon" alt="House Icon">
                    <a class="navbar-brand d-flex align-items-center" href="/"><img src="assets/img/icons/Dormpal1.png" alt="DormPal Image" style="max-width: 200px; height: auto;"></a>
                    <button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler" style=" color:white;border-color:#ff9220;"><span class="visually-hidden">Toggle navigation</span><span class="fas fa-bars fa-s" style="color:#ff9220;"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom" href="index.php" style="color:#393939;" title="Here you can see your Dashboard."><i class="fas fa-th-list"></i>&nbsp;Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom" href="boarders.php" style="color:#393939;" title="Here you can view and manage the boarders."><i class="fas fa-users"></i>&nbsp;Boarders</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom" href="rooms.php" style="color:#393939;" title="Here you can view and manage the rooms."><i class="fas fa-home"></i>&nbsp;Rooms</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom" href="rentals.php" style="color:#393939;" title="Here you can view and transact payments."><i class="fas fa-credit-card"></i>&nbsp;Rentals</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Sales &amp; Transactions." data-bs-placement="bottom" href="reports.php" style="color:#393939;" title="Here you can view, export and print the sales reports."><i class="fas fa-chart-pie"></i>&nbsp;Reports</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can manage your account." data-bs-placement="bottom" href="account.php" style="color:#393939;" title="Here you can manage your account."><i class="fas fa-user-shield"></i>&nbsp;My Account</a></li>
                        </ul>
                        <a class="btn btn-light shadow" role="button" data-bs-original-title="Here you can logout your acccount." data-bs-placement="left" data-bs-toggle="tooltip" data-bss-tooltip="" href="functions/logout.php" style=" color: #ffffff; background-color: #e74a3b;">Log Out</a>
                    </div>
                </div>
            </nav>
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" style="font-weight: 700">Room Management</h3>
                        <button class="btn btn-primary btn-icon-split" type="button" data-bs-target="#add" data-bs-toggle="modal" style="background-color: #ff9220; color:#ffffff; border-color: #ff9220;">
                            <span class="text-white-50 icon"><i class="fas fa-warehouse"></i></span>
                            <span class="text-white text">Add Room</span>
                        </button>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="m-0 fw-bold" style="color: #ff9220;">Rooms Lists</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Room #</th>
                                            <th>Type</th>
                                            <th>PAX</th>
                                            <th>Rent</th>
                                            <th class="text-center">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include_once 'functions/views/rooms.php' ?>
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
        </div>
    </div>

  <a class="border rounded d-inline scroll-to-top" href="#page-top" style="background-color: #ff9220; color:#ffffff"><i class="fas fa-angle-up"></i></a>

<!-- Add Room Modal -->
<div class="modal fade" role="dialog" tabindex="-1" id="add">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight: 700;color:#ff9220;">Add Room</h4>
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="functions/add-room.php" method="POST">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="type" name="type" required>
                            <option value="" selected disabled>Select Room Type</option>
                            <option value="Bedspacer">Bedspacer</option>
                            <option value="Regular">Regular</option>
                            <!-- Add more options as needed -->
                        </select>
                        <label for="type">Room Type</label>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="number" placeholder="PAX" name="pax" required min="1">
                                    <label class="form-label" for="pax">PAX</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="number" placeholder="Rent" name="rent" required min="1">
                                    <label class="form-label" for="rent">Rent</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" style="background-color: #1CC88A; color:#ffffff; border-color:#1CC88A;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Update Room Modal -->
<div class="modal fade" role="dialog" tabindex="-1" id="update">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight: 700;color:#ff9220;">Update Room</h4>
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="functions/update-room.php" method="POST">
                    <input type="hidden" name="id" value="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="type" required="">
                                        <option value="Bedspacer">Bedspacer</option>
                                        <option value="Regular">Regular</option>
                                    </select>
                                    <label for="floatingSelect">Type</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="number" placeholder="PAX" name="pax" required="" min="1">
                                    <label class="form-label" for="floatingPax">PAX</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="number" placeholder="Rent" name="rent" required="" min="1">
                                    <label class="form-label" for="floatingRent">Rent</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" style="background-color: #1CC88A; color:#ffffff; border-color:#1CC88A;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Remove Room Modal -->
<div class="modal fade" role="dialog" tabindex="-1" id="remove">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight: 700;color:#ff9220;">Remove</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to remove this room?</p>
            </div>
            <form action="functions/remove-room.php" method="post">
                <input type="hidden" name="id" value="">
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button><button class="btn btn-danger" type="submit">Yes</button></div>
            </form>
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
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
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

         $('button[data-bs-target="#update"]').on('click', function() {
    var id = $(this).data('id');
    var type = $(this).data('type');
    var pax = $(this).data('pax');
    var rent = $(this).data('rent');

    var modal = $('#update');
    modal.find('input[name="id"]').val(id);
    modal.find('select[name="type"]').val(type);
    modal.find('input[name="pax"]').val(pax);
    modal.find('input[name="rent"]').val(rent);
});

            $('button[data-bs-target="#remove"]').on('click', function() {
                var id = $(this).data('id');
                console.log(id);
                $('input[name="id"]').val(id);
            });

        });
    </script>
</body>

</html>
