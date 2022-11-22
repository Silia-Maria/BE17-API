<?php

// Set Content header to Json
header("Content-Type: application/json");

// Check if id has value
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    require_once "db_check.php";

    if (empty($name) && empty($price) && empty($picture)) {
        response(200, "car not found", null);
    } else {
        response(200, "car found", $row);
    }
} else {
    response(400, "invalid request", null);
}

//Function for delivering JSON response

function response($status, $status_message, $data)
{
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);

    echo $json_response;
}
