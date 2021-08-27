<?php

include 'db_connect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{

	$foto = $_POST['foto'];
	$tanggal_periksa = $_POST['tanggal_periksa'];


	$id = $tanggal_periksa;

	$path = "uploads/$id.png";
	$actualpath = "http://rekammedis.gudangtechno.web.id/android/$path";

	$sql = "UPDATE detail_kandungan SET foto = '$actualpath' WHERE tanggal_periksa= '$tanggal_periksa'";

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