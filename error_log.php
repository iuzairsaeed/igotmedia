<?php
ob_start();
session_start();

$code = $_GET['code'];
$message = $_GET['message'];


$data = array(
    'code' => $code,
    'message' => $message,
    'user_id' => $_SESSION['lead_id']
);
$d = json_encode($data);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://cms.maxicon.com/api/error_log",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $d,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
    ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo ("cURL Error #:" . $err);
        // die();
    } else {     
        echo $response;
        // die();
    }
    $response=json_decode($response);
    $msg=$response->message;
    echo $msg;


exit();