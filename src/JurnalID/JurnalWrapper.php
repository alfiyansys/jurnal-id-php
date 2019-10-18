<?php

namespace JurnalID;

class JurnalWrapper{
	public $apikey;

	function __construct($apikey){
		$this->apikey = $apikey;
	}

	function get_api_key(){
		return $this->apikey;
	}
}