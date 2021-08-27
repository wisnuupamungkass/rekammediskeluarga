<?php

include 'db_connect.php';

if($_SERVER['REQUEST_METHOD']=='POST')

{

	$foto = $_POST['foto'];

	$id_petugas = $_POST['id_petugas'];

	$sqli ="SELECT substr(foto, 55,15) AS foto FROM petugas WHERE id_petugas='$id_petugas'";
 
 	$res = MySQLi_QUERY($connect,$sqli);
 
 	while($row = mysqli_fetch_array($res)){
 		$id = $row['foto'];
 	}

 	if($id==NULL){
 		$id = $id_petugas;
 	}
 	else{
 		$id++;
 	}

	$path = "uploads/$id.png";
	$actualpath = "http://rekammedis.gudangtechno.web.id/android/$path";

	$sql = "UPDATE petugas SET foto = '$actualpath' WHERE id_petugas= '$id_petugas'";

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