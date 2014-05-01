<?php

$user_id = 'SPECIFIC USER ID';
$access_token = 'YOUR ACCESS TOKEN';
$url = 'https://api.instagram.com/v1/users/{user_id}/media/recent/?client_id={access_token}' //example url
function fetchInsta($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
  $data = curl_exec($ch);
  curl_close($ch); 
  return $data;
}
$instagram = json_decode(fetchInstaData($url)); // you can iterate through this via PHPs superset of JSON
var_dump($instagram);

?>