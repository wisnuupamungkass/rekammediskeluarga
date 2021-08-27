<?php

// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['no_register'])) {
 
    $no_register = $_POST['no_register'];
    $nama = $_POST['nama'];
    $tanggal_lahir = date ("Y-m-d", strtotime($_POST["tanggal_lahir"]));
    $jam_lahir = $_POST['jam_lahir'];
    $gender = $_POST['gender'];
    $berat = $_POST['berat_badan'];
    $panjang = $_POST['panjang_badan'];
    $lingkar = $_POST['lingkar_kepala'];
    $ktp_no = $_POST['ktp_no'];
 
    // include db connect class
    include 'db_connect.php';

    $query = "UPDATE anak SET nama = '$nama' , tanggal_lahir = '$tanggal_lahir', gender = '$gender', jam_lahir = '$jam_lahir', berat_badan = '$berat', panjang_badan = '$panjang', lingkar_kepala = '$lingkar' WHERE no_register = '$no_register' AND ktp_no='$ktp_no'";
    $result= MySQLi_QUERY($connect, $query);
 
    // check if row inserted or not
    if ($result) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "successfully updated.";
 
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