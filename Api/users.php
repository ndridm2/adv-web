<?php

header('content-Type: application/json');

require '../config/app.php';

$query = select("SELECT * FROM user");

// cek data
if ($query) {

    $response = array(
        'status'            => true,
        'message'           => "Data GET Success",
        'data users'        => $query
    );
} else {
    $response = array(
        'status'    => false,
        'message'   => "Data Not Found"
    );
}
echo json_encode($response);
