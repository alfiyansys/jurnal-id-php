<?php

namespace JurnalID;

class JurnalWrapper{
	public $apikey;
	private $production;
	private const SANDBOX_API = "https://sandbox-api.jurnal.id/core/api/v1/";
	private const API = "https://api.jurnal.id/core/api/v1/";

	function __construct($apikey, $production = true){
		$this->apikey = $apikey;
	}

	function get_api_key(){
		return $this->apikey;
	}

	function get_endpoint(){
		return ($this->production)?SELF::API:SELF::SANDBOX_API;
	}

	/*
	$cmd : Command endpoint
	$payload : Data payload as array
	$HTTP : HTTP request method
	*/
	function jurnal_exec($cmd, $payload = array(),$HTTP = "GET"){

	}
}
