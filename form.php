<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Student Form</h2>
    <form action="welcome.php" method="POST">
        <input type="hidden" name="student_id" value="101">
        Enter Name :
        <input type="text" name="username">
        <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>