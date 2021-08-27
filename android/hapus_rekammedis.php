<?php

// array for JSON response
$response = array();
 
// check for required fields
if (ISSET($_GET['id_periksa'])) {
    $id_periksa = $_GET['id_periksa'];
 
    // include db connect class
    include "db_connect.php";
 
    $query = "DELETE FROM rekammedis WHERE id_periksa = '$id_periksa'";
    $result= MySQLi_QUERY($connect, $query);
 
    // check if row deleted or not
    if (MySQLi_AFFECTED_ROWS() > 0) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "successfully Deleted";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "No found";
 
        // echo no users JSON
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