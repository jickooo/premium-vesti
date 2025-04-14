<?php
header('Content-Type: application/json');

$apiKey = 'OVDE_STAVI_TVOJ_API_KLJUČ';
$country = 'rs';
$language = 'sr';
$category = 'technology';
$keyword = urlencode('mobilni telefoni');

$url = "https://newsdata.io/api/1/news?apikey=pub_80387fb505b3f83d87f6f1d65b65caa8ecdd7&q=mobilni%20telefoni ";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
