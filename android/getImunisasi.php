<?php
include "db_connect.php";

$query = "SELECT * FROM jenis_imunisasi ORDER BY id_jenis";
$hasil = MYSQLi_QUERY($connect,$query);

$response = array();

while ($data = MYSQLi_FETCH_ARRAY($hasil))
{
	$h['id_jenis']    = $data['id_jenis'];
	$h['nama_imunisasi']  = $data['nama_imunisasi'];
	$h['umur']  = $data['umur'];
	
	array_push($response, $h);
}
 echo json_encode($response);

?>