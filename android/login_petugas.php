<?php
include "db_connect.php";

$email = $_GET["email"];
$password = $_GET["password"];

$query = "SELECT * FROM petugas WHERE email='$email' AND password='$password' ";
$hasil =MYSQLi_QUERY($connect,$query);

$response = array();
$response["petugas"] = array();
if (MYSQLi_NUM_ROWS($hasil) > 0) {
	while ($data = MYSQLi_FETCH_ARRAY($hasil))
	{
		$h['email']    	= $data['email'];
		$h['password']  = $data['password'];
		$h['id_petugas'] = $data['id_petugas'];
		$h['status']  	= $data['status'] ;

		array_push($response["petugas"], $h);
	}
	$response["success"] = 1;
	$response["status"] = $h['status'];
	echo json_encode($response);
}
else {
	$response["success"] = 0;
	$response["message"] = "Tidak ada data";
	echo json_encode($response);
}
?>