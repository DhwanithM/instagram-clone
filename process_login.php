<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
$user = $_POST['username'];
$pass = $_POST['password'];

// Insert data into the database
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
if ($conn->query($sql) === TRUE) {
    header("Location: code.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

