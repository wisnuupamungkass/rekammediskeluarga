<?php

$response = array();

include 'db_connect.php';

$no_ktp=$_GET['no_ktp'];

$query = "SELECT * FROM rekammedis WHERE no_ktp ='$no_ktp'";

$result = MySQLi_QUERY($connect, $query);

$rekammedis = array();

$response["rekammedis"] = array();

 if (MySQLi_NUM_ROWS($result) > 0) {


  while ($row = MySQLi_FETCH_ARRAY($result)) {

   $rekammedis["id_periksa"] = $row["id_periksa"];

   $rekammedis["tanggal"] = $row["tanggal"];

   $rekammedis["tanggal"] = date ("d F Y", strtotime($rekammedis["tanggal"]));

   $rekammedis["keluhan"] = $row["keluhan"];

   $rekammedis["riwayat_penyakit"] = $row["riwayat_penyakit"];

   $rekammedis["diagnosa"] = $row["diagnosa"];

   $rekammedis["tindakan_medis"] = $row["tindakan_medis"];

   $rekammedis["obat"] = $row["obat"];

   $rekammedis["no_register"] = $row["no_register"];

   $rekammedis["no_ktp"] = $row["no_ktp"];

   $rekammedis["id_petugas"] = $row["id_petugas"];

 

   array_push($response["rekammedis"], $rekammedis);

  }



  $response["success"] = 1;

 

  echo json_encode($response);

 } else {

  $response["success"] = 0;

  $response["message"] = "Tidak ada data Rekam Medis";

 

  echo json_encode($response);

 }

?>