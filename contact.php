<?php
// Database config
$host = "localhost";
$dbname = "portfolio";  // Your database name
$username = "root";     // Default username in XAMPP
$password = "";         // Default password for XAMPP

// Connect to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into the database
/*$sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute(); */

$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute();


// Send an email (optional)
mail("your@email.com", "New Portfolio Message", $message, "From: $email");

// Send a response (optional)
echo "Message sent successfully!";

$stmt->close();
$conn->close();
?>



