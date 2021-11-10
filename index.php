<?php
$url = "http://www.google.com";
$ch = curl_init();
curl_setopt($ch,
    CURLOPT_URL, $url);
curl_setopt($ch,
    CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($ch);
print $return;
curl_close($ch);
?>
