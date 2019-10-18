<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use JurnalID\JurnalWrapper;

$jurnal = new JurnalWrapper("testatasasedadasda");

echo $jurnal->get_api_key();
