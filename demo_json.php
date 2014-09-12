<?php
$response_format="json";
$link="http://www.mediafire.com/?wfghxg5x7d159x8";
$api = 'http://api.urlchecker.net/';
$ch = curl_init($api);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&link=$link");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  = curl_exec($ch);
echo $response;
?>
