<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>wellcome to my db creation app</h1>
    <form action="" method="post">
        <label for="db_name">Database Name</label>
        <input type="text" name="db_name" id="db_name" required>
        <button type="submit" name="submit">Create Database</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    $conn = new mysqli("localhost", "root", "");

    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    } else {
        echo "Connected successfully!<br>";
    }


    $db_name = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST["db_name"]);

    if (!empty($db_name)) {
        
        // $db_name 
        $sql = "CREATE DATABASE IF NOT EXISTS `$db_name`";

        if ($conn->query($sql) === true) {
            echo "Database `$db_name` created successfully";
        } else {
            echo "Something went wrong! " . $conn->error;
        }
        
    } else {
        echo "Error: Invalid database name after filtering!";
    }

    $conn->close();
}
?>
