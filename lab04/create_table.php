<?php

$conn = new mysqli("localhost", "root", "", "st_db");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// TODO: write CREATE TABLE students (...) SQL
$sql="CREATE TABLE IF NOT EXISTS students(id INT AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(100) NOT NULL,
email VARCHAR(120) NOT NULL,
department VARCHAR(80) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
// TODO: execute it with $conn->query($sql)
if($conn->query($sql)===true){
    
// TODO: show success/error message
    echo "table student created successfully!";
}
else{
    echo "something went wrong!".$conn->error;
};
$conn->close();

?>