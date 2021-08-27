<?php

$response = array();
include 'db_connect.php';

$no_ktp = $_GET["no_ktp"];
 
$query = "SELECT id_pesan, tanggal_kirim, tgl_tampil, orangtua.nama AS nama_orangtua, anak.nama AS nama_anak,status FROM pesan JOIN orangtua ON orangtua.no_ktp = pesan.no_ktp JOIN anak ON pesan.no_register = anak.no_register WHERE pesan.no_ktp ='$no_ktp' AND status='0' AND tanggal_kirim=tgl_tampil GROUP BY id_pesan";
$result = MySQLi_QUERY($connect, $query);

$pesan = array();
$response["pesan"] = array();
 
 if (MySQLi_NUM_ROWS($result) > 0) {

  while ($row = MySQLi_FETCH_ARRAY($result)) {
   $pesan["id_pesan"] = $row["id_pesan"];
   $pesan["tanggal_kirim"] = $row["tanggal_kirim"];
   $pesan["tanggal_kirim"] = date ("d-m-Y", strtotime($pesan["tanggal_kirim"]));
   $pesan["tgl_tampil"] = $row["tgl_tampil"];
   $pesan["tgl_tampil"] = date ("d-m-Y", strtotime($pesan["tgl_tampil"]));
   $pesan["nama_anak"] = $row["nama_anak"];
   $pesan["nama_orangtua"] = $row["nama_orangtua"];
 
   array_push($response["pesan"], $pesan);
  }

  $response["success"] = 1;
 
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada Pesan";
 
  echo json_encode($response);
 }
?>