<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

function encd($inp = array()){
	return json_encode($inp);
}

use JurnalID\Jurnal;
use JurnalID\Accounts;

require "apikey.php";
$jurnal = new Jurnal($apikey, FALSE);
$accounts = new Accounts($apikey, FALSE);

//echo $jurnal->get_api_key();
//echo $jurnal->get_endpoint();
//echo json_encode($jurnal->jurnal_exec("accounts"));
//echo encd($accounts->get());
//echo encd($accounts->get());
echo encd($jurnal->exec("contacts"));
