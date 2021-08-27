<?php
 
$response = array();
 
if (isset($_POST['id_petugas'])) {
 
    $id_petugas = $_POST['id_petugas'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $id_provinsi = $_POST['id_provinsi'];
    $id_kabupaten = $_POST['id_kabupaten'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $status = 'belum';
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    include 'db_connect.php';
 
    $query = "INSERT INTO petugas(id_petugas, nama, tgl_lahir, jenis_kelamin, id_provinsi, id_kabupaten,alamat, no_hp, status, email, password) VALUES('$id_petugas', '$nama', '$tgl_lahir', '$jenis_kelamin', '$id_provinsi', '$id_kabupaten', '$alamat', '$no_hp', '$status', '$email', '$password')";
    $result = MySQLi_QUERY($connect, $query);
 
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