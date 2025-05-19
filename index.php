<?php
use Fetch\Interfaces\Response as ResponseInterface;

require_once "vendor/autoload.php";

// Simple GET request
$response = fetch('https://api.example.com/users');
$users = $response->json();

// POST request with JSON body
$response = fetch('https://api.example.com/users', [
    'method' => 'POST',
    'json' => ['name' => 'John Doe', 'email' => 'john@example.com'],
]);

echo $response->json();
