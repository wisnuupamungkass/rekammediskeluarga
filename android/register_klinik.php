<?php
 
$response = array();
 
if (isset($_POST['nama_klinik']) && isset($_POST['izin_praktek'])) {
 
    $email = $_POST['email'];
    $nama_klinik = $_POST['nama_klinik'];
    $izin_praktek = $_POST['izin_praktek'];
    $status = 'tunggu';

    include 'db_connect.php';

    $query = "UPDATE petugas SET nama_klinik = '$nama_klinik', izin_praktek = '$izin_praktek', status = '$status' WHERE email = '$email' ";
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