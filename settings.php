<?php
//database Connection
require 'config.php';
require 'author.php';

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
                                <li class="breadcrumb-item active">General Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="settings-menu-links">
                    <ul class="nav nav-tabs menu-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" href="settings.php">General Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register New Admin</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Website Basic Details</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form>
                                    <div class="settings-form">
                                        <div class="form-group">
                                            <label>Website Name <span class="star-red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Website Name">
                                        </div>
                                        <div class="form-group">
                                            <p class="settings-label">Logo <span class="star-red">*</span></p>
                                            <div class="settings-btn">
                                                <input type="file" accept="image/*" name="image" id="file"
                                                    onchange="loadFile(event)" class="hide-input">
                                                <label for="file" class="upload">
                                                    <i class="feather-upload"></i>
                                                </label>
                                            </div>
                                            <h6 class="settings-size">Recommended image size is <span>150px x
                                                    150px</span></h6>
                                            <div class="upload-images">
                                                <img src="assets/img/logo.png" alt="Image">
                                                <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                    <i class="feather-x-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="settings-label">Favicon <span class="star-red">*</span></p>
                                            <div class="settings-btn">
                                                <input type="file" accept="image/*" name="image" id="file"
                                                    onchange="loadFile(event)" class="hide-input">
                                                <label for="file" class="upload">
                                                    <i class="feather-upload"></i>
                                                </label>
                                            </div>
                                            <h6 class="settings-size">
                                                Recommended image size is <span>16px x 16px or 32px x 32px</span>
                                            </h6>
                                            <h6 class="settings-size mt-1">Accepted formats: only png and ico</h6>
                                            <div class="upload-images upload-size">
                                                <img src="assets/img/favicon.png" alt="Image">
                                                <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                    <i class="feather-x-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6">
                                                <div class="form-group">
                                                    <div
                                                        class="status-toggle d-flex justify-content-between align-items-center">
                                                        <p class="mb-0">RTL</p>
                                                        <input type="checkbox" id="status_1" class="check">
                                                        <label for="status_1" class="checktoggle">checkbox</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="settings-btns">
                                                <button type="submit" class="btn btn-orange">Update</button>
                                                <button type="submit" class="btn btn-grey">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Update Password</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form>
                                    <div class="settings-form">
                                        <div class="form-group">
                                            <label>Select Username<span class="star-red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Change password<span class="star-red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter New Password">
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="settings-btns">
                                                <button type="submit" class="btn btn-orange">Update</button>
                                                <button type="submit" class="btn btn-grey">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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