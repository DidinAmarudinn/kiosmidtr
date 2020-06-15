<?php
$server_key = "SB-Mid-server-Gx2eZ5U5YsD5jvvsqq5Mt34t";
$is_production = false;
$api_url= $is_production ? 'https://app.midtrans.com/snap/v1/transactions' : 'https://app.sandbox.midtrans.com/snap/v1/transactions';

if(!strpos($SERVER['REQUEST_URI'], '/charge')){
    http_response_code(404);
    echo "wrong path, make sure it's '/charge'";
    exit();
}

if($SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(404);
    echo "Page not found or wrong HTTP request method used"; 
    exit();
}

$request_body=file_get_contents('php://input');
header('Content-Type: application/json');

?>
