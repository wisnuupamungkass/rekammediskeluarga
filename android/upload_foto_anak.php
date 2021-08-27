<?php

include 'db_connect.php';

if($_SERVER['REQUEST_METHOD']=='POST')

{
	$keterangan = $_POST['keterangan'];
	$foto = $_POST['foto'];
	$no_register = $_POST['no_register'];

	$sql ="SELECT id_gallery FROM gallery ORDER BY id_gallery ASC";
 	$res = MySQLi_QUERY($connect,$sql);

	$id = 0;
	while($row = MySQLi_FETCH_ARRAY($res)){
 	$id = $row['id_gallery'];
 	}

	$path = "uploads/$id.png";
	$actualpath = "http://rekammedis.gudangtechno.web.id/android/$path";

	$sql = "INSERT INTO gallery (keterangan,foto,no_register) VALUES ('$keterangan','$actualpath','$no_register')";

	if(MySQLi_QUERY($connect,$sql))

	{
		FILE_PUT_CONTENTS($path,base64_decode($foto));
		echo "Successfully Uploaded";

	}

	else

	{

		echo "Ukuran Foto Terlalu Besar";

	}

	MySQLi_CLOSE($connect);

}

else

{

	echo "Error";

}