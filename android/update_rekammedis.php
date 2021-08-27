<?php

$response = array();
 
if (isset($_POST['id_periksa'])) {
 
    $id_periksa = $_POST['id_periksa'];
    $tanggal = date ("Y-m-d", strtotime($_POST["tanggal"]));
    $keluhan = $_POST['keluhan'];
    $riwayat_penyakit = $_POST['riwayat_penyakit'];
    $diagnosa = $_POST['diagnosa'];
    $tindakan_medis = $_POST['tindakan_medis'];
    $obat = $_POST['obat'];
    $no_register = $_POST['no_register'];
    $no_ktp = $_POST['no_ktp'];
    $id_petugas = $_POST['id_petugas'];
   
    include 'db_connect.php';
 
    $query = "UPDATE rekammedis SET tanggal = '$tanggal', keluhan='$keluhan', riwayat_penyakit='$riwayat_penyakit', diagnosa='$diagnosa', tindakan_medis='$tindakan_medis', obat='$obat', no_register='$no_register', no_ktp='$no_ktp', id_petugas='$id_petugas' WHERE id_periksa='$id_periksa'";
    $result= MySQLi_QUERY($connect, $query);
 
    if ($result) {
        $response["success"] = 1;
        $response["message"] = "Successfully Updated";
 
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