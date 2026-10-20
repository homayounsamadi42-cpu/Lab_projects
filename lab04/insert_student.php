<?php

$conn = new mysqli("localhost", "root", "", "st_db");

$student_name=$_POST["full_name"];
$email=$_POST["email"];
$departement=$_POST["department"];



$sql="INSERT INTO students(full_name,email,department) 
VALUES (?,?,?)";


$stmt=$conn->prepare($sql);

$stmt->bind_param(
    "sss",
    $student_name,
    $email,
    $departement,
);

if($stmt->execute()){
    echo "Student Saved successfully!";
    echo "<br> <br>";
    echo '<a href="index.php">Add Another Student</a>';
    echo "<br>";
    echo '<a href="students.php">View All Students</a>';
}else{
    echo "Error:".$stmt->error;
}
$stmt->close();
$conn->close();

?>