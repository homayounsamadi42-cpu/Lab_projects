<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Create System Database</h4>
                </div>
                <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $databaseName = trim($_POST["database_name"]);
                        
                        // 1. Connect to MySQL without specifying a database
                        $conn = new mysqli("localhost", "root", "");
                        
                        // TODO 1: check connection
                        if ($conn->connect_error) {
                            echo "<div class='alert alert-danger'>Connection failed: " . $conn->connect_error . "</div>";
                        } else {
                            // TODO 2: validate database name (Letters, numbers, underscores only)
                            if (preg_match('/^[a-zA-Z0-9_]+$/', $databaseName)) {
                                
                                // TODO 3: build CREATE DATABASE SQL
                                $sql = "CREATE DATABASE `$databaseName`";
                                
                                // TODO 4: execute query and display result
                                if ($conn->query($sql) === TRUE) {
                                    echo "<div class='alert alert-success'>Database '$databaseName' created successfully! <br><a href='create_table.php' class='alert-link'>Proceed to Create Table</a></div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Error creating database: " . $conn->error . "</div>";
                                }
                            } else {
                                echo "<div class='alert alert-warning'>Invalid database name! Only letters, numbers, and underscores are allowed.</div>";
                            }
                            
                            // TODO 5: close connection
                            $conn->close();
                        }
                    }
                    ?>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="database_name" class="form-label">Database Name</label>
                            <input type="text" name="database_name" id="database_name" class="form-control" placeholder="e.g., wis_lab" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Create Database</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
