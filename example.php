<?php

require_once __DIR__."/vendor/autoload.php";

use Fetch\Interfaces\Response as ResponseInterface;

// Simple GET request
$response = fetch('https://example.com');
echo $users = $response->text();
