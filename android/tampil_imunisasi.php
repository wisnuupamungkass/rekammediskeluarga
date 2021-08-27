<?php
include 'db_connect.php';

$no_register=$_GET["no_register"];
 
$query = "SELECT id_imunisasi, tanggal, anak.nama AS nama_anak, petugas.nama AS nama_petugas, nama_imunisasi FROM imunisasi JOIN anak ON anak.no_register=imunisasi.no_register JOIN petugas ON petugas.id_petugas=imunisasi.id_petugas JOIN jenis_imunisasi ON kode_imunisasi=id_jenis WHERE imunisasi.no_register = '$no_register'";
$result = MySQLi_QUERY($connect, $query);
$response = array();
$response["imunisasi"] = array();
 
if (MySQLi_NUM_ROWS($result) > 0) {
 
  while ($row = MySQLi_FETCH_ARRAY($result)) {
   $imunisasi = array();
   $imunisasi["id_imunisasi"] = $row["id_imunisasi"];
   $imunisasi["tanggal"] = $row["tanggal"];
   $imunisasi["tanggal"] = date ("d F Y", strtotime($imunisasi["tanggal"]));
   $imunisasi["nama_imunisasi"] = $row["nama_imunisasi"];
   $imunisasi["nama_anak"] = $row["nama_anak"];
   $imunisasi["nama_petugas"] = $row["nama_petugas"];
 
   array_push($response["imunisasi"], $imunisasi);
  }

  $response["success"] = 1;
 
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada data imunisasi";
 
  echo json_encode($response);
 }
?>