#Url Checker API Documentation
### Update Nov 6th, 2014

---------
URL:http://urlchecker.net/#api

### Description :
Urlchecker.net is a website tools to help you find out the link want to download still A Live or Dead
and get file name,file size

### Required parameters
- key : API key( login http://urlchecker.net/member/ and get this key)
- link :single Links ( see list host support from http://urlchecker.net/#hosts) (rapidgator.net,mediafire.com...)
- url : website or folder need extract ( extract and check )
- decodelink : Decode single link only (adf.ly,safelinking.net,bit.ly ...)
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
### Extract website or folder
Example: with php

*Demo worked with example link only*

*Direct query http://api.urlchecker.net/?url=http://pastebin.com/raw.php?i=d2XYaiYf*
```php
   <?php
    $response_format="xml";
    $key="demo"; // get from member area
    $link="http://pastebin.com/raw.php?i=d2XYaiYf";
    $url = 'http://api.urlchecker.net/';
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
### Decode multi link or website container encode links (adf.ly,safelinking.net,bit.ly ...)
Example: with php

*Demo worked with example link only*

*Direct query http://api.urlchecker.net/?decodelinks=http://pastebin.com/raw.php?i=A1K3TxXE*

```php
   <?php
    $response_format="xml";
    $key="demo";// get from member area
    $decodelinks="http://pastebin.com/raw.php?i=DUfzyeXn";
    $api = 'http://api.urlchecker.net/';
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
### Decode single link (adf.ly,safelinking.net,bit.ly ...)
Example: with php

*Demo worked with example link only*

*Direct query http://api.urlchecker.net/?decodelink=http://adf.ly/rz645*

```php
   <?php
    $response_format="xml";
    $key='demo';// get from member area
    $decodelink="http://adf.ly/rz645";
    $api = 'http://api.urlchecker.net/';
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

### Check single link (file host)
Example: with php

  Out put xml
  
  

```php
   <?php
    $response_format="xml";
    $key='demo';// get from member area
    $link="http://www.mediafire.com/?wfghxg5x7d159x8";
    $url = 'http://api.urlchecker.net/';
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
$url = 'http://api.urlchecker.net/';
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
$url = 'http://api.urlchecker.net/';
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
