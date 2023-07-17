<?php 
require 'config.php';
require 'author.php';
//get the student_id parameter from the URL
$teacher_id = $_GET['teacher_id'];

//retrieve the student record from the database using the student_id
$sql = "SELECT * FROM teachers WHERE id = '$teacher_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    //if the form is submitted, update the database with the modified values
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST["id"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $jondate = $_POST["jondate"];
        $bgroup = $_POST["bgroup"];
        $religion = $_POST["religion"];
        $email = $_POST["email"];
        $experience = $_POST["experience"];
        $address = $_POST["address"];
        $mobile = $_POST["mobile"];
        $salary = $_POST["salary"];
        

        $sql = "UPDATE teachers SET id='$id', fname='$fname', lname='$lname', gender='$gender', dob='$dob', jondate='$jondate',  bgroup='$bgroup', religion='$religion', email='$email', experience='$experience', address='$address', mobile='$mobile', salary='$salary' WHERE id='$teacher_id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            //redirect back to the student details page after the record is updated
            header("Location: teacher-details.php?teacher_id=$teacher_id");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

} else {
    echo "No student record found";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Octas - Teachers</title>

    <!-- Css Links -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
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
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.php">Teacher List</a></li>
                                <li><a href="teacher-details.php">Teacher View</a></li>
                                <li><a href="add-teacher.php">Teacher Add</a></li>
                                <li><a href="edit-teacher.php" class="active">Teacher Edit</a></li>
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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Edit Teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
                                <li class="breadcrumb-item active">Edit Teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="edit-teacher.php?teacher_id=<?php echo $teacher_id; ?>" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Techer Details</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Fast Name <span class="login-danger">*</span></label>
                                                <input type="text" name="fname" class="form-control"
                                                    placeholder="Enter Name" value="<?php echo $row['fname']?>">
                                            </div>
                                        </div>
                                        <div class=" col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Last Name <span class="login-danger">*</span></label>
                                                <input type="text" name="lname" class="form-control"
                                                    placeholder="Enter Name" value="<?php echo $row['lname']?>">
                                            </div>
                                        </div>
                                        <div class=" col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Teacher ID <span class="login-danger">*</span></label>
                                                <input type="text" name="id" class="form-control"
                                                    placeholder="Teacher ID" value="<?php echo $row['id']?>">
                                            </div>
                                        </div>
                                        <div class=" col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Gender <span class="login-danger">*</span></label>
                                                <select class="form-control select" name="gender">
                                                    <option>Select Gender</option>
                                                    <option <?php if ($row['gender'] == 'Male') echo 'selected' ?>>
                                                        Male
                                                    </option>
                                                    <option <?php if ($row['gender'] == 'Female') echo 'selected' ?>>
                                                        Female
                                                    </option>
                                                    <option <?php if ($row['gender'] == 'Others') echo 'selected' ?>>
                                                        Others
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Experience <span class="login-danger">*</span></label>
                                                <input class="form-control" name="experience" type="text"
                                                    placeholder="Enter Experience"
                                                    value="<?php echo $row['experience']?>">
                                            </div>
                                        </div>
                                        <div class=" col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Email <span class="login-danger">*</span></label>
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Email Address" value="<?php echo $row['email']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Mobile <span class="login-danger">*</span></label>
                                                <input type="text" name="mobile" class="form-control"
                                                    placeholder="Enter Phone" value="<?php echo $row['mobile']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" name="dob" type="text"
                                                    placeholder="DD-MM-YYYY" value="<?php echo $row['dob']?>">
                                            </div>
                                        </div>
                                        <!-- Religion -->
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Religion <span class="login-danger">*</span></label>
                                                <select class="form-control select" name="religion">
                                                    <option>Please Select religion </option>
                                                    <option <?php if ($row['religion'] == 'Muslim') echo 'selected' ?>>
                                                        Muslim
                                                    </option>
                                                    <option <?php if ($row['religion'] == 'Hindu') echo 'selected' ?>>
                                                        Hindu
                                                    </option>
                                                    <option
                                                        <?php if ($row['religion'] == 'Christian') echo 'selected' ?>>
                                                        Christian
                                                    </option>
                                                    <option <?php if ($row['religion'] == 'Others') echo 'selected' ?>>
                                                        Others
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Blood Group -->
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Blood Group <span class="login-danger">*</span></label>
                                                <select class="form-control select" name="bgroup">
                                                    <option>Please Select Group </option>
                                                    <option <?php if ($row['bgroup'] == 'O+') echo 'selected' ?>>
                                                        O+
                                                    </option>
                                                    <option <?php if ($row['bgroup'] == 'A+') echo 'selected' ?>>
                                                        A+
                                                    </option>
                                                    <option <?php if ($row['bgroup'] == 'B+') echo 'selected' ?>>
                                                        B+
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Joining Date <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" name="jondate" type="text"
                                                    placeholder="DD-MM-YYYY" value="<?php echo $row['jondate']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Address <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="address"
                                                    placeholder="Enter Address" value="<?php echo $row['address']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Monthly Salary <span class="login-danger">*</span></label>
                                                <input class="form-control" name="salary" type="text"
                                                    placeholder="Enter Amount" value="<?php echo $row['salary']?>">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button type="submit" value='Update'
                                                    class="btn btn-primary">Submit</button>
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
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>