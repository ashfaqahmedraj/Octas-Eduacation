<?php 
require 'config.php';
require 'author.php';
//get the student_id parameter from the URL
$student_id = $_GET['student_id'];

//retrieve the student record from the database using the student_id
$sql = "SELECT * FROM students WHERE id = '$student_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    //if the form is submitted, update the database with the modified values
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $roll = $_POST["roll"];
        $bgroup = $_POST["bgroup"];
        $religion = $_POST["religion"];
        $email = $_POST["email"];
        $class = $_POST["class"];
        $btchnum = $_POST["btchnum"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $image = $_POST["image"];
        $getway = $_POST["getway"];
        $paid = $_POST["paid"];
        $due = $_POST["due"];

        $sql = "UPDATE students SET fname='$fname', lname='$lname', gender='$gender', dob='$dob', roll='$roll',  bgroup='$bgroup', religion='$religion', email='$email', class='$class', btchnum='$btchnum', address='$address', phone='$phone', image='$image', getway='$getway', paid='$paid' , due='$due' WHERE id='$student_id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            //redirect back to the student details page after the record is updated
            header("Location: student-details.php?student_id=$student_id");
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
    <title>Octas - Students</title>

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
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.php">Student List</a></li>
                                <li><a href="#">Student View</a></li>
                                <li><a href="add-student.php">Student Add</a></li>
                                <li><a href="#" class="active">Student Edit</a></li>
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
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Edit Students</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                                    <li class="breadcrumb-item active">Edit Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card comman-shadow">
                            <div class="card-body">
                                <form method="post" action="edit-student.php?student_id=<?php echo $student_id; ?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title student-info">Student Information <span><a
                                                        href="javascript:;"><i
                                                            class="feather-more-vertical"></i></a></span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>First Name <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="fname"
                                                    value="<?php echo $row['fname']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Last Name <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="lname"
                                                    value="<?php echo $row['lname']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
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
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" name="dob" type="text"
                                                    value="<?php echo $row['dob']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Roll </label>
                                                <input class="form-control" type="text" name="roll"
                                                    value="<?php echo $row['roll']?>">
                                            </div>
                                        </div>
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
                                            <div class="form-group local-forms">
                                                <label>Religion <span class="login-danger">*</span></label>
                                                <select class="form-control select" name="religion">
                                                    <option>Please Select Religion </option>
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
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>E-Mail <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="email"
                                                    value="<?php echo $row['email']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Department <span class="login-danger">*</span></label>
                                                <select class="form-control select" name="class">
                                                    <option>Select Department </option>

                                                    <option <?php if ($row['class'] == 'IELTS') echo 'selected' ?>>IELTS
                                                    </option>
                                                    <option <?php if ($row['class'] == 'IELTS GT') echo 'selected' ?>>
                                                        IELTS GT
                                                    </option>
                                                    <option
                                                        <?php if ($row['class'] == 'LIFE SKILLS') echo 'selected' ?>>
                                                        LIFE SKILLS
                                                    </option>
                                                    <option
                                                        <?php if ($row['class'] == 'ENGLISH SOPKEN') echo 'selected' ?>>
                                                        ENGLISH SOPKEN
                                                    </option>
                                                    <option
                                                        <?php if ($row['class'] == 'ENGLISH FOR KIDS') echo 'selected' ?>>
                                                        ENGLISH FOR KIDS
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Batch Number <span class="login-danger">*</span></label>
                                                <input class="form-control" name="btchnum" type="number"
                                                    value="<?php echo $row['btchnum']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Address </label>
                                                <input class="form-control" type="text"
                                                    value="<?php echo $row['address']?>" name="address">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Phone </label>
                                                <input class="form-control" type="text" name="phone"
                                                    value="<?php echo $row['phone']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group students-up-files">
                                                <label>Upload Student Photo (150px X 150px)</label>
                                                <div class="uplod">
                                                    <label class="file-upload image-upbtn mb-0">
                                                        Choose File <input type="file">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <h5 class="form-title student-info">Payment Information
                                            </h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Getway </label>
                                                <select class="form-control select" name="getway">
                                                    <option>Select Getway </option>
                                                    <option <?php if ($row['getway'] == 'Cash') echo 'selected' ?>>Cash
                                                    </option>
                                                    <option <?php if ($row['getway'] == 'Bkash') echo 'selected' ?>>
                                                        Bkash</option>
                                                    <option <?php if ($row['getway'] == 'Nagod') echo 'selected' ?>>
                                                        Nagod</option>
                                                    <option <?php if ($row['getway'] == 'Bank') echo 'selected' ?>>Bank
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Paid</label>
                                                <input class="form-control" type="number" name="paid"
                                                    value="<?php echo $row['paid']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Due</label>
                                                <input class="form-control" type="number" name="due"
                                                    value="<?php echo $row['due']?>">
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
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>