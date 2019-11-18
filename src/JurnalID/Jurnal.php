<?php
/*
Jurnal.ID API Wrapper
M. Alfiyan Syamsuddin (alfiyansys)
mas@alfiyan.id

@20191018
*/

namespace JurnalID;

class Jurnal{
	public $apikey;
	private $production;
	const SANDBOX_API = "https://sandbox-api.jurnal.id/core/api/v1/";
	const API = "https://api.jurnal.id/core/api/v1/";

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
	public function exec($cmd, $payload = array(), $HTTP = "GET"){
		$url = $this->get_endpoint();
		
		$payload = json_encode($payload);
		$cmd_url = $url.$cmd;

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $cmd_url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $HTTP,
			CURLOPT_POSTFIELDS => $payload,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTPHEADER => array(
				"apikey: $this->apikey",
				"content-type: application/json"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {			
			return array("err", $err);
		} else {
			// return decoded json data
			return json_decode($response);
		}
	}
}
