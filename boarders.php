<?php
include_once 'functions/connection.php';
include_once 'functions/authentication.php';
include_once 'functions/views/get-data.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Boarders - DormPal</title>
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
            <!-- NavBar -->
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
                        style="color:white; border-color:#ff9220;"><span class="visually-hidden">Toggle
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
                            style=" color: #ffffff; background-color: #e74a3b">Log Out</a>
                    </div>
                </div>
            </nav>
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" style="font-weight: 700">Boarders</h3>

                        <button class="btn btn-primary btn-icon-split" type="button" data-bs-target="#add"
                            data-bs-toggle="modal"
                            style="background-color: #ff9220; color:#ffffff; border-color: #ff9220;"><span
                                class="text-white-50 icon"><i class="fas fa-user-friends"></i></span><span
                                class="text-white text">Add Boarder</span></button>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="m-0 fw-bold" style="color: #ff9220">Boarders Lists</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid"
                                aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Boarders</th>
                                            <th>Sex</th>
                                            <th>Room</th>
                                            <th>Type</th>
                                            <th>Rent</th>
                                            <th>Start date</th>
                                            <th>Cellphone</th>
                                            <th class="text-center">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include_once 'functions/views/boarders.php' ?>
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

    <!-- Add Boarder -->
    <div class="modal fade" role="dialog" tabindex="-1" id="add">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color:#ff9220; font-weight: 700;">Add Boarder</h4><button
                        class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="functions/add-boarder.php" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="form-floating mb-3"><input class="form-control form-control" type="text"
                                    placeholder="Fullname" name="fullname" required=""><label class="form-label"
                                    for="floatingInput">Fullname</label></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3"><input class="form-control form-control" type="text"
                                            placeholder="Phone" name="phone" minlength="11" maxlength="11"
                                            required=""><label class="form-label" for="floatingInput">Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"><select class="form-select form-select"
                                            aria-label="Floating label select example" id="floatingSelect-2" name="sex"
                                            required="">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><label class="form-label" for="floatingSelect">Sex</label></div>
                                </div>
                            </div>
                            <div class="form-floating mb-3"><input class="form-control form-control" type="text"
                                    placeholder="Address" name="address" required=""><label class="form-label"
                                    for="floatingInput">Address</label></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3"><input class="form-control form-control"
                                            placeholder="Start Date" name="start_date" type="date" required=""><label
                                            class="form-label" for="floatingInput">Start Date</label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating"><select class="form-select form-select"
                                            aria-label="Floating label select example" id="floatingSelect-3" name="type"
                                            required="">
                                            <option value="Bedspacer">Bedspacer</option>
                                            <option value="Regular">Regular</option>
                                        </select><label class="form-label" for="floatingSelect">Type</label></div>
                                </div>                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select form-select" aria-label="Floating label select example" id="floatingSelect-1" name="room" required="">
                                            <!-- Initially, the room options will be empty -->
                                        </select>
                                        <label class="form-label" for="floatingSelect">Room#</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 mt-3"><label class="form-label">Profile Picture</label><input
                                            class="form-control" type="file" accept="image/*" name="profile"
                                            required=""></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 mt-3"><label class="form-label">Proof of Identity</label><input
                                            class="form-control" type="file" accept="image/*" name="proof" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="submit"
                        style="background-color: #1CC88A; color:#ffffff; border-color:#1CC88A;">Save</button></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Boarder -->
  <!-- Update Boarder Modal -->
<div class="modal fade" role="dialog" tabindex="-1" id="update">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight: 700; color: #ff9220;">Update Boarder</h4>
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="functions/update-boarder.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="">
                    <div class="container">
                        <div class="form-floating mb-3">
                            <input class="form-control form-control" type="text" placeholder="Fullname" name="fullname" required="">
                            <label class="form-label" for="floatingInput">Fullname</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control form-control" type="text" placeholder="Phone" name="phone" minlength="11" maxlength="11" required="">
                                    <label class="form-label" for="floatingInput">Phone</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select form-select" aria-label="Floating label select example" id="update-select-sex" name="sex" required="">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <label class="form-label" for="floatingSelect">Sex</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control form-control" type="text" placeholder="Address" name="address" required="">
                            <label class="form-label" for="floatingInput">Address</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control form-control" placeholder="Start Date" name="start_date" type="date" required="">
                                    <label class="form-label" for="floatingInput">Start Date</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select form-select" aria-label="Floating label select example" id="update-select-type" name="type" required="">
                                        <option value="Bedspacer">Bedspacer</option>
                                        <option value="Regular">Regular</option>
                                    </select>
                                    <label class="form-label" for="floatingSelect">Type</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Select Room Number" id="update-select-room" name="room" required="">
                                        <!-- Room options will be dynamically populated here -->
                                    </select>
                                    <label class="form-label" for="floatingSelect">Room#</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Profile Picture</label>
                                    <input class="form-control" type="file" accept="image/*" name="profile">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Proof of Identity</label>
                                    <input class="form-control" type="file" accept="image/*" name="proof">
                                </div>
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



    <!-- Remove Boarder -->
    <div class="modal fade" role="dialog" tabindex="-1" id="remove">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-weight: 700; color: #ff9220;">Remove</h4><button
                        class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" style="color:#000000">
                    <p>Are you sure you want to remove this boarder?</p>
                </div>
                <form action="functions/remove-boarder.php" method="post">
                    <input type="hidden" name="id" value="">
                    <div class="modal-footer"><button class="btn btn-light" type="button"
                            data-bs-dismiss="modal">No</button><button class="btn btn-danger" type="submit">Yes</button>
                    </div>
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
    $(document).ready(function () {
        $('#dataTable').DataTable({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "lengthChange": false,
            dom: 'Blfrtip',
            buttons: [{
                    extend: 'excel',
                    className: 'btn btn-primary',
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

   $(document).ready(function () {
        // Update modal button click event
        $('button[data-bs-target="#update"]').on('click', function () {
            var id = $(this).data('id');
            var fullname = $(this).data('fullname');
            var room = $(this).data('room');
            var type = $(this).data('type');
            var sex = $(this).data('sex');
            var start_date = $(this).data('start_date');
            var phone = $(this).data('phone');
            var address = $(this).data('address');
            var profile = $(this).data('profile');
            var proof = $(this).data('proof');
            console.log(id, address);
            $('#update input[name="id"]').val(id);
            $('#update input[name="fullname"]').val(fullname);
            $('#update input[name="address"]').val(address);
            $('#update input[name="phone"]').val(phone);
            $('#update select[name="sex"]').val(sex);
            $('#update input[name="start_date"]').val(start_date);
            $('#update select[name="type"]').val(type);
            // Assume you are showing image previews
            if (profile) {
                $('#update img#profile-preview').attr('src', 'functions/' + profile);
            }
            if (proof) {
                $('#update img#proof-preview').attr('src', 'functions/' + proof);
            }

            // Fetch room options based on the selected type
            $.ajax({
                url: 'get-room-options.php',
                method: 'POST',
                data: { type: type },
                success: function(response) {
                    $('#update-select-room').html(response);
                    // Select the current room if available
                    $('#update-select-room').val(room);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching room options:', error);
                }
            });
        });

        // Change event for Type select
        $('#update-select-type').change(function () {
            var selectedType = $(this).val();
            $.ajax({
                url: 'functions/get-room-options.php',
                method: 'POST',
                data: { type: selectedType },
                dataType: 'html',
                success: function (response) {
                    $('#update-select-room').html(response);
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching room options:', error);
                }
            });
        });
    });




        $('button[data-bs-target="#remove"]').on('click', function () {
            var id = $(this).data('id');
            console.log(id);
            $('input[name="id"]').val(id);
        });

        $('#floatingSelect-3').change(function () {
            var selectedType = $(this).val();
            $.ajax({
                url: 'functions/get-room-options.php',
                method: 'POST',
                data: { type: selectedType },
                dataType: 'html',
                success: function (response) {
                    $('#floatingSelect-1').html(response);
                }
            });
        });

    });
</script>

</body>

</html>