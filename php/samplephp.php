<?php
session_start();
$email=$_SESSION["email"];
$namee=$_SESSION["namee"];
$amt=$_POST["amt"];

$MADESH=new mysqli('localhost','root','','fooddomain');
  if($MADESH->connect_error)
  {
    die("Connection Failed");
  }
  else{
    $sql=$MADESH->prepare("INSERT INTO sampletb(email,namee,amt)VALUES(?,?,?) ");
    $sql->bind_param("ssi",$email,$namee,$amt);
    $sql->execute();
      echo "<script>window.location.href = 'payment-gateway.php';</script>";
      $sql->close();
      $MADESH->close();
  }