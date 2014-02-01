<?php
$host = 'https://kippt.com/api/';
$username = 'davidbauer'; //Your Kippt Usernamme
$token = 'b00f25215915f518d1a61b67be9fc8ec6a866c2f'; //Your Kippt API Key
$list_id = 'work'; //The ID of the list you want to use
$limit = '5'; //The number of clips you want to pull

$process = curl_init($host.'lists/'.$list_id.'/clips/?limit='.$limit);
curl_setopt($process, CURLOPT_HTTPHEADER, array(
    'X-Kippt-Username: '.$username,
    'X-Kippt-API-Token: '.$token
    ));
curl_setopt($process, CURLOPT_TIMEOUT, 30);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($process);
curl_close($process);

echo $response;