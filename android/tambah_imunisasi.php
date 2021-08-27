<?php

$response = array();
 
if (isset($_POST['no_register']) && isset($_POST['id_petugas'])) {
 
    $tanggal = $_POST['tanggal'];
    $no_register = $_POST['no_register'];
    $id_petugas = $_POST['id_petugas'];
    $kode_imunisasi = $_POST['kode_imunisasi'];
   
    include 'db_connect.php';
 
    $query = "INSERT INTO imunisasi (tanggal,no_register,id_petugas,kode_imunisasi) VALUES ('$tanggal','$no_register','$id_petugas','$kode_imunisasi')";
    $result= MySQLi_QUERY($connect, $query);

    if($result){
    $query_orangtua = "SELECT ktp_no FROM anak WHERE no_register ='$no_register'";
    $result_ortu= MySQLi_QUERY($connect, $query_orangtua);

    if (MYSQLi_NUM_ROWS($result_ortu) > 0) {
        $no_ktp = MYSQLi_FETCH_ARRAY($result_ortu);
        $no_ktp = $no_ktp['ktp_no'];      
    }

    $query_imunisasi = "SELECT MAX(id_imunisasi) AS id_imunisasi FROM imunisasi WHERE no_register='$no_register'";
	$result_id= MySQLi_QUERY($connect, $query_imunisasi);

	if (MYSQLi_NUM_ROWS($result_id) > 0) {
        $id_imunisasi = MYSQLi_FETCH_ARRAY($result_id);
        $id_imunisasi = $id_imunisasi['id_imunisasi'];
    }

    $tanggal_kirim = "SELECT tanggal + INTERVAL 30 DAY  AS tanggal_kirim FROM imunisasi WHERE id_imunisasi='$id_imunisasi'";
    $result_kirim= MySQLi_QUERY($connect, $tanggal_kirim);

    if (MYSQLi_NUM_ROWS($result_kirim) > 0) {
        $tanggal_periksa = MYSQLi_FETCH_ARRAY($result_kirim);
        $tanggal_periksa = $tanggal_periksa['tanggal_kirim'];
    }

    $query_pesan = "INSERT INTO pesan (no_ktp,no_register,tanggal_kirim,tgl_tampil,status) VALUES ('$no_ktp','$no_register','$tanggal_periksa', NOW(), '0')";
    $result_penerima= MySQLi_QUERY($connect, $query_pesan);


    if($result_penerima){
    	$query_status = "UPDATE anak SET status_imunisasi = 'sudah' WHERE no_register= '$no_register'";
    	$result_update= MySQLi_QUERY($connect, $query_status);
    }

        if($result_update){
            $response["success"] = 1;
            $response["message"] = "Successfully Created";
        }
 
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
 
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    echo json_encode($response);
}
?>