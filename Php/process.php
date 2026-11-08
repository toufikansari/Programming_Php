<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Access the data using the 'name' attribute from the HTML input
    $username = $_POST['username'];
    
    // Always sanitize/escape user input before printing it to prevent XSS
    echo "Hello Tumko Meri website me suawagat he " . htmlspecialchars($username);
}
?>
