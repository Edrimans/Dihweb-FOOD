<?php
// Database config
$host = "localhost";
$user = "root";
$pass = ""; // Default XAMPP password
$db = "panini_orders";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    http_response_code(500);
    echo "Connection failed: " . $conn->connect_error;
    exit;
}

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    http_response_code(400);
    echo "Invalid input.";
    exit;
}

// Prepare values
$name = $conn->real_escape_string($data['name']);
$phone = $conn->real_escape_string($data['phone']);
$address = $conn->real_escape_string($data['address']);
$items = $conn->real_escape_string(json_encode($data['items']));

// Insert into DB
$sql = "INSERT INTO orders (name, phone, address, items) VALUES ('$name', '$phone', '$address', '$items')";

if ($conn->query($sql) === TRUE) {
    echo "Order saved successfully!";
} else {
    http_response_code(500);
    echo "Error: " . $conn->error;
}
$conn->close();
?>
