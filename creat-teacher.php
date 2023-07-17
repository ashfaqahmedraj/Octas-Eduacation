<?php
//Get variables 
$id = "";
$fname = "";
$lname = "";
$gender = "";
$dob = "";
$jondate = "";
$bgroup = "";
$religion = "";
$email = "";
$experience = "";
$address = "";
$mobile = "";
$salary = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
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
    
    do { 

        if( empty($id) || empty($fname) || empty($lname) || empty($gender) || empty($dob) || empty($jondate) || empty($bgroup) || empty($religion) || empty($email) || empty($experience) || empty($address) || empty($mobile) || empty($salary)){
            
            $errorMessage = "All fields need to be filled!";
            break;
        }

        //add new DataBase
        $sql = "INSERT INTO teachers(id, fname, lname, gender, dob, jondate, bgroup, religion, email, experience, address, mobile, salary) VALUES ('$id', '$fname', '$lname', '$gender', '$dob', '$jondate', '$bgroup', '$religion', '$email', '$experience', '$address', '$mobile', '$salary')";
        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalide query" . $conn->error;
            break;
        }

        $fname = "";
        $lname = "";
        $gender = "";
        $dob = "";
        $jondate = "";
        $id = "";
        $bgroup = "";
        $religion = "";
        $email = "";
        $experience = "";
        $address = "";
        $mobile = "";
        $salary = "";

        $errorMessage = "";
        $successMessage = "";

        $successMessage = "Mumber Added Sucessfully";


        header("location: add-teacher.php");
        exit;

    }while(false);
}