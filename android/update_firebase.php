<?php
 
$response = array();
 
if (isset($_POST['no_ktp'])) {
 
    $no_ktp = $_POST['no_ktp'];
    $id_firebase = $_POST['id_firebase'];

    include 'db_connect.php';

    $query_select_id = "SELECT no_ktp FROM pesan WHERE no_ktp='$no_ktp'";
    $result_id= MySQLi_QUERY($connect, $query_select_id);

    if(MYSQLi_NUM_ROWS($result_id) > 0){
        $query = "UPDATE pesan SET id_firebase='$id_firebase' WHERE no_ktp='$no_ktp'";
        $result= MySQLi_QUERY($connect, $query);
    }
    else{
        $query_select_no = "SELECT MAX(no_register) AS no_register FROM anak WHERE ktp_no='$no_ktp'";
        $result_no= MySQLi_QUERY($connect, $query_select_no);

        if (MYSQLi_NUM_ROWS($result_no) > 0) {
        while($data = MYSQLi_FETCH_ARRAY($result_no))
        {
            $no_register   = $data['no_register'];
            $query = "INSERT INTO pesan (id_firebase, no_ktp,no_register) VALUES ('$id_firebase','$no_ktp','$no_register')";
            $result= MySQLi_QUERY($connect, $query);
        }
    }
}
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