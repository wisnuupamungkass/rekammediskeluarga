<?php

$response = array();
 
if (isset($_POST['no_register']) && isset($_POST['id_petugas'])) {
 
    $tanggal = $_POST['tanggal'];
    $lingkar_kepala = $_POST['lingkar_kepala'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $no_register = $_POST['no_register'];
    $id_petugas = $_POST['id_petugas'];
   
    include 'db_connect.php';
 
    $query = "INSERT INTO pertumbuhan (tanggal,lingkar_kepala,berat_badan,tinggi_badan,no_register,id_petugas) VALUES ('$tanggal','$lingkar_kepala','$berat_badan','$tinggi_badan','$no_register','$id_petugas')";
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