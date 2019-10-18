<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use JurnalID\JurnalWrapper;

require "apikey.php";
$jurnal = new JurnalWrapper($apikey, FALSE);

//echo $jurnal->get_api_key();
//echo $jurnal->get_endpoint();
echo $jurnal->jurnal_exec("accounts");
