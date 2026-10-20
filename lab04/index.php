<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
   font-family:Arial,Arial,sans-serif;
   background:#f2f2f2;
   margin: 0;
   padding: 30px;
}
.container{
    width: 700px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 10px;

}

h1{
    text-align: center;
}

.font-group{
    margin-bottom:15px;

}

label{
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input,select{
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
}

button{
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover{
    background: #0056b3;

}

.student-link{
    display: block;
    text-align: center;
    margin-top: 20px;
}
    </style>
</head>
<body>
    <div class="container">
        <form action="insert_student.php" method="POST">
            <div class="form-group">
                <label for="name">Student full Name</label>
                <input type="text" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="name">email</label>
                <input type="text" name="email" required>
            </div>
            <div class="form-group">
                <label for="name">Departement</label>
                <input type="text" name="department" required>
            </div>
            <button type="submit">Save Student</button>
        </form>

        <a href="students.php" class="student-link">View All Students</a>
    </div>
</body>
</html>