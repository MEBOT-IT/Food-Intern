<?php
//variable
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$specialty = $_POST['specialty'];
$employment = $_POST['employment'];
$experience = $_POST['experience'];

//DATABASE CONNECTION
$con = new mysqli('localhost', 'root', '', 'fooddomain');
if ($con->connect_error) {
  die('connection failed');
} else {
  $stmt = $con->prepare("INSERT INTO application (name,email,phone,specialty,employment,experience) VALUES (?,?,?,?,?,?)");
  $stmt->bind_param("ssisss", $name, $email, $phone, $specialty, $employment, $experience);
  $stmt->execute();
  echo "<script>window.location.href = 'home.php';</script>";
  $stmt->close();
  $con->close();
}
