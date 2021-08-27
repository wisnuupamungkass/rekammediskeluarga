<?php

$response = array();

if (isset($_POST)) {

    $nama = $_POST['nama'];

    $tgl_lahir = date ("Y-m-d", strtotime($_POST["tgl_lahir"]));

    $jenis_kelamin = $_POST['jenis_kelamin'];

    $id_provinsi = $_POST['id_provinsi'];

    $id_kabupaten = $_POST['id_kabupaten'];

    $alamat = $_POST['alamat'];

    $no_hp = $_POST['no_hp'];

    $nama_klinik = $_POST['nama_klinik'];

    $izin_praktek = $_POST['izin_praktek'];

    $email = $_POST['email'];

    include 'db_connect.php';

    $query = "UPDATE petugas SET nama = '$nama' , tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', id_provinsi = '$id_provinsi', id_kabupaten = '$id_kabupaten', alamat = '$alamat', no_hp = '$no_hp', nama_klinik = '$nama_klinik', izin_praktek = '$izin_praktek' WHERE email = '$email'";

    $result= MySQLi_QUERY($connect, $query);

 

    // check if row inserted or not

    if ($hasil) {

        // successfully updated

        $response["success"] = 1;

        $response["message"] = "successfully updated.";

 

        // echoing JSON response

        echo json_encode($response);

    } else {

 

    }

} else {

    // required field is missing

    $response["success"] = 0;

    $response["message"] = "Required field(s) is missing";

 

    // echoing JSON response

    echo json_encode($response);

}

?>