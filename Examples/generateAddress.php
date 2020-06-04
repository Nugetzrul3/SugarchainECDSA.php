<?php

require_once '../src/SugarchainPHP/SugarchainECDSA/SugarchainECDSA.php';

use SugarchainPHP\SugarchainECDSA\SugarchainECDSA;

$sugarchainECDSA = new SugarchainECDSA();
$sugarchainECDSA->generateRandomPrivateKey(); //generate new random private key
$address = $sugarchainECDSA->getAddress(); //compressed Sugarchain address
echo "Address: " . $address . PHP_EOL;

//Validate an address (Verify the checksum)
if($sugarchainECDSA->validateAddress($address)) {
    echo "The address is valid" . PHP_EOL;
} else {
    echo "The address is invalid" . PHP_EOL;
}