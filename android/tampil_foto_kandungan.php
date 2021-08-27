<?php
include 'db_connect.php';

$id_kandungan=$_GET["kandungan_id"];
 
$query = "SELECT * FROM detail_kandungan WHERE kandungan_id = '$id_kandungan'";
$result = MySQLi_QUERY($connect, $query);
$response = array();
$response["usg"] = array();
 
if (MySQLi_NUM_ROWS($result) > 0) {
 
  while ($row = MySQLi_FETCH_ARRAY($result)) {
   $usg = array();
   $usg["bulan_hamil"] = $row["bulan_hamil"];
   $usg["foto"] = $row["foto"];
 
   array_push($response["usg"], $usg);
  }

  $response["success"] = 1;
 
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada data Kandungan";
 
  echo json_encode($response);
 }
?>