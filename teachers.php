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
    <title>Octas - Teachers</title>

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
                                <li><a href="teachers.php" class="active">Teacher List</a></li>
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
                        <div class="col">
                            <h3 class="page-title">Teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <form action="teacher-search.php" method="post">
                    <div class="student-group-form">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="Search By ID">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="mobile" class="form-control" placeholder="Search By Phone">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="experience" class="form-control" placeholder="Search By Subject">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="search-student-btn">
                                    <button type="btn" name="search" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Teachers</h3>
                                        </div>
                                        <div class="col-auto text-end float-end ms-auto download-grp">
                                            <a href="teachers.php" class="btn btn-outline-gray me-2 active"><i
                                                    class="feather-list"></i></a>
                                            <a href="add-teacher.php" class="btn btn-primary"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table
                                        class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Subject</th>
                                                <th>Mobile Number</th>
                                                <th>Address</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            if (isset($_POST['search'])) {
                                                $id = $_POST['id'];
                                                $mobile = $_POST['mobile'];
                                                $experience = $_POST['experience'];
        
                                                $query = "SELECT * FROM teachers WHERE id LIKE '%$id%' AND mobile LIKE '%$mobile%' AND experience LIKE '%$experience%'";
                                                $result = $conn->query($query);
        
                                                if (!$result) {
                                                    printf("Error: %s\n", mysqli_error($conn));
                                                    exit();
                                                }
                                            
                                                // Handle query results
                                                while ($row = $result->fetch_assoc()){
                                                    echo "
                                                        <tr>
                                                        <td>$row[id]</td>
                                                        <td>
                                                            <h2 class='table-avatar'>
                                                                <a href='teacher-details.html'
                                                                    class='avatar avatar-sm me-2'><img
                                                                        class='avatar-img rounded-circle'
                                                                        src='assets/img/profiles/avatar-01.jpg'
                                                                        alt='User Image'></a>
                                                                <a href='teacher-details.php?teacher_id={$row['id']}'>$row[fname]</a>
                                                            </h2>
                                                        </td>
        
                                                        <td>$row[gender]</td>
                                                        <td>$row[experience]</td>
                                                        <td>$row[mobile]</td>
                                                        <td>$row[address]</td>
                                                        <td class='text-end'>
                                                            <div class='actions'>
                                                                <a href='teacher-details.php?teacher_id={$row['id']}'
                                                                    class='btn btn-sm bg-success-light me-2'>
                                                                    <i class='feather-eye'></i>
                                                                </a>
                                                                <a href='edit-teacher.php?teacher_id={$row['id']}' class='btn btn-sm bg-danger-light'>
                                                                    <i class='feather-edit'></i>
                                                                </a>
                                                                <a href='delete-teacher.php?teacher_id={$row['id']}' class='btn btn-sm bg-danger-light'>
                                                                    <i class='feather-trash'></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>";
                                                } 
                                            }



                                                $sul = "SELECT * FROM teachers";
                                                $result = $conn->query($sul);

                                                if(!$result){
                                                    die("Invaled Query" . $conn->connect_error);
                                                }

                                                while($row = $result->fetch_assoc()){
                                                    echo "
                                            <tr>
                                                <td>$row[id]</td>
                                                <td>
                                                    <h2 class='table-avatar'>
                                                        <a href='teacher-details.html'
                                                            class='avatar avatar-sm me-2'><img
                                                                class='avatar-img rounded-circle'
                                                                src='assets/img/profiles/avatar-01.jpg'
                                                                alt='User Image'></a>
                                                        <a href='teacher-details.php?teacher_id={$row['id']}'>$row[fname]</a>
                                                    </h2>
                                                </td>

                                                <td>$row[gender]</td>
                                                <td>$row[experience]</td>
                                                <td>$row[mobile]</td>
                                                <td>$row[address]</td>
                                                <td class='text-end'>
                                                    <div class='actions'>
                                                        <a href='teacher-details.php?teacher_id={$row['id']}'
                                                            class='btn btn-sm bg-success-light me-2'>
                                                            <i class='feather-eye'></i>
                                                        </a>
                                                        <a href='edit-teacher.php?teacher_id={$row['id']}' class='btn btn-sm bg-danger-light'>
                                                            <i class='feather-edit'></i>
                                                        </a>
                                                        <a href='delete-teacher.php?teacher_id={$row['id']}' class='btn btn-sm bg-danger-light'>
                                                            <i class='feather-trash'></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
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
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>