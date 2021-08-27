<?php

$response = array();


if (isset($_POST['nama'])) {

include 'no_token.php';

 
    $nama = $_POST['nama'];

    $tanggal_lahir = $_POST['tanggal_lahir'];

    $jam_lahir = $_POST['jam_lahir'];

    $gender = $_POST['gender'];

    $berat_badan = $_POST['berat_badan'];

    $panjang_badan = $_POST['panjang_badan'];

    $lingkar_kepala = $_POST['lingkar_kepala'];

    $ktp_no = $_POST['ktp_no'];

	$status_imunisasi = 'belum';

    $token_no = $hasil;

 

    include 'db_connect.php';

 

    $query = "INSERT INTO anak(nama, tanggal_lahir, jam_lahir, gender, berat_badan, panjang_badan,lingkar_kepala, ktp_no, status_imunisasi, token_no) VALUES('$nama', '$tanggal_lahir', '$jam_lahir','$gender', '$berat_badan', '$panjang_badan', '$lingkar_kepala', '$ktp_no', '$status_imunisasi','$token_no')";

    $result = MySQLi_QUERY($connect, $query);

 

    if ($result) {

        $query_register = "SELECT MAX(no_register) as no_register FROM anak WHERE ktp_no='$ktp_no'";
        $result_register = MySQLi_QUERY($connect, $query_register);

        if (MYSQLi_NUM_ROWS($result_register) > 0) {
        $id_register = MYSQLi_FETCH_ARRAY($result_register);
        $no_register = $id_register['no_register'];
    }

        $query_pesan = "INSERT INTO pesan(no_ktp,no_register,tanggal_kirim,tgl_tampil,status) VALUES('$ktp_no','$no_register',NOW()+INTERVAL 30 DAY, NOW(),'0')";
        $result_pesan = MySQLi_QUERY($connect, $query_pesan);

        if($result_pesan){        
            $response["success"] = 1;
            $response["message"] = "Successfully Created";
        }
 
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