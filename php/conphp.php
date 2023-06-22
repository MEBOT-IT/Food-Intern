  <?php
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $message=$_POST["message"];
  
  //DATABASE CONNECTION
  $MADESH=new mysqli('localhost','root','','fooddomain');
  if($MADESH->connect_error)
  {
    die("Connection Failed");
  }
  else{
    $sql=$MADESH->prepare("INSERT INTO contactus(name,email,phone,message)VALUES(?,?,?,?) ");
    $sql->bind_param("ssis",$name,$email,$phone,$message);
    $sql->execute();
      echo "<script>window.location.href = 'home.php';</script>";
      $sql->close();
      $MADESH->close();
  }