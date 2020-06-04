<?php

require_once '../src/SugarchainPHP/SugarchainECDSA/SugarchainECDSA.php';

use SugarchainPHP\SugarchainECDSA\SugarchainECDSA;

$sugarchainECDSA = new SugarchainECDSA();
$sugarchainECDSA->generateRandomPrivateKey(); //generate new random private key

$message = "Test message";
$signedMessage = $sugarchainECDSA->signMessage($message);

echo "signed message:" . PHP_EOL;
echo $signedMessage . PHP_EOL;

/**
 * Will print something like this:

-----BEGIN BITCOIN SIGNED MESSAGE-----
Test message
-----BEGIN SIGNATURE-----
1L56ndSQ1LfrAB2xyo3ZN7egiW4nSs8KWS
HxTqM+b3xj2Qkjhhl+EoUpYsDUz+uTdz6RCY7Z4mV62yOXJ3XCAfkiHV+HGzox7Ba/OC6bC0y6zBX0GhB7UdEM0=
-----END BITCOIN SIGNED MESSAGE-----
 */


// If you only want the signature you can do this
$signature = $sugarchainECDSA->signMessage($message, true);

echo "signature:" . PHP_EOL;
echo $signature . PHP_EOL;
/**
 * Will print something like this:
HxTqM+b3xj2Qkjhhl+EoUpYsDUz+uTdz6RCY7Z4mV62yOXJ3XCAfkiHV+HGzox7Ba/OC6bC0y6zBX0GhB7UdEM0=
 */
