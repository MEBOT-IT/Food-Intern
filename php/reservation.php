<?php
  $place=$_POST["place"];
  $name=$_POST["name"];
  $tel=$_POST["tel"];
  $email=$_POST["email"];
  $date=$_POST["date"];
  $time=$_POST["time"];
  $number=$_POST["number"];
  //DATABASE CONNECTION
  $ATHIRA=new mysqli('localhost','root','','fooddomain');
  if($ATHIRA->connect_error)
  {
    die("Connection Failed");
  }
  else{
    $sql=$ATHIRA->prepare("INSERT INTO tablereservation(name)VALUES(?) ");
    $sql->bind_param("s",$name);
    $sql->execute();
      echo "<script>window.location.href = 'home.php';</script>";
      $sql->close();
      $ATHIRA->close();
}