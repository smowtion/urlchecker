Urlchecker.net API
==========
URL:http://urlchecker.net/api.txt

Description : Urlchecker.net is a website tools to help you find out the link want to download still A Live or Dead
----------------------------------------------------------------------------------------

Required parameters
Link: Link need check ( see list host support from http://urlchecker.net/hosts.html)

Method : POST (Remove method GET from old version)

Optional Parameters
response_format : 'xml' ,'txt' or 'json' (default 'xml')

And response
result: "Success" OR "Error"
status : "working" or "dead"
current_api_version: API version

----------------------------------------------------------------------------------------



Example: with php

Out put xml
----------------------------------------------------------------------------------------
```php
<?php
$response_format="xml";
$link="http://www.mediafire.com/?wfghxg5x7d159x8";
$url = 'http://urlchecker.net/api.php';
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
<current_api_version>0.1</current_api_version>
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
$url = 'http://urlchecker.net/api.php';
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
$url = 'http://urlchecker.net/api.php';
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
