<?php
//connection with data-base 
require 'config.php';

$teacher_id = $_GET['teacher_id'];

//delete the student record from the database using the student_id
$sql = "DELETE FROM teachers WHERE id='$teacher_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    //redirect back to the student list page after the record is deleted
    header("Location: teachers.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>