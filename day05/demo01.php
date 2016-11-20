<?php

$curl = curl_init('http://www.baidu.com/');
// curl_setopt($curl,CURLOPT_URL,'http://www.baidu.com/');
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$content=curl_exec($curl);

curl_close($curl);
