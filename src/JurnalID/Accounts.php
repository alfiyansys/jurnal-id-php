<?php
/*
Jurnal.ID API Wrapper: Account
M. Alfiyan Syamsuddin (alfiyansys)
mas@alfiyan.id

@20191019
*/

namespace JurnalID;
use JurnalID\JurnalWrapper;

class Accounts extends JurnalWrapper{
	function __construct($apikey, $production = true){
		parent::__construct($apikey, $production);
	}

	public function get(){
		return $this->jurnal_exec("accounts");
	}
}