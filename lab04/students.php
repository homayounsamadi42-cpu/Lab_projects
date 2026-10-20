<?php
$conn = new mysqli("localhost", "root", "", "st_db");


$sql="SELECT * FROM students ORDER BY ID ASC";

$result=$conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL Students</title>
    <style>
        body{
    font-family: Arial,sans-serif;
    background: #f2f2f2;
    padding: 30px;
}

.container{
    width: 95%;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    overflow-x: auto;
}

h1{
    text-align: center;
}

table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th,td{
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

th{
    background: #007bff;
    color: white;
}

tr:nth-child(even){
    background: #f9f9f9;
}

.add-button{
    display: inline-block;
    padding: 10px 15px;
    background:#007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}


    </style>
</head>
<body>
    <h1>All Students</h1>
    <a class="add button" href="index.php"> Add new Student</a>
    <table>
       <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>email</th>
            <th>Depatement</th>
            <th>time</th>
        </tr>
       </thead>
        <?php
        if ($result->num_rows>0){
            while($student=$result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $student["id"];?></td>
                <td><?php echo $student["full_name"];?></td>
                <td><?php echo $student["email"];?></td>
                <td><?php echo $student["department"];?></td>
                <td><?php echo $student["created_at"];?></td>
            </tr>
            <?php
            }
        }else{
                echo "<tr>";
                echo "<td colspan='11'> No students found</td>";
                echo "</tr>";
            }
            ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
