<?php

$response = array();
 
if (isset($_POST['email']) && isset($_POST['uid'])) {

    include 'no_token.php';

    $no_ktp = $_POST['no_ktp'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $id_provinsi = $_POST['id_provinsi'];
    $id_kabupaten = $_POST['id_kabupaten'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $no_token = $hasil;
    $email = $_POST['email'];
    $uid = $_POST['uid'];
   
    include 'db_connect.php';
 
    $query = "INSERT INTO orangtua(no_ktp,nama,tgl_lahir,jenis_kelamin,id_provinsi,id_kabupaten,alamat, no_hp, no_token,email,uid) VALUES('$no_ktp', '$nama', '$tgl_lahir', '$jenis_kelamin', '$id_provinsi', '$id_kabupaten', '$alamat', '$no_hp', '$no_token', '$email', '$uid')";
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