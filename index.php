<?php
// data connection 
require 'config.php';
require 'author.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/simple-calendar.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Admin Dashbord Page Here -->
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
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.php" class="active">Admin Dashboard</a></li>
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
                        <li>
                            <a href="settings.php"><i class="fas fa-cog"></i> <span>Settings</span></a>
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
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Admin!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-8">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                                <div class="card flex-fill card-chart">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="card-title">Overview</h5>
                                            </div>
                                            <div class="col-6">
                                                <ul class="chart-list-out">
                                                    <li><span class="circle-blue"></span>Teacher</li>
                                                    <li><span class="circle-green"></span>Student</li>
                                                    <li class="star-menus"><a href="javascript:;"><i
                                                                class="fas fa-ellipsis-v"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="apexcharts-area"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                                <div class="card flex-fill comman-shadow">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title">Teaching History</h5>
                                        <ul class="chart-list-out student-ellips">
                                            <li class="star-menus">
                                                <a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="teaching-card">
                                            <ul class="steps-history">
                                                <li>Sep22</li>
                                                <li>Sep23</li>
                                                <li>Sep24</li>
                                            </ul>
                                            <ul class="activity-feed">
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Mathematics</a></span>
                                                        <ul class="teacher-date-list">
                                                            <li>
                                                                <i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022
                                                            </li>
                                                            <li>|</li>
                                                            <li>
                                                                <i class="fas fa-clock me-2"></i>09:00 am -
                                                                10:00 am (60 Minutes)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns ms-auto">
                                                        <button type="submit" class="btn btn-info">
                                                            In Progress
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Geography </a></span>
                                                        <ul class="teacher-date-list">
                                                            <li>
                                                                <i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022
                                                            </li>
                                                            <li>|</li>
                                                            <li>
                                                                <i class="fas fa-clock me-2"></i>09:00 am -
                                                                10:00 am (60 Minutes)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns ms-auto">
                                                        <button type="submit" class="btn btn-info">
                                                            Completed
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Botony</a></span>
                                                        <ul class="teacher-date-list">
                                                            <li>
                                                                <i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022
                                                            </li>
                                                            <li>|</li>
                                                            <li>
                                                                <i class="fas fa-clock me-2"></i>09:00 am -
                                                                10:00 am (60 Minutes)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns ms-auto">
                                                        <button type="submit" class="btn btn-info">
                                                            In Progress
                                                        </button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">


                            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                                <div class="card flex-fill card-chart">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="card-title">Number of Students</h5>
                                            </div>
                                            <div class="col-6">
                                                <ul class="chart-list-out">
                                                    <li><span class="circle-blue"></span>Girls</li>
                                                    <li><span class="circle-green"></span>Boys</li>
                                                    <li class="star-menus"><a href="javascript:;"><i
                                                                class="fas fa-ellipsis-v"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-12 col-xl-4 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-body">
                                <div id="calendar-doctor" class="calendar-container"></div>
                                <div class="calendar-info calendar-info1">
                                    <div class="up-come-header">
                                        <h2>Upcoming Events</h2>
                                        <span><a href="javascript:;"><i class="feather-plus"></i></a></span>
                                    </div>
                                    <div class="upcome-event-date">
                                        <h3>10 Jan</h3>
                                        <span><i class="fas fa-ellipsis-h"></i></span>
                                    </div>
                                    <div class="calendar-details">
                                        <p>08:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>08:00 - 09:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>09:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>09:00 - 10:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>10:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>10:00 - 11:00 am</span>
                                        </div>
                                    </div>
                                    <div class="upcome-event-date">
                                        <h3>10 Jan</h3>
                                        <span><i class="fas fa-ellipsis-h"></i></span>
                                    </div>
                                    <div class="calendar-details">
                                        <p>08:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>English</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>08:00 - 09:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>09:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Mathematics</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>09:00 - 10:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>10:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>History</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>10:00 - 11:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>11:00 am</p>
                                        <div class="calendar-box break-bg">
                                            <div class="calandar-event-name">
                                                <h4>Break</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>11:00 - 12:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>11:30 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>History</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>11:30 - 12:00 am</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill fb sm-box">
                            <div class="social-likes">
                                <p>Like us on facebook</p>
                                <h6>50,095</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-01.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill twitter sm-box">
                            <div class="social-likes">
                                <p>Follow us on twitter</p>
                                <h6>48,596</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-02.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill insta sm-box">
                            <div class="social-likes">
                                <p>Follow us on instagram</p>
                                <h6>52,085</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-03.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill linkedin sm-box">
                            <div class="social-likes">
                                <p>Follow us on linkedin</p>
                                <h6>69,050</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-04.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>Copyright © 2023 Octas</p>
            </footer>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>
    <script src="assets/js/jquery.simple-calendar.js"></script>
    <script src="assets/js/calander.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
