<?php
    $response = array();
	$no_ktp = $_GET["no_ktp"];

	include 'db_connect.php';

	$query = "SELECT COUNT(status) AS jumlah FROM pesan WHERE no_ktp ='$no_ktp' AND status='0' AND tgl_tampil=tanggal_kirim";
  	$result= MySQLi_QUERY($connect, $query);

  	$pesan = array();
	$response["pesan"] = array();

	if (MySQLi_NUM_ROWS($result) > 0) {
			while ($row = MySQLi_FETCH_ARRAY($result)) {
   			$pesan["jumlah"] = $row["jumlah"];

   			array_push($response["pesan"], $pesan);
  		}

	$response["success"] = 1;
  	echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada pesan";
 
  echo json_encode($response);
 }
?>