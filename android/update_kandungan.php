<?php

// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['id_detail'])) {
 
    $id_detail = $_POST['id_detail'];
    $tanggal_periksa = date ("Y-m-d", strtotime($_POST["tanggal_periksa"]));
    $bulan_hamil = $_POST['bulan_hamil'];
    $kondisi_janin = $_POST['kondisi_janin'];
 
    // include db connect class
    include 'db_connect.php';

    $query = "UPDATE detail_kandungan SET tanggal_periksa = '$tanggal_periksa' , bulan_hamil = '$bulan_hamil', kondisi_janin = '$kondisi_janin' WHERE id_detail = '$id_detail' ";
    $result= MySQLi_QUERY($connect, $query);
 
    // check if row inserted or not
    if ($result) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Successfully Updated.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "Tidak ada data";
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>