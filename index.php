<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: ./dashboard.php');
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DormPal</title>
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

<body>
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper"
            style="background-image: url('assets/img/icons/bg2.png'); background-size: cover; background-position: center;">
            <nav class="navbar navbar-expand-lg shadow py-3 border mb-4 navbar-light" style="background-color:#ffffff">
                <div class="container-fluid"><img src="assets/img/icons/Logo.png"
                        class="bs-icon-md   border-primary-subtle d-flex justify-content-center align-items-center me-2 bs-icon"
                        alt="House Icon">
                    <!-- This links to point to the dashboard -->
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="assets/img/icons/Dormpal1.png" alt="DormPal Image"
                            style="max-width: 200px; height: auto;" title="Go to Dashboard">
                    </a>

                    <button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"
                        style="color: white;border-color: #ff9220;"><span class="fas fa-bars fa-s"
                            style="color:#ff9220;"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1"></div>
                </div>
            </nav>
            <section class="position-relative py-4 py-xl-5">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">

                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-5">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <h2 class="text-center mb-2 mt-2" style="font-weight: 700; color:#e84e1c;">Login
                                    </h2>
                                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                                        <img src="assets/img/icons/login.png" width="90px" height="90px"
                                            alt="Custom Icon">
                                    </div>

                                    <form action="functions/login.php" method="post">
                                        <div class="mb-3 text-center"><input class="form-control" type="text"
                                                name="username" placeholder="Username"
                                                value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>">
                                        </div>
                                        <div class="mb-3 text-center"></div>
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Password"
                                                value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" name="remember" type="checkbox"
                                                aria-label="remember" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                                            <label class="form-check-label text-dark" for="remember">
                                                Remember me
                                            </label>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button class="btn d-block w-100" type="submit"
                                                style="background-color: #FF9221; color: white;">Login</button>
                                        </div>

                                        <p class=" text-center" style="color: #e84e1c;">Dormitory Management System</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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