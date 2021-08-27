<?php

$response = array();
 
if (isset($_POST['id_imunisasi'])) {
 
    $id_imunisasi = $_POST['id_imunisasi'];
    $tanggal = date ("Y-m-d", strtotime($_POST["tanggal"]));
    $no_register = $_POST['no_register'];
    $id_petugas = $_POST['id_petugas'];
    $kode_imunisasi = $_POST['kode_imunisasi'];
   
    include 'db_connect.php';
 
    $query = "UPDATE imunisasi SET tanggal = '$tanggal', kode_imunisasi='$kode_imunisasi',no_register='$no_register', id_petugas='$id_petugas' WHERE id_imunisasi='$id_imunisasi'";
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