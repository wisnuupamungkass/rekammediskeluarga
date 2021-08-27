<?php
include 'db_connect.php';

$no_register=$_GET["no_register"];
 
$query = "SELECT * FROM gallery WHERE no_register = '$no_register'";
$result = MySQLi_QUERY($connect, $query);
$response = array();
$response["gallery"] = array();
 
if (MySQLi_NUM_ROWS($result) > 0) {
 
  while ($row = MySQLi_FETCH_ARRAY($result)) {
   $gallery = array();
   $gallery["keterangan"] = $row["keterangan"];
   $gallery["foto"] = $row["foto"];
 
   array_push($response["gallery"], $gallery);
  }

  $response["success"] = 1;
 
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada Foto";
 
  echo json_encode($response);
 }
?>