<?php

$response = array();
include 'db_connect.php';

$no_ktp = $_GET["no_ktp"];
 
$query = "SELECT * FROM kandungan WHERE no_ktp ='$no_ktp'";
$result = MySQLi_QUERY($connect, $query);

$kandungan = array();
$response["kandungan"] = array();
 
 if (MySQLi_NUM_ROWS($result) > 0) {

  while ($row = MySQLi_FETCH_ARRAY($result)) {
   $kandungan["id_kandungan"] = $row["id_kandungan"];
   $kandungan["kandungan_ke"] = $row["kandungan_ke"];
   $kandungan["no_ktp"] = $row["no_ktp"];
 
   array_push($response["kandungan"], $kandungan);
  }

  $response["success"] = 1;
 
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada data kandungan";
 
  echo json_encode($response);
 }
?>