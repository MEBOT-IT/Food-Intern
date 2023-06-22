<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
//DATABASE CONNECTION
$conn = new mysqli('localhost', 'root', '', 'fooddomain');
if ($conn->connect_error) {
  die('connection failed');
} else {
  $stmt = $conn->prepare("INSERT INTO feedback (name,email,number,message) VALUES (?,?,?,?)");
  $stmt->bind_param("ssis", $name, $email, $number, $message);
  $stmt->execute();
  echo "<script>window.location.href = 'home.php';</script>";
  $stmt->close();
  $conn->close();
}