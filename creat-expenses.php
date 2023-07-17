<?php
//Get variables 
$iname = "";
$quantity = "";
$amount = "";
$source = "";
$date = "";
$pby = "";


$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $iname = $_POST["iname"];
    $quantity = $_POST["quantity"];
    $amount = $_POST["amount"];
    $source = $_POST["source"];
    $date = $_POST["date"];
    $pby = $_POST["pby"];

    
    do { 

        if( empty($iname) || empty($quantity) || empty($amount) || empty($source) || empty($date) || empty($pby)){
            
            $errorMessage = "All fields need to be filled!";
            break;
        }

        //add new DataBase
        $sql = "INSERT INTO expense (iname, quantity, amount, source, date, pby) VALUES ('$iname', '$quantity', '$amount', '$source', '$date', '$pby')";
        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalide query" . $conn->error;
            break;
        }

        $iname = "";
        $quantity = "";
        $amount = "";
        $source = "";
        $date = "";
        $pby = "";

        $errorMessage = "";
        $successMessage = "";

        $successMessage = "Expenses Added Sucessfully";


    }while(false);
}