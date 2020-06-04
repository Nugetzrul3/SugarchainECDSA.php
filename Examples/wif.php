<?php

require_once '../src/SugarchainPHP/SugarchainECDSA/SugarchainECDSA.php';

use SugarchainPHP\SugarchainECDSA\SugarchainECDSA;

$sugarchainECDSA = new SugarchainECDSA();
$sugarchainECDSA->generateRandomPrivateKey(); //generate new random private key

$wif = $sugarchainECDSA->getWif();
$address = $sugarchainECDSA->getAddress();
echo "Address : " . $address . PHP_EOL;
echo "WIF : " . $wif . PHP_EOL;

unset($sugarchainECDSA); //destroy instance

//import wif
$sugarchainECDSA = new SugarchainECDSA();
if($sugarchainECDSA->validateWifKey($wif)) {
    $sugarchainECDSA->setPrivateKeyWithWif($wif);
    $address = $sugarchainECDSA->getAddress();
    echo "imported address : " . $address . PHP_EOL;
} else {
    echo "invalid WIF key" . PHP_EOL;
}
