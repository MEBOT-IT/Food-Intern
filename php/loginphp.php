
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  echo '<script type ="text/JavaScript">';
  echo "alert('Email:$email You Have Successfully Created an Account')";
  echo '</script>';
  echo "<script>window.location.href = 'home.php';</script>";
}
?>
