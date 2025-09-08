<?php
$host = "localhost";
$user = "root";
$pass = "12345678"; 
$db   = "FormDB";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name    = htmlspecialchars(trim($_POST['name']));
$email   = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$company = htmlspecialchars(trim($_POST['company']));
$phone   = htmlspecialchars(trim($_POST['phone']));

if (!$email) {
  die("Invalid email format.");
}

$stmt = $conn->prepare("INSERT INTO Form (name, email, company, phone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $company, $phone);

if ($stmt->execute()) {
  echo "Lead captured successfully!";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
