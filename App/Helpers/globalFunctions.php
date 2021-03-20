<?php

// For APi response
function apiResponse(array $data = array(), Int $status = 200, Bool $success = true)
{
    header("Content-Type: application/json; charset=UTF-8");
    http_response_code($status);
    $data['success'] = $success;
    $response = json_encode($data);
    return $response;
}

// For debuging 
function pd($message = "",Bool $status){
    echo "<pre>";
    print_r($message);
    echo "<pre>";
    if ($status)
        exit;
}
