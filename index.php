<?php
use Fetch\Interfaces\Response as ResponseInterface;

require_once "vendor/autoload.php";

// Simple GET request
$response = fetch('https://jsonplaceholder.typicode.com/users');
$users = $response->json();

echo '<pre>';
var_dump($users);
echo '</pre>';
