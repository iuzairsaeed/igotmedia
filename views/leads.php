<?php

$domain = "www.thewebeez.com";
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$brief = $_REQUEST['brief'];
$news = $_REQUEST['news'];
$route = $_REQUEST['route'];
$brand = $_REQUEST['brand'];
$tag = $_REQUEST['tag'];
$price = $_REQUEST['price'];

$data=array(
    'name'=> $name,
    'email'=>$email,
    'phone'=>$phone,
    'brief'=>$brief,
    'news'=>1,
    'route'=>$route,
    'brand'=>$brand,
    'tag' => $tag,
    'price'=> $price,
    'domain' => $domain
);
$payload=json_encode($data);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://cms.maxicon.com/api/customer",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
    ),
));

$response = curl_exec($curl);

$decodeResponse = json_decode($response);
$msg = $decodeResponse[1];

if (headers_sent()) {
    echo "<script>
    window.open('/thank-you/?thanksMsg=$msg','_self')
    </script>";
    echo "Redirect failed. Please click on this link: <a href='/thank-you/?thanksMsg=$msg'>/thank-you/?thanksMsg=$msg</a>";
}
else{
    exit(header("location:/thank-you/?thanksMsg=$msg"));
}

