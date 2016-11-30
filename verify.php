<?php
$access_token = 'CD8J9hyzGd96dJizoCZemLrIQidvUe2i+QUPhAWYDgfQOlbpKjT6XKIHbNzX2pzxVdWpJ14QZApzZ59YGxpyU/ef0hr7IKSkoQRgya5z9/Gv3cnloZUXz4tB+4d6re7ZZlu/1kT5fMnEQ4nr09blpgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
