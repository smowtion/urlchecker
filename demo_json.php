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
## Display file status
$result= json_decode($response);
echo "Files status : ".$result->status;
echo "Files name : ".$result->filename;
echo "Files name : ".$result->filesize_mb." MB";
## Check API used
echo "API queried to day: ".$result->api_query ;
echo "API limited :".$result->daily_limited;
?>
