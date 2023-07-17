<?php
//Get variables 
$username = "";
$email = "";
$password = "";


$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
    do { 

        if( empty($username) || empty($email) || empty($password)){
            
            $errorMessage = "All fields need to be filled!";
            break;
        }

        //add new DataBase
        $sql = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalide query" . $conn->error;
            break;
        }

        $username = "";
        $email = "";
        $password = "";

        $errorMessage = "";
        $successMessage = "";

        $successMessage = "Mumber Added Sucessfully";


        header("location: register.php");
        exit;

    }while(false);
}