<?php
use Fetch\Interfaces\Response as ResponseInterface;

require_once "vendor/autoload.php";

// Simple GET request
$response = fetch('https://example.com');
echo $users = $response->text();
