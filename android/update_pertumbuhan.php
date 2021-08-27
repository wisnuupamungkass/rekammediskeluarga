<?php

$response = array();
 
if (isset($_POST['id_pertumbuhan'])) {
 
    $id_pertumbuhan = $_POST['id_pertumbuhan'];
    $tanggal = date ("Y-m-d", strtotime($_POST["tanggal"]));
    $lingkar_kepala = $_POST['lingkar_kepala'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
   
    include 'db_connect.php';
 
    $query = "UPDATE pertumbuhan SET tanggal = '$tanggal',lingkar_kepala='$lingkar_kepala',berat_badan='$berat_badan',tinggi_badan='$tinggi_badan' WHERE id_pertumbuhan='$id_pertumbuhan'";
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