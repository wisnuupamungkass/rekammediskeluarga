<?php

$response = array();
 
if (isset($_POST['no_register']) && isset($_POST['id_petugas'])) {
 
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];
    $riwayat_penyakit = $_POST['riwayat_penyakit'];
    $diagnosa = $_POST['diagnosa'];
    $tindakan_medis = $_POST['tindakan_medis'];
    $obat = $_POST['obat'];
    $no_register = $_POST['no_register'];
    $no_ktp = $_POST['no_ktp'];
    $id_petugas = $_POST['id_petugas'];
   
    include 'db_connect.php';
 
    $query = "INSERT INTO rekammedis (tanggal,keluhan,riwayat_penyakit,diagnosa,tindakan_medis,obat,no_register,no_ktp,id_petugas) VALUES ('$tanggal','$keluhan','$riwayat_penyakit','$diagnosa', '$tindakan_medis','$obat','$no_register','$no_ktp','$id_petugas')";
    $result= MySQLi_QUERY($connect, $query);
 
    if ($result) {
        $response["success"] = 1;
        $response["message"] = "Successfully Created";
 
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