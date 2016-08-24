<?php
$conn = mysqli_connect("localhost","root","","jsoncours") or die
("Error ".mysqli_error($conn));

function cleanup($data){
  return mysql_real_escape_string(trim(htmlentities(strip_tags($data))));
}
 ?>
