<?php
include "db_connect.php";

$no_register = $_GET["no_register"];

$query = "SELECT *,((YEAR(CURDATE())-YEAR(tanggal_lahir))*12)+(MONTH(CURDATE())-MONTH(tanggal_lahir)) AS bulan FROM anak WHERE no_register='$no_register' ";
$hasil =MYSQLi_QUERY($connect,$query);

$response = array();
$response["anak"] = array();
if (MYSQLi_NUM_ROWS($hasil) > 0) {
	while ($data = MYSQLi_FETCH_ARRAY($hasil))
	{
		$h['no_register']    	= $data['no_register'];
		$h['nama']  			= $data['nama'];
		$h['tanggal_lahir']  	= $data['tanggal_lahir'];
		$h["tanggal_lahir"] 	= date ("d F Y", strtotime($data["tanggal_lahir"]));
		$h['jam_lahir']  		= $data['jam_lahir'];
		$h['gender']  			= $data['gender'];
		$h['bulan']  			= $data['bulan'];
		$h['berat_badan']  		= $data['berat_badan'];
		$h['panjang_badan']  	= $data['panjang_badan'];
		$h['lingkar_kepala']  	= $data['lingkar_kepala'];
		$h['token_no']		  	= $data['token_no'];
		$h['foto']		  		= $data['foto'];

		array_push($response["anak"], $h);
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