<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Student Registration Form</h4>
                </div>
                <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $fullName = trim($_POST["full_name"]);
                        $email = trim($_POST["email"]);
                        $department = trim($_POST["department"]);
                        
                        // TODO 1: create mysqli connection to wis_lab
                        $conn = new mysqli("localhost", "root", "", "wis_lab");
                        
                        if ($conn->connect_error) {
                            echo "<div class='alert alert-danger'>Connection failed: " . $conn->connect_error . "</div>";
                        } else {
                            // TODO 2: validate that fields are not empty & email is valid format
                            if (!empty($fullName) && !empty($email) && !empty($department)) {
                                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    
                                    // CHALLENGE TASK: Using Prepared Statements
                                    // TODO 3: write INSERT INTO students via prepare()
                                    $stmt = $conn->prepare("INSERT INTO students (full_name, email, department) VALUES (?, ?, ?)");
                                    
                                    if ($stmt) {
                                        // bind_param associates types: "sss" stands for 3 strings
                                        $stmt->bind_param("sss", $fullName, $email, $department);
                                        
                                        // TODO 4 & 5: execute and display message
                                        if ($stmt->execute()) {
                                            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                    <strong>Student added successfully!</strong>
                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                  </div>";
                                        } else {
                                            echo "<div class='alert alert-danger'>Execution error: " . $stmt->error . "</div>";
                                        }
                                        
                                        $stmt->close();
                                    } else {
                                        echo "<div class='alert alert-danger'>Prepare error: " . $conn->error . "</div>";
                                    }
                                } else {
                                    echo "<div class='alert alert-warning'>Please enter a valid email address.</div>";
                                }
                            } else {
                                echo "<div class='alert alert-warning'>All fields are required!</div>";
                            }
                            // TODO 6: close connection
                            $conn->close();
                        }
                    }
                    ?>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <input type="text" name="department" class="form-control" required>
                        </div>
                        
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary flex-grow-1">Save Student</button>
                            <button type="reset" class="btn btn-secondary">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle for dismissible alert functionality -->
<script src="https://jsdelivr.net"></script>
</body>
</html>
