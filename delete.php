<?php
//connection with data-base 
require 'config.php';

//retrieve the student_id from the GET parameter
$student_id = $_GET['student_id'];

//delete the student record from the database using the student_id
$sql = "DELETE FROM students WHERE id='$student_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    //redirect back to the student list page after the record is deleted
    header("Location: students.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}






$conn->close();
?>