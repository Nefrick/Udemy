<?php
include('conn.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql) or die("error " . mysqli_error($conn));

$myArray = array();

while($row = mysqli_fetch_assoc($result)){
  $myArray[] = $row;
}
mysqli_close($conn);

header('Content-type: application/json');
//$json = file_get_contents('json.json');
/*
$myArray = array(
"user1" => array(
"firstName" => "John2",
"lastName" => "Smith",
"age" => 25)
);
*/
$json = json_encode($myArray);
echo $json;
 ?>
