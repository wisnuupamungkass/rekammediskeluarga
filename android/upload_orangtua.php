<?php

include 'db_connect.php';

if($_SERVER['REQUEST_METHOD']=='POST')

{

	$foto = $_POST['foto'];

	$no_ktp = $_POST['no_ktp'];

	$sqli ="SELECT substr(foto, 55,15) AS foto FROM orangtua WHERE no_ktp='$no_ktp'";
 
 	$res = MySQLi_QUERY($connect,$sqli);
 
 	while($row = mysqli_fetch_array($res)){
 		$id = $row['foto'];
 	}

 	if($id==NULL){
 		$id = $no_ktp;
 	}
 	else{
 		$id++;
 	}

 	$path = "uploads/$id.png";
	$actualpath = "http://rekammedis.gudangtechno.web.id/android/$path";

	$sql = "UPDATE orangtua SET foto = '$actualpath' WHERE no_ktp= '$no_ktp'";

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