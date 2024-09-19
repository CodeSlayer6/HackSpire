<?php
// Database connection

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";  // Replace with your MySQL server details
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password
$dbname = "naac_db";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT * FROM form";  // Replace 'criteria1' with your table name
$result = $conn->query($sql);

// Check if rows exist and output data in table format
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Sr.no'] . "</td>";  // Replace 'id' with the correct column names
        echo "<td>" . $row['year'] . "</td>";  // Replace with your actual column names
        echo "<td>" . $row['teacher_name'] . "</td>";  // Replace with your actual column names
        echo "<td>" . $row['participation_body'] . "</td>";  // Replace with your actual column names
        echo "<td><a href='edit.php?id=" . $row['Sr.no'] . "'>Edit</a></td>";
        echo "<td><input type='text' placeholder='Add Comment' id='comment'></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No data available</td></tr>";
}

$conn->close();
?>
