<?php
include "db_connect.php";

$no_token = $_POST["no_token"];

$query = "SELECT token_no AS no_token, no_register AS id_token, jam_lahir AS jenis_kelamin FROM anak WHERE token_no = '$no_token' UNION SELECT no_token, no_ktp AS id_token, jenis_kelamin FROM orangtua WHERE no_token ='$no_token'";
$hasil =MYSQLi_QUERY($connect,$query);

$response = array();
$response["token"] = array();

if (MYSQLi_NUM_ROWS($hasil) > 0) {
	while ($data = MYSQLi_FETCH_ARRAY($hasil))
	{
		$h['no_token']  = $data['no_token'];
		$h['jenis_kelamin']  = $data['jenis_kelamin'] ;
		$h['id_token']  = $data['id_token'] ;

		array_push($response["token"], $h);
	}

	$response["success"] = 1;
	$response["jenis_kelamin"] = $h['jenis_kelamin'];
	$response["no_token"] = $h['no_token'];
	echo json_encode($response);
}
else {
	$response["success"] = 0;
	$response["message"] = "Tidak ada data";
	echo json_encode($response);
}

?>