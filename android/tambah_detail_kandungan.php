<?php

$response = array();
 
if (isset($_POST['kandungan_id'])) {
 
    $tanggal_periksa = $_POST['tanggal_periksa'];
    $bulan_hamil = $_POST['bulan_hamil'];
    $kondisi_janin = $_POST['kondisi_janin'];
    $kandungan_id = $_POST['kandungan_id'];
    $petugas_id = $_POST['petugas_id'];
   
    include 'db_connect.php';
 
    $query = "INSERT INTO detail_kandungan (tanggal_periksa,bulan_hamil,kondisi_janin,kandungan_id,petugas_id) VALUES ('$tanggal_periksa','$bulan_hamil','$kondisi_janin','$kandungan_id','$petugas_id')";
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