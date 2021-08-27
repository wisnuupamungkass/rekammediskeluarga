<?php
include 'db_connect.php';

$no_register=$_GET["no_register"];
 
$query = "SELECT id_pertumbuhan, tanggal, lingkar_kepala, berat_badan, tinggi_badan, no_register, petugas.nama AS nama_petugas FROM pertumbuhan JOIN petugas ON petugas.id_petugas=pertumbuhan.id_petugas WHERE no_register = '$no_register'";
$result = MySQLi_QUERY($connect, $query);
$response = array();
$response["pertumbuhan"] = array();
 
if (MySQLi_NUM_ROWS($result) > 0) {
 
  while ($row = MySQLi_FETCH_ARRAY($result)) {
   $pertumbuhan = array();
   $pertumbuhan["id_pertumbuhan"] = $row["id_pertumbuhan"];
   $pertumbuhan["tanggal"] = $row["tanggal"];
   $pertumbuhan["tanggal"] = date ("d F Y", strtotime($pertumbuhan["tanggal"]));
   $pertumbuhan["lingkar_kepala"] = $row["lingkar_kepala"];
   $pertumbuhan["berat_badan"] = $row["berat_badan"];
   $pertumbuhan["tinggi_badan"] = $row["tinggi_badan"];
   $pertumbuhan["no_register"] = $row["no_register"];
   $pertumbuhan["nama_petugas"] = $row["nama_petugas"];
 
   array_push($response["pertumbuhan"], $pertumbuhan);
  }

  $response["success"] = 1;
 
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada data pertumbuhan";
 
  echo json_encode($response);
 }
?>