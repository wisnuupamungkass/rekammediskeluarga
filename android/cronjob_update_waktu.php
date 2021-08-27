<?php
	include 'db_connect.php';

/*	$query ="UPDATE pesan SET tgl_tampil=NOW()";
	$result = MySQLi_QUERY($connect, $query);
	if($result){*/

		$query_coba = "SELECT tgl_tampil,tanggal_kirim FROM pesan";
	  	$result_coba= MySQLi_QUERY($connect, $query_coba);

	  	if (MySQLi_NUM_ROWS($result_coba) > 0) {
			while ($row = MySQLi_FETCH_ARRAY($result_coba)) {
	   			$tgl_tampil = $row["tgl_tampil"];
	   			$tanggal_kirim = $row["tanggal_kirim"];
	  		}
	  	}

	  	if($tgl_tampil == $tanggal_kirim){
			$query_firebase = "SELECT id_firebase FROM pesan WHERE tgl_tampil=tanggal_kirim";
	        $result_no= MySQLi_QUERY($connect, $query_firebase);

	    	if (MYSQLi_NUM_ROWS($result_no) > 0) {
		        while($data = MYSQLi_FETCH_ARRAY($result_no))
		        {
	            	$id_firebase   = $data['id_firebase'];

	            	$ch = curl_init("https://fcm.googleapis.com/fcm/send");
					$header=array('Content-Type: application/json',
					"Authorization: key=AAAAlotgyCk:APA91bHRQk9RdO7GJFwdJhoeSfcnljzcxco1xJ2R91NZHRtlXJrBggfmtgANT6Fxi6P9qzhSs7BIoT9STrscocCvcxP92x4dcZjCfvSGzKdr07--YLtyiaWKByG4HKghwFKSdyYvmO8b");
					curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
					curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );

					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"notification\": { \"title\": \"Pemberitahuan Imunisasi\",    \"text\": \"Pemberitahuan Status Imunisasi\"  },  \"to\" : \"".$id_firebase."\",    \"click_action\": \"berita\"}");

					curl_exec($ch);
					curl_close($ch);
	        	}
	    	}
		}
	//}
?>