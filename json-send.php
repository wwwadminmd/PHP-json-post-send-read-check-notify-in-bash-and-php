<?php
//The URL of the API.
$url = 'http://localhost/backup/read.php';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = 'SERVER 1 OK';

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);
?>
