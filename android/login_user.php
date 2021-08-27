<?php

include "db_connect.php";

$email = $_GET["email"];

$query = "SELECT * FROM orangtua WHERE email='$email' ";
$hasil =MYSQLi_QUERY($connect,$query);

$response = array();
$response["orangtua"] = array();

if (MYSQLi_NUM_ROWS($hasil) > 0) {
	while ($data = MYSQLi_FETCH_ARRAY($hasil))
	{

		$h['email']    	= $data['email'];
		$h['uid']    	= $data['uid'];
		$h['nama']    	= $data['nama'];
		$h['no_ktp']    = $data['no_ktp'];
		$h['jenis_kelamin']  = $data['jenis_kelamin'] ;

		array_push($response["orangtua"], $h);
	}

	$response["success"] = 1;
	$response["jenis_kelamin"] = $h['jenis_kelamin'];
	echo json_encode($response);
}
else {

	$response["success"] = 0;
	$response["message"] = "Tidak ada data";
	echo json_encode($response);
}

?>