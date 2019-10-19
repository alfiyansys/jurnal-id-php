<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

//use JurnalID\JurnalWrapper;
use JurnalID\Accounts;

require "apikey.php";
//$jurnal = new JurnalWrapper($apikey, FALSE);
$accounts = new Accounts($apikey, FALSE);

//echo $jurnal->get_api_key();
//echo $jurnal->get_endpoint();
//echo json_encode($jurnal->jurnal_exec("accounts"));
echo json_encode($accounts->get());
