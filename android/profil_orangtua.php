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
		$h['no_ktp']    		= $data['no_ktp'];
		$h['nama']  			= $data['nama'];
		$h['tgl_lahir']  		= $data['tgl_lahir'];
		$h["tgl_lahir"] 		= date ("d F Y", strtotime($data["tgl_lahir"]));
		$h['no_hp']  			= $data['no_hp'];
		$h['alamat']  			= $data['alamat'];
		$h['no_token']		  	= $data['no_token'];
		$h['foto']		  	= $data['foto'];

		array_push($response["orangtua"], $h);
	}
	$response["success"] = 1;
	echo json_encode($response);
}
else {
	$response["success"] = 0;
	$response["message"] = "Tidak ada data";
	echo json_encode($response);
}
?>