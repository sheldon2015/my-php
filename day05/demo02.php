<?php

$cookie_jar = dirname(__FILE__) . "/pic.cookie";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.3atop.cn/index');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_jar);
$data = 'username=13135681807&password=1988729ywz';
// $data = array('username' => '159000002', 'password' => '123456');
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
$content = curl_exec($curl);
echo $content;
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.3atop.cn/role");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_jar);
$content = curl_exec($curl);
//echo $content;
curl_close($curl);

?>