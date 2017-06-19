<?php
	class Call {
		private $api;
		private $host = "http://hackathon.mabesad.mil.id";

		function __construct($api) {
			$this->api = $api;
		}
		function login($username, $password,$key,$app_id) {
			$data = array("demo" => $username, "demo" => $password,"hackathon"=>$app_id,"");
			$result = $this->api->CallAPI('POST', $this->host . '/auth/login', $data);
			return $result;
		}
	}
?>
