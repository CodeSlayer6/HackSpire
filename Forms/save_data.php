<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'naac_db'; // Replace with your database name

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $year = $_POST['year'];
    $teacher_name = $_POST['tname'];
    $participation_body = $_POST['tpart'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO form (year, teacher_name, participation_body) 
            VALUES ('$year', '$teacher_name', '$participation_body')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Submitted Successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
