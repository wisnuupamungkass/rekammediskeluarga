<?php



$response = array();

include 'db_connect.php';

$ktp_no=$_GET['ktp_no'];

$query = "SELECT *,((YEAR(CURDATE())-YEAR(tanggal_lahir))*12)+(MONTH(CURDATE())-MONTH(tanggal_lahir)) AS bulan FROM anak WHERE ktp_no='$ktp_no'";

$result = MySQLi_QUERY($connect, $query);

 

 if (MySQLi_NUM_ROWS($result) > 0) {



  $response["anak"] = array();

 

  while ($row = MySQLi_FETCH_ARRAY($result)) {

   $anak = array();

   $anak["no_register"] = $row["no_register"];

   $anak["nama"] = $row["nama"];

   $anak["tanggal_lahir"] = $row["tanggal_lahir"];

   $anak["tanggal_lahir"] = date ("d F Y", strtotime($anak["tanggal_lahir"]));

   $anak["jam_lahir"] = $row["jam_lahir"];

   $anak["bulan"]        = $row["bulan"];

   $anak["gender"] = $row["gender"];

   $anak["berat_badan"] = $row["berat_badan"];

   $anak["panjang_badan"] = $row["panjang_badan"];

   $anak["lingkar_kepala"] = $row["lingkar_kepala"];

   $anak["ktp_no"] = $row["ktp_no"];

   $anak["status_gizi"] = $row["status_gizi"];

   $anak["foto"] = $row["foto"];

   $anak["status_imunisasi"] = $row["status_imunisasi"];

   $anak["token_no"] = $row["token_no"];

 

   array_push($response["anak"], $anak);

  }



  $response["success"] = 1;

 

  echo json_encode($response);

 } else {

  $response["success"] = 0;

  $response["message"] = "Tidak ada data anak";

 

  echo json_encode($response);

 }

?>