<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$code = $_POST['code'];

// Store the code in the database
$sql = "INSERT INTO code (code) VALUES ('$code')";
if ($conn->query($sql) === TRUE) {
    header("Location: 404.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

