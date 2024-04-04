
<?php
// $servername = "localhost";
// $username = "name";
// $password = "";
// $dbname = "rsm";

$name = $_POST['name'];
    $age = $_POST['age'];
    $blood = $_POST['blood'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
// Create connection
$conn = new mysqli('localhost', 'root', '', 'rsm');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
    

// Insert data into the database
$sql = ("INSERT INTO blood_management (name, age, blood,email, phone , address) VALUES ('$name','$age','$blood','$email' ,'$phone','$address')");

if ($conn->query($sql) == TRUE) {
    echo "Donation registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

