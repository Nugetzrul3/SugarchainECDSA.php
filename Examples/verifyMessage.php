<?php

require_once '../src/SugarchainPHP/SugarchainECDSA/SugarchainECDSA.php';

use SugarchainPHP\SugarchainECDSA\SugarchainECDSA;

$sugarchainECDSA = new SugarchainECDSA();

//To verify a message like this one
$rawMessage = "-----BEGIN BITCOIN SIGNED MESSAGE-----
Test message
-----BEGIN SIGNATURE-----
1L56ndSQ1LfrAB2xyo3ZN7egiW4nSs8KWS
HxTqM+b3xj2Qkjhhl+EoUpYsDUz+uTdz6RCY7Z4mV62yOXJ3XCAfkiHV+HGzox7Ba/OC6bC0y6zBX0GhB7UdEM0=
-----END BITCOIN SIGNED MESSAGE-----";

if($sugarchainECDSA->checkSignatureForRawMessage($rawMessage)) {
    echo "Message verified" . PHP_EOL;
} else {
    echo "Couldn't verify message" . PHP_EOL;
}

// alternatively
$signature = "HxTqM+b3xj2Qkjhhl+EoUpYsDUz+uTdz6RCY7Z4mV62yOXJ3XCAfkiHV+HGzox7Ba/OC6bC0y6zBX0GhB7UdEM0=";
$address = "1L56ndSQ1LfrAB2xyo3ZN7egiW4nSs8KWS";
$message = "Test message";

if($sugarchainECDSA->checkSignatureForMessage($address, $signature, $message)) {
    echo "Message verified" . PHP_EOL;
} else {
    echo "Couldn't verify message" . PHP_EOL;
}