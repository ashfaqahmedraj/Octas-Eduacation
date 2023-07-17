<?php 
//database Connection
require 'config.php';
require 'author.php';

//get the student_id parameter from the URL
$student_id = $_GET['student_id'];

//retrieve the student record from the database using the student_id
$sql = "SELECT * FROM students WHERE id = '$student_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
//display the student details
$fname = $row['fname'];
$lname = $row['lname'];
$class = $row['class'];
$phone = $row['phone'];
$gender = $row['gender'];
$dob = $row['dob'];
$roll = $row['roll'];
$bgroup = $row['bgroup'];
$religion = $row['religion'];
$email = $row['email'];
$btchnum = $row['btchnum'];
$address = $row['address'];
$image = $row['image'];
$getway = $row['getway'];
$paid = $row['paid'];
$due = $row['due'];

} else {
echo "No student record found";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Octas - Student Details</title>

    <!-- Css Links -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
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
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.php">Student List</a></li>
                                <li><a href="#" class="active">Student View</a></li>
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
                                <h3 class="page-title">Student Details</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                                    <li class="breadcrumb-item active">Student Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-info">
                                    <h4>Profile</h4>
                                </div>
                                <div class="student-profile-head">
                                    <div class="profile-bg-img">
                                        <img src="assets/img/profilebg.jpg" alt="Profile">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="profile-user-box">
                                                <div class="profile-user-img">
                                                    <img src="assets/img/profile-user.jpg" alt="Profile">
                                                </div>
                                                <div class="names-profiles">
                                                    <h4><?php echo $fname, ' ', $lname; ?></h4>
                                                    <h5><?php echo $class; ?></h5>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="student-personals-grp">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- Personal Details -->
                                            <div class="heading-detail">
                                                <h4>Personal Details :</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-user"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Name</h4>
                                                            <h5><?php echo $fname, ' ', $lname; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-grid"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Department </h4>
                                                            <h5><?php echo $class; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-phone-call"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Mobile</h4>
                                                            <h5><?php echo $phone; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-mail"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Email</h4>
                                                            <h5><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row">
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-hash"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Roll</h4>
                                                            <h5><?php echo $roll; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-award"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Batch</h4>
                                                            <h5><?php echo $btchnum; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-droplet"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Blood Group</h4>
                                                            <h5><?php echo $bgroup; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-book-open"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Religion </h4>
                                                            <h5><?php echo $religion; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-user"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Gender</h4>
                                                            <h5><?php echo $gender; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="personal-icons">
                                                            <i class="feather-calendar"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Date of Birth</h4>
                                                            <h5><?php echo $dob; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity mb-0">
                                                        <div class="personal-icons">
                                                            <i class="feather-map-pin"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Address</h4>
                                                            <h5><?php echo $address; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Payment Details -->
                                            <div class="heading-detail">
                                                <h4 class="form-title">Payment Details :</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="personal-activity mb-0">
                                                        <div class="personal-icons">
                                                            <i class="feather-smartphone"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Getaway</h4>
                                                            <h5><?php echo $getway; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="views-personal">
                                                            <h4><span class="badge badge-success">Paid</span>
                                                            </h4>
                                                            <h5>&#2547; <?php echo $paid; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="personal-activity">
                                                        <div class="views-personal">
                                                            <h4><span class="badge badge-danger">Due</span>
                                                            </h4>
                                                            <h5>&#2547; <?php echo $due; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="personal-activity mb-0">
                                                        <div class="personal-icons">
                                                            <i class="feather-dollar-sign"></i>
                                                        </div>
                                                        <div class="views-personal">
                                                            <h4>Total</h4>
                                                            <h5>&#2547; <?php echo $paid; ?></h5>
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
                </div>

            </div>

            <footer>
                <p>Copyright © 2022 OCTAS.</p>
            </footer>

        </div>

    </div>

    <!-- Js Links -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>