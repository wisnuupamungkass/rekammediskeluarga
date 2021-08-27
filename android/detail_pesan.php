<?php

$response = array();
include 'db_connect.php';

$id_pesan = $_GET["id_pesan"];
 
$query = "UPDATE pesan SET status ='1' WHERE id_pesan='$id_pesan'";
$result = MySQLi_QUERY($connect, $query);

  if($result){

  $response["success"] = 1;
  $response["message"] = "Telah Dibaca";
 
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada Pesan";
 
  echo json_encode($response);
 }
?>