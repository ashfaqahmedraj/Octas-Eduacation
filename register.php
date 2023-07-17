<?php 
//database Connection
    require 'config.php';
    require 'author.php';
    require 'creat-admin.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Octas - Settings</title>

    <!-- Css Links -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">
        <!-- header & sider Bar Html code in PhP -->
        <?php 
            require 'header.php';
        ?>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.php">Admin Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.php">Student List</a></li>
                                <li><a href="#">Student View</a></li>
                                <li><a href="add-student.php">Student Add</a></li>
                                <li><a href="#">Student Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.php">Teacher List</a></li>
                                <li><a href="#">Teacher View</a></li>
                                <li><a href="add-teacher.php">Teacher Add</a></li>
                                <li><a href="#">Teacher Edit</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expenses.php">Expenses</a></li>
                                <li><a href="salary.php">Salary</a></li>
                                <li><a href="add-expenses.php">Add Expenses</a></li>
                                <li><a href="add-salary.php">Add Salary</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="settings.php" class="active"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                    </ul>
                </div>
            </div>
        </div>
        <!-- page-wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Settings</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="settings.php">Settings</a></li>
                                <li class="breadcrumb-item active">Register Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="settings-menu-links">
                    <ul class="nav nav-tabs menu-tabs">
                        <li class="nav-item ">
                            <a class="nav-link" href="settings.php">General Settings</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="register.php">Register New Admin</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="login-wrapper">
                            <div class="container">
                                <div class="loginbox">
                                    <div class="login-left">
                                        <img class="img-fluid" src="assets/img/login.png" alt="Logo">
                                    </div>
                                    <div class="login-right">
                                        <div class="login-right-wrap">
                                            <h1>Register Admin</h1>
                                            <p class="account-subtitle">Enter details to create your account</p>

                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label>Username <span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="username">
                                                    <span class="profile-views"><i
                                                            class="fas fa-user-circle"></i></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email <span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="email">
                                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password <span class="login-danger">*</span></label>
                                                    <input class="form-control pass-input" type="text" name="password">
                                                    <span class="profile-views feather-eye toggle-password"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm password <span class="login-danger">*</span></label>
                                                    <input class="form-control pass-confirm" type="text">
                                                    <span class="profile-views feather-eye reg-toggle-password"></span>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button class="btn btn-primary btn-block"
                                                        type="submit">Register</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Js Links -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>