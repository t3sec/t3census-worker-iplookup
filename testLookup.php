<?php
require_once __DIR__.'/vendor/autoload.php';

$ip = '46.252.18.227';

$objLookup = new T3sec\BingScraper\ScraperSearch();
$objLookup->setEndpoint('http://www.bing.com/search');
$results = $objLookup->setQuery('ip:' . $ip)->getResults();
print_r($results);
?>