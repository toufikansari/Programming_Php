<?php
$id = $_POST["student_id"];
$name =$_POST["username"];

echo"Student ID :". htmlspecialchars($id);
echo"<br>";
echo"Student Name :" . htmlspecialchars($name);
?>