<?php
$response_format="json";
$key='demo';
$link="http://www.mediafire.com/?wfghxg5x7d159x8";
$api = 'http://api.urlchecker.org/';
$ch = curl_init($api);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&key=$key&link=$link");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  = curl_exec($ch);
echo $response;
## Display file status
$result= json_decode($response);
echo "Files status : ".$result->status."<br/>";
echo "Files name : ".$result->filename."<br/>";
echo "Files name : ".$result->filesize_mb." MB"."<br/>";
## Check API used
echo "API queried to day: ".$result->api_query."<br/>" ;
echo "API limited :".$result->daily_limited."<br/>";
?>
