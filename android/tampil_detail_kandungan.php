<?php

include 'db_connect.php';



$kandungan_id=$_GET["kandungan_id"];

 

$query = "SELECT * FROM detail_kandungan WHERE kandungan_id = '$kandungan_id'";

$result = MySQLi_QUERY($connect, $query);

$response = array();

$response["detailkandungan"] = array();

 

if (MySQLi_NUM_ROWS($result) > 0) {

 

  while ($row = MySQLi_FETCH_ARRAY($result)) {

   $detailkandungan = array();

   $detailkandungan["id_detail"] = $row["id_detail"];

   $detailkandungan["tanggal_periksa"] = $row["tanggal_periksa"];

   $detailkandungan["tanggal_periksa"] = date ("d F Y", strtotime($detailkandungan["tanggal_periksa"]));

   $detailkandungan["bulan_hamil"] = $row["bulan_hamil"];

   $detailkandungan["kondisi_janin"] = $row["kondisi_janin"];

   $detailkandungan["kandungan_id"] = $row["kandungan_id"];

   $detailkandungan["petugas_id"] = $row["petugas_id"];

   $detailkandungan["foto"] = $row["foto"];

 

   array_push($response["detailkandungan"], $detailkandungan);

  }



  $response["success"] = 1;

 

  echo json_encode($response);

 } else {

  $response["success"] = 0;

  $response["message"] = "Tidak ada data detail kandungan";

 

  echo json_encode($response);

 }

?>