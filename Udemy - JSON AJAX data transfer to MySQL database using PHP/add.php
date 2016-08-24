<?php
$conn = new mysqli("localhost", "root", "", "jsoncours");

if($conn->connect_error){die("error");}
/*
$firstName = cleanup($_POST['firstName']);
$lastName = cleanup($_POST['lastName']);
$age = cleanup($_POST['age']);
*/

$sql = $conn->prepare("INSERT INTO users (`firstName`, `lastName`, `age` )
VALUES (?,?,?)");

$sql->bind_param("ssi",$_POST['firstName'], $_POST['lastName'],$_POST['age']);


if ($sql->execute()){
  echo "success";
}else{
  echo 'error'. mysqli_error($conn);
}

$sql->close();
/*
$sql = "INSERT INTO users (`firstName`, `lastName`, `age` )
VALUES ('".$firstName."','".$lastName."','".$age."')";

if (mysqli_query($conn, $sql)){
  echo "success";
}else{
  echo 'error'. mysqli_error($conn);
}
mysqli_close($conn);
*/

 ?>
