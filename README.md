#Url Checker API Documentation

---------
URL:http://urlchecker.net/#api

### Description :
Urlchecker.net is a website tools to help you find out the link want to download still A Live or Dead
and get file name,file size

### Required parameters
- link :Single Link need check ( see list host support from http://urlchecker.net/#hosts)
- url : website or folder need extract
- decodelink : Decode single link only ( adf.ly,bit.ly....)
- decodelinks : Decode multi link or website 

*Chose one of parameter only*

### Method : POST OR GET

Optional Parameters
response_format : 'xml' ,'txt' or 'json' (default 'xml')

And response
Result of querry: "Success" OR "Error"
Status of file : "working", "dead" or "unknown" 
Size of file : "KB", "MB" "GB" or "TB" 
current_api_version: API version

----------------------------------------------------------------------------------------



Example: with php

Out put xml
----------------------------------------------------------------------------------------
```php
   <?php
    $response_format="xml";
    $link="http://www.mediafire.com/?wfghxg5x7d159x8";
    $url = 'http://api.urlchecker.net/';
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&link=$link");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);

    $response = curl_exec($ch);
    echo $response;
    ?>
```
And response
OUTPUT

----------------------------------------------------------------------------------------
```php
       <response>
        <link>http://www.mediafire.com/?wfghxg5x7d159x8</link>
        <result>Success</result>
        <status>working</status>
        <filesize>167.53 kB</filesize>
        <filesize_mb>0.164</filesize_mb>
        <api_query>5</api_query>
        <daily_limited>10</daily_limited>
        <api_member_pack>Free</api_member_pack>
        <current_api_version>0.9</current_api_version>
        </response>
```





Out put json
----------------------------------------------------------------------------------------
Example: php

Request url

```php
<?php
$response_format="json";
$link="http://www.mediafire.com/?wfghxg5x7d159x8";
$url = 'http://api.urlchecker.net/';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&link=$link");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  = curl_exec($ch);
echo $response;
?>
```
----------------------------------------------------------------------------------------


OUTPUT


----------------------------------------------------------------------------------------
```php
    {"link":"http:\/\/www.mediafire.com\/?wfghxg5x7d159x8","result":"Success","status":"working","current_api_version":"0.1"}

```



Out put txt
----------------------------------------------------------------------------------------
Example: php

Request url



```php
<?php
$response_format="txt";
$link="http://www.mediafire.com/?wfghxg5x7d159x8";
$url = 'http://api.urlchecker.net/';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&link=$link");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  = curl_exec($ch);
echo $response;
?>
```
----------------------------------------------------------------------------------------

OUTPUT


----------------------------------------------------------------------------------------
```php
link:http://www.mediafire.com/?wfghxg5x7d159x8|result:Success|status:working|api_query:1|current_api_version:0.2

```
