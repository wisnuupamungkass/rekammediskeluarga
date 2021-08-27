<?php
 
$response = array();
 
if (isset($_POST['no_ktp'])) {
 
    $no_ktp = $_POST['no_ktp'];
    $id_firebase = $_POST['id_firebase'];

    include 'db_connect.php';
        
    $query = "UPDATE pesan SET id_firebase='$id_firebase' WHERE no_ktp='$no_ktp'";
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