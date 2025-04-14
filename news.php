<?php
header('Content-Type: application/json');

$apiKey = 'YOUR_NEWS_API_KEY';
$apiUrl = 'https://newsdata.io/api/1/news?apikey=pub_80387fb505b3f83d87f6f1d65b65caa8ecdd7&q=mobilni%20telefoni';

$response = file_get_contents($apiUrl);
echo $response;
?>
