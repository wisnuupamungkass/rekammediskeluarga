<?php



// array for JSON response

$response = array();

 

// check for required fields

if (isset($_POST)) {

    $nama = $_POST['nama'];

    $tgl_lahir = date ("Y-m-d", strtotime($_POST["tgl_lahir"]));

    $id_provinsi = $_POST['id_provinsi'];

    $id_kabupaten = $_POST['id_kabupaten'];

    $alamat = $_POST['alamat'];

    $no_hp = $_POST['no_hp'];

    $email = $_POST['email'];

 

    include 'db_connect.php';



    $query = "UPDATE orangtua SET nama = '$nama' , tgl_lahir = '$tgl_lahir', id_provinsi = '$id_provinsi', id_kabupaten = '$id_kabupaten', alamat = '$alamat', no_hp = '$no_hp' WHERE email = '$email'";

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