<?php

// $host = "localhost"; 
// $username = "root"; 
// $password = ""; 
// $database = "cqc_review";
// // Create a connection

// $conn = new mysqli($host, $username, $password, $database);

// // Check the connection
// if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
// }
// ?>

<?php

$host = "sql112.infinityfree.com"; 
$username = "if0_36472891"; 
$password = "l7WvVhCzZaQP"; 
$database = "if0_36472891_cqc_review";
// Create a connection

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


