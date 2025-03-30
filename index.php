<?php
use GuzzleHttp\Client;
use Fetch\Http\ClientHandler;
use Fetch\Interfaces\Response as ResponseInterface;

require_once "vendor/autoload.php";

$response = fetch('https://example.com');

if ($response->ok()) {
 echo $response->text();
   // echo "FetchPHP is working correctly!";
}
