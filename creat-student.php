<?php
//Get variables 
$fname = "";
$lname = "";
$gender = "";
$dob = "";
$roll = "";
$bgroup = "";
$religion = "";
$email = "";
$class = "";
$btchnum = "";
$address = "";
$phone = "";
$getway = "";
$paid = "";
$due = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
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
    $getway = $_POST["getway"];
    $paid = $_POST["paid"];
    $due = $_POST["due"];
    
    do { 

        if( empty($fname) || empty($lname) || empty($gender) || empty($dob) || empty($roll) || empty($bgroup) || empty($religion) || empty($email) || empty($class) || empty($btchnum) || empty($address) || empty($phone) || empty($getway) || empty($paid) || empty($due)){
            
            $errorMessage = "All fields need to be filled!";
            break;
        }

        //add new DataBase
        $sql = "INSERT INTO students(fname, lname, gender, dob, roll, bgroup, religion, email, class, btchnum, address, phone, getway, paid, due) VALUES ('$fname', '$lname', '$gender', '$dob', '$roll', '$bgroup', '$religion', '$email', '$class', '$btchnum', '$address', '$phone', '$getway', '$paid', '$due' )";
        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalide query" . $conn->error;
            break;
        }

        $fname = "";
        $lname = "";
        $gender = "";
        $dob = "";
        $roll = "";
        $bgroup = "";
        $religion = "";
        $email = "";
        $class = "";
        $btchnum = "";
        $address = "";
        $phone = "";
        $getway = "";
        $paid = "";
        $due = "";

        $errorMessage = "";
        $successMessage = "";

        $successMessage = "Mumber Added Sucessfully";


        header("location: add-student.php");
        exit;

    }while(false);
}