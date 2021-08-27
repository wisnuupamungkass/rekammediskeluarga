<?php

$response = array();
 
if (isset($_POST['no_register']) && isset($_POST['id_petugas'])) {
 
    $tanggal = $_POST['tanggal'];
    $lingkar_kepala = $_POST['lingkar_kepala'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $no_register = $_POST['no_register'];
    $id_petugas = $_POST['id_petugas'];

    $isi_pesan = 'melakukan imunisasi selanjutnya pada tanggal';
   
    include 'db_connect.php';
 
    $query = "INSERT INTO pertumbuhan (tanggal,lingkar_kepala,berat_badan,tinggi_badan,no_register,id_petugas) VALUES ('$tanggal','$lingkar_kepala','$berat_badan','$tinggi_badan','$no_register','$id_petugas')";
    $result= MySQLi_QUERY($connect, $query);
    
    if($result){
    	$penerima="SELECT MAX(id_pesan) AS id_pesan FROM pesan JOIN orangtua ON orangtua.no_ktp=pesan.no_ktp JOIN anak ON orangtua.no_ktp=anak.ktp_no WHERE anak.no_register='$no_register'";
    	$result_penerima= MySQLi_QUERY($connect, $penerima);

    		 if (MYSQLi_NUM_ROWS($result_penerima) > 0) {
                $id_pesan = MYSQLi_FETCH_ARRAY($result_penerima);
		          $id_pesan = $id_pesan['id_pesan'];      
            }

		$tanggal_pemeriksaan = "SELECT MAX(tanggal) + INTERVAL 30 DAY  AS tanggal_periksa FROM pertumbuhan WHERE no_register='$no_register'";
		$result_kirim= MySQLi_QUERY($connect, $tanggal_pemeriksaan);

    		if (MYSQLi_NUM_ROWS($result_kirim) > 0) {
		        $tanggal_periksa = MYSQLi_FETCH_ARRAY($result_kirim);
                $tanggal_periksa = $tanggal_periksa['tanggal_periksa'];
            }

    	$pesan = "UPDATE pesan SET isi_pesan='$isi_pesan', tanggal_kirim='$tanggal_periksa' WHERE id_pesan='$id_pesan'";
    	$result_sukses= MySQLi_QUERY($connect, $pesan);
    }

        $no_ktp = "SELECT no_ktp FROM pesan WHERE id_pesan='$id_pesan'";
        $result_ktp= MySQLi_QUERY($connect, $no_ktp);
            if (MYSQLi_NUM_ROWS($result_ktp) > 0) {
                $no_ktp = MYSQLi_FETCH_ARRAY($result_ktp);
                $no_ktp = $no_ktp['no_ktp'];
            }

    	$query_firebase = "SELECT id_firebase FROM pesan WHERE no_ktp='$no_ktp' AND no_register='$no_register'";
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
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    echo json_encode($response);
}
?>