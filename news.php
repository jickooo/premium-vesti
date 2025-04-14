<?php
header('Content-Type: application/json');

$apiKey = 'YOUR_NEWS_API_KEY';
$apiUrl = 'https://newsdata.io/api/1/news?apikey=' . $apiKey . '&q=mobile%20phones&language=sr';

$response = file_get_contents($apiUrl);
echo $response;
?>
