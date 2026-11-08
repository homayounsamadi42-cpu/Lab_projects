<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Setup Students Table</h4>
                </div>
                <div class="card-body text-center">
                    <?php
                    // Connection starter to default database "wis_lab"
                    $conn = new mysqli("localhost", "root", "", "wis_lab");
                    
                    if ($conn->connect_error) {
                        die("<div class='alert alert-danger text-start'>Connection failed: " . $conn->connect_error . "</div>");
                    }
                    
                    // TODO: write CREATE TABLE students (...) SQL
                    $sql = "CREATE TABLE IF NOT EXISTS students (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        full_name VARCHAR(100) NOT NULL,
                        email VARCHAR(120) NOT NULL,
                        department VARCHAR(80) NOT NULL,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    )";
                    
                    // TODO: execute it with $conn->query($sql) and show success/error message
                    if ($conn->query($sql) === TRUE) {
                        echo "<div class='alert alert-success text-start'>Table <strong>students</strong> created successfully!</div>";
                        echo "<a href='insert_student.php' class='btn btn-success w-100 mt-2'>Go to Student Entry Form</a>";
                    } else {
                        echo "<div class='alert alert-danger text-start'>Error creating table: " . $conn->error . "</div>";
                    }
                    
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
