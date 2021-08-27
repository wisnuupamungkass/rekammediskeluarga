<?php
include "db_connect.php";

$query = "SELECT * FROM kabupaten ORDER BY id_kabupaten ";
$hasil = MYSQLi_QUERY($connect,$query);

$response = array();

if (MYSQLi_NUM_ROWS($hasil) > 0) {
while ($data = MYSQLi_FETCH_ARRAY($hasil))
{
	$h['id_kabupaten'] = $data['id_kabupaten'];
	$h['provinsi_id'] = $data['provinsi_id'];
	$h['nama_kabupaten'] = $data['nama_kabupaten'];
	
	array_push($response, $h);
}
echo json_encode($response);
}
?>