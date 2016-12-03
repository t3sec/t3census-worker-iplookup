<?php
$dir = dirname(__FILE__);
$libraryDir = realpath($dir . '/library');
$vendorDir = realpath($dir . '/vendor');

require_once $libraryDir . '/Bing/Scraper/ReverseIpLookup.php';
require_once $vendorDir .  '/autoload.php';


$ip = '46.252.18.227';


$objLookup = new T3census\Bing\Scraper\ReverseIpLookup();
$objLookup->setEndpoint('http://www.bing.com/search');
$results = $objLookup->setQuery('ip:' . $ip)->getResults();
print_r($results);
?>