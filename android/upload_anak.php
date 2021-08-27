<?php

include 'db_connect.php';

if($_SERVER['REQUEST_METHOD']=='POST')

{

	$foto = $_POST['foto'];

	$no_register = $_POST['no_register'];

	$sqli ="SELECT substr(foto, 55,2) AS foto FROM anak WHERE no_register='$no_register'";
 
 	$res = MySQLi_QUERY($connect,$sqli);
 
 	while($row = mysqli_fetch_array($res)){
 		$id = $row['foto'];
 	}

 	if($id==NULL){
 		$id = $no_register;
 	}
 	else{
 		$id = 100+$no_register+$id++;
 	}

	$path = "uploads/$id.png";
	$actualpath = "http://rekammedis.gudangtechno.web.id/android/$path";

	$sql = "UPDATE anak SET foto = '$actualpath' WHERE no_register= '$no_register'";

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