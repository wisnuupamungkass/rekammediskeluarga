<?php

$response = array();
 
if (isset($_POST['no_ktp'])) {
 
    $kandungan_ke = $_POST['kandungan_ke'];
    $no_ktp = $_POST['no_ktp'];
   
    include 'db_connect.php';
 
    $query = "INSERT INTO kandungan (kandungan_ke,no_ktp) VALUES ('$kandungan_ke','$no_ktp')";
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