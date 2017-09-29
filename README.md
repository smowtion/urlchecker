## Url Checker API Documentation
## Update Sep 29, 2017

---------
URL:http://urlchecker.org/#api

## Description :
urlchecker.org is a website tools to help you find out the link want to download still A Live or Dead
and get file name,file size ( Check 1000 files hosts,ziplink,encoded links and ads link. example: rapidgator,mefiafire,mega.nz,adf.ly and extract files hosting from website....) 
## Features
* We support unlimited 1000 files hosts,ziplink,encoded links and ads link.
* Everything is built API first with a focus on simplicity and compliance to standards.
* We're serious about 99.9% uptime SLA and we have the track record to prove it.
* More than just email support. Live support people standing by to get you started.
* Your first 3000 API Access are free every month.



## Video demo
URL:https://www.youtube.com/watch?v=oEOruOtLSWo

### Required parameters
 API END POINT : https://api5.urlchecker.org/v3/ ( replace older version)

- key : API key( login http://urlchecker.org/member/ and get this key) (* requited)
- link :single Links ( see list host support from http://urlchecker.org/#hosts) (rapidgator.net,mediafire.com...)
- url : website or folder need extract ( extract and check )
- html: send html source code (accept post method only)
- decodelink : Decode single link only (adf.ly,safelinking.net,bit.ly ...)
- decodelinks : Decode multi link or website 
- extract (option) : default 0 ( set to 1 if you want extract only show link list only)

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
## Extract website only and from html source
#### Description: Extract and show link with unstatus ( faster if you have so many link from website or html source)
```php
$html = <<<HTML
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>demo</title>
<body>
http://www.mediafire.com/download/vfl1t7u2bjta3am/0.24_0.zip
http://www.mediafire.com/download/0dbmtx551cy5niu/0321659570_.rar
https://www.oboom.com/AV7XFKW9
https://www.oboom.com/B0H9DTVG/google-play-apk-10-12-12-02.jpg
</body>
</html>
HTML;


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://api.urlchecker.org/v3/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);

$data = array(
    "key" => "YOUR_API_KEY",
    "response_format" => "json",
    "extract" => 1, // extract link to unstatus only 
    "html" => $html // send html source code 
);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

echo $output;
```


## Extract website or folder
Example: with php

*Demo worked with example link only*

*Direct query http://api.urlchecker.org/?url=http://pastebin.com/raw.php?i=d2XYaiYf&key=YOUR_API_KEY*
```php
   <?php
    $response_format="xml";
    $key="demo"; // get from member area
    $link="http://pastebin.com/raw.php?i=d2XYaiYf";
    $url = 'http://api.urlchecker.org/';
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&key=$key&url=$link");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);

    $response = curl_exec($ch);
    echo $response;
    ?>
```
 Out put 'xml'
 
 

```xml


        <response>
                    <title>Checked by urlchecker version 1.0</title>
                    <url></url>
                    <api_query>8</api_query>
                    <daily_limited>250</daily_limited>
                    <api_member_pack>Free</api_member_pack>
                    <api_version>1.0</api_version>
                    <webMaster>thomanphan@gmail.com</webMaster>
           <item>
                <link>http://letitbit.net/download/94986.9b8ca37e93a0f879e3a1c89ca909/Paname_FY.rar.html</link>
                <result>Success</result> 
                <status>working</status> 
                <filename>Paname_FY.rar</filename>
                <filesize>3.45</filesize>
                <filesize_mb>3.45</filesize_mb>
           </item>
           <item>
                <link>http://rapidgator.net/file/007a0d220430bde47d342dfb67b948b3/Paname_FY.rar.html</link>
                <result>Success</result> 
                <status>working</status> 
                <filename>Paname_FY.rar</filename>
                <filesize>3.29</filesize>
                <filesize_mb>3.29</filesize_mb>
           </item>
        </response>
```
## Decode multi link or website container encode links (adf.ly,safelinking.net,bit.ly ...)
Example: with php

*Demo worked with example link only*

*Direct query http://api.urlchecker.org/?decodelinks=http://pastebin.com/raw.php?i=A1K3TxXE&key=YOUR_API_KEY*

```php
   <?php
    $response_format="xml";
    $key="demo";// get from member area
    $decodelinks="http://pastebin.com/raw.php?i=DUfzyeXn";
    $api = 'http://api.urlchecker.org/';
    $ch = curl_init($api);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&key=$key&decodelinks=$decodelinks");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);

    $response = curl_exec($ch);
    echo $response;
    ?>
```
 Out put 'xml'
 
 

```xml


        <response>
                    <title>Checked by urlchecker version 1.0</title>
                    <url>http://pastebin.com/raw.php?i=A1K3TxXE</url>
                    <api_query>59</api_query>
                    <daily_limited>250</daily_limited>
                    <api_member_pack>Free</api_member_pack>
                    <api_version>1.0</api_version>
                    <webMaster>thomanphan@gmail.com</webMaster>
                <item>
                     <link>https://adf.ly/j24Fg</link>
                     <result>Success</result> 
                     <status>decoded</status> 
                     <decoded_link>http://billionuploads.com/fqc70c48t6b6</decoded_link>
                </item>
                <item>
                     <link>http://adf.ly/rz625</link>
                     <result>Success</result> 
                     <status>decoded</status> 
                     <decoded_link>https://github.com/Thomanphan/urlchecker</decoded_link>
                </item>
                <item>
                     <link>http://adf.ly/rz645</link>
                     <result>Success</result> 
                     <status>decoded</status> 
                     <decoded_link>http://urlchecker.org/</decoded_link>
                </item>
                <item>
                     <link>http://adf.ly/rz654</link>
                     <result>Success</result> 
                     <status>decoded</status> 
                     <decoded_link>http://urlchecker.org/member/</decoded_link>
                </item>
        </response>
```
## Decode single link (adf.ly,safelinking.net,bit.ly ...)
Example: with php

*Demo worked with example link only*

*Direct query http://api.urlchecker.org/?decodelink=http://adf.ly/rz645&key=YOUR_API_KEY*

```php
   <?php
    $response_format="xml";
    $key='demo';// get from member area
    $decodelink="http://adf.ly/rz645";
    $api = 'http://api.urlchecker.org/';
    $ch = curl_init($api);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&key=$key&decodelink=$decodelink");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);

    $response = curl_exec($ch);
    echo $response;
    ?>
```
 Out put 'xml'
 
 

```xml


        <response>
                    <title>Checked by urlchecker version 1.0</title>
                    <api_query>59</api_query>
                    <daily_limited>250</daily_limited>
                    <api_member_pack>Free</api_member_pack>
                    <api_version>1.0</api_version>
                    <webMaster>thomanphan@gmail.com</webMaster>
                <item>
                     <link>http://adf.ly/rz645</link>
                     <result>Success</result> 
                     <status>decoded</status> 
                     <decoded_link>http://urlchecker.org/</decoded_link>
                </item>
        </response>
```

## Check single link (file host rapidgator,mediafire,mega.nz...)
Example: with php

  Out put xml
  
  

```php
   <?php
    $response_format="xml";
    $key='demo';// get from member area
    $link="http://www.mediafire.com/?wfghxg5x7d159x8";
    $url = 'http://api.urlchecker.org/';
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&key=$key&link=$link");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);

    $response = curl_exec($ch);
    echo $response;
    ?>
```
And response
OUTPUT


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

Example: php

Request url

```php
<?php
$response_format="json";
$key='demo';// get from member area
$link="http://www.mediafire.com/?wfghxg5x7d159x8";
$url = 'http://api.urlchecker.org/';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&key=$key&link=$link");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  = curl_exec($ch);
echo $response;
?>
```



OUTPUT



```php
    {"link":"http:\/\/www.mediafire.com\/?wfghxg5x7d159x8","result":"Success","status":"working","current_api_version":"0.1"}

```



Out put txt

Example: php

Request url



```php
<?php
$response_format="txt";
$key="demo";// get from member area
$link="http://www.mediafire.com/?wfghxg5x7d159x8";
$url = 'http://api.urlchecker.org/';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "response_format=$response_format&key=$key&link=$link");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  = curl_exec($ch);
echo $response;
?>
```


OUTPUT



```php
link:http://www.mediafire.com/?wfghxg5x7d159x8|result:Success|status:working|api_query:1|current_api_version:0.2

```
