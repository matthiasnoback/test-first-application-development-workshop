<?php

header('HTTP/1.1 200 OK');
header('Content-Type: text/html');

$applicationEnv = isset($_ENV['APPLICATION_ENV']) ? $_ENV['APPLICATION_ENV'] : 'development';

echo '<p>Hello, world!</p>';
echo '<p>Running in application environment <strong>' . $applicationEnv . '</strong>.</p>';
