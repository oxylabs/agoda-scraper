<?php

$params = [
    'source' => 'universal',
    'url' => 'https://www.agoda.com/?cid=1891458&tag=24bd4b3f-b6a1-50d5-e639-d9c49ca41c49&gclid=cj0kcqia7oqrbhd9arisak3uxh0kts4hidqpr1aegsv5v_2puktdlkqbnwfahx2kuewg9gmwkerfz_oaalcyealw_wcb&ds=d0lupzqbrarv6xh%2f'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://realtime.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user" . ":" . "pass1");

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>