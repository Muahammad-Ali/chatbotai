<?php

require "vendor/autoload.php";


use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$data = json_decode(file_get_contents(
    "php://input"));
$text = $data->text;
$client = new Client("AIzaSyDTmLom3fC8M7_7vyOwqHobSFAu9po0R74");


$response = $client->geminiPro()->generateContent(
    new TextPart($text),
);

echo $response->text()

?>