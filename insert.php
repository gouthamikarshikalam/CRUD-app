<?php
// Database connection
$servername = 'localhost';
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password
$dbname = 'myfirst'; // Your MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into database
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$year = $_POST['year'];

$sql = "INSERT INTO stud (name, rollno, year) VALUES ('$name', '$rollno', '$year')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
