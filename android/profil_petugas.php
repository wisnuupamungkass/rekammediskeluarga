<?php
include "db_connect.php";

$email = $_GET["email"];

$query = "SELECT * FROM petugas WHERE email='$email' ";
$hasil =MYSQLi_QUERY($connect,$query);

$response = array();
$response["petugas"] = array();
if (MYSQLi_NUM_ROWS($hasil) > 0) {
	while ($data = MYSQLi_FETCH_ARRAY($hasil))
	{
		$h['id_petugas']    	= $data['id_petugas'];
		$h['nama']  			= $data['nama'];
		$h['tgl_lahir']  		= $data['tgl_lahir'];
		$h["tgl_lahir"] 		= date ("d F Y", strtotime($data["tgl_lahir"]));
		$h['jenis_kelamin']  	= $data['jenis_kelamin'];
		$h['no_hp']  			= $data['no_hp'];
		$h['alamat']  			= $data['alamat'];
		$h['nama_klinik']  		= $data['nama_klinik'];
		$h['izin_praktek']  	= $data['izin_praktek'];
		$h['foto']		  		= $data['foto'];

		array_push($response["petugas"], $h);
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