<?php
include "db_connect.php";

$query = "SELECT * FROM provinsi ORDER BY id_provinsi ";
$hasil = MYSQLi_QUERY($connect,$query);

$response = array();

while ($data = MYSQLi_FETCH_ARRAY($hasil))
{
	$h['id_provinsi']    = $data['id_provinsi'];
	$h['nama_provinsi']  = $data['nama_provinsi'];
	
	array_push($response, $h);
}
 echo json_encode($response);

?>