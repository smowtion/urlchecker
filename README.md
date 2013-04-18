urlchecker
==========

Urlchecker.net API

URL:http://urlchecker.net/api.php
Description : Urlchecker.net is a website tools to help you find out the link want to download still A Live or Dead

Required parameters
Link: Link need check ( see list host support from http://urlchecker.net/hosts.html)


Optional Parameters
response_format : 'xml' or 'json' (default 'xml')

Example:
Request url

http://urlchecker.net/api.php?format=xml&link=http://www.mediafire.com/?wfghxg5x7d159x8

And response

<response>
<link>http://www.mediafire.com/?wfghxg5x7d159x8</link>
<result>Success</result>
<status>working</status>
<current_api_version>0.1</current_api_version>
</response>
