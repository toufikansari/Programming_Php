<?php
$conn =new mysqli(
    "Localhost",
    "root",
    "",
    "college"
);
if($conn-> connect_error){
    die("Connection failed");
}
?>