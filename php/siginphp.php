<?php
$email=$_POST["email"];
$password=$_POST["password"];
//DATABASE CONNECTION
$MADDY=new mysqli('localhost','root','','fooddomain');
if($MADDY->connect_error)
{
  die("Connection Failed");
}
else{
  $sql=$MADDY->prepare("INSERT INTO signin(email,password)VALUES(?,?) ");
  $sql->bind_param("ss",$email,$password);
  $sql->execute();
    echo "<script>window.location.href = 'home.php';</script>";
    $sql->close();
    $MADDY->close();
}