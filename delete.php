<?php
// $servername = "localhost";
// $username = "id";
// $password = "";
// $dbname = "rsm";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'rsm');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve donation ID from the form
$donation_id = $_POST['donation_id'];

// Delete the donation from the database
$sql = "DELETE FROM blood_management WHERE id = $donation_id";

if ($conn->query($sql) === TRUE) {
    echo "Donation deleted successfully!";
}
?>